<?php

namespace Zeldom\Bitrix\Entities;

use CIBlock;
use CIBlockElement;
use CIBlockProperty;
use CIBlockPropertyEnum;
use CSite;
use Zeldom\Bitrix\Helpers\Date;
use Zeldom\Bitrix\Helpers\Iblock;
use Zeldom\Bitrix\Helpers\IblockElement;


abstract class Entity
{

    /**
     * - Переопределяется в дочернем классе
     */
    const IBLOCK_CODE = '';
    public $bxData = [];


    protected function __construct(array $bxData)
    {
        $this->bxData = $bxData;
    }

    /**
     * @return static|null
     */
    static function getById(int $elId)
    {
        $data = CIBlockElement::GetByID($elId)->Fetch();
        return $data ? new static($data) : null;
    }

    /**
     * - Получает объект по данным битрикса
     * @return static
     */
    static function getByBxData(array $bxData)
    {
        return new static($bxData);
    }

    /**
     * - Добавляет новый элемент
     * @param array $params - массив данных как в CIBlockElement::Add()
     * - свойства передаем в ключе PROPERTY_VALUES
     * @see https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/add.php
     * 
     * @return static|null
     */
    static function add(array $params)
    {
        $el = new CIBlockElement;
        $params['IBLOCK_ID'] = self::getIblockId();

        if (isset($params['PROPERTY_VALUES'])) {
            $params['PROPERTY_VALUES'] = self::filterUpdateProps($params['PROPERTY_VALUES']);
        }

        $elId = $el->Add($params);
        return $elId ? static::getById((int)$elId) : null;
    }

    /**
     * - Обновляет существующий элемент
     * @param int $elId - ID элементаs
     * @param array $data - массив данных как в CIBlockElement::Add()
     * 
     * @return static|null null в случае ошибки, static - обновленный элемент
     */
    static function update(int $elId, array $data)
    {
        $props = [];

        if (isset($data['PROPERTY_VALUES'])) {
            $props = $data['PROPERTY_VALUES'];
            unset($data['PROPERTY_VALUES']);
        }

        $el = new CIBlockElement();

        if (!$el->Update($elId, $data)) {
            return null;
        }

        if (!$props) {
            static::clearIblockCache();
            return static::getById($elId);
        }

        $props = static::filterUpdateProps($props);

        CIBlockElement::SetPropertyValuesEx($elId, static::getIblockId(), $props);

        static::clearIblockCache();

        return static::getById($elId);
    }

    /**
     * - Фильтрует свойства для вставки в БД
     * - Определяет тип свойства и фильтрует значения:
     *   - Даты (приводит к нужному формату)
     *   - Даты и времени (приводит к нужному формату)
     *   - Списки, если в качестве значения передано не числовое значение,
     *   попытается получить ID значения списка по XML_ID
     * @todo добавить больше фильтров
     * @return array
     */
    protected static function filterUpdateProps(array $props)
    {
        foreach ($props as $propKey => $propValue) {
            $propData = CIBlockProperty::GetList([], ['IBLOCK_ID' => static::getIblockId(), 'CODE' => $propKey])->Fetch();
            if (!$propData) {
                continue;
            }
            if ($propData['MULTIPLE'] == 'N' && is_array($propValue)) {
                foreach ($propValue as $m => $multiplePropValue) {
                    $props[$propKey][$m] = static::filterSinglePropValue($propData, $multiplePropValue);
                }
            } else {
                $props[$propKey] = static::filterSinglePropValue($propData, $propValue);
            }
        }
        return $props;
    }


    protected static function filterSinglePropValue(array $propData, $propValue)
    {
        global $DB;

        $userType = strtolower($propData['USER_TYPE']);
        $type = strtolower($propData['PROPERTY_TYPE']);

        if ($userType == 'date') {
            return Date::format($DB->DateFormatToPHP(CSite::GetDateFormat('SHORT')), $propValue);
        }

        if ($userType == 'datetime') {
            return Date::format($DB->DateFormatToPHP(CSite::GetDateFormat('FULL')), $propValue);
        }

        if ($type === 'l' && $propValue && !is_numeric($propValue)) {
            $enumData = CIBlockPropertyEnum::GetList([], ['PROPERTY_ID' => $propData['ID'], 'IBLOCK_ID' => static::getIblockId(), 'XML_ID' => $propValue])->Fetch();
            if ($enumData) {
                return $enumData['ID'];
            }
        }

        return $propValue;
    }


    static function clearIblockCache()
    {
        CIBlock::clearIblockTagCache(static::getIblockId());
    }


    static function getIblockId(): int
    {
        return Iblock::getIdByCode(static::IBLOCK_CODE);
    }


    /////////////////////////////////////////////////////////////////
    //                      МЕТОДЫ ОБЪЕКТА
    ////////////////////////////////////////////////////////////////

    function getBxData(): array
    {
        return $this->bxData;
    }

    function getField(string $key, $default = null)
    {
        return $this->bxData[$key] ?? $default;
    }

    /**
     * - Получает массив свойства со значением
     */
    function getProp(string $key): ?array
    {
        if (!isset($this->bxData['PROPERTIES'])) {
            $this->bxData['PROPERTIES'] = IblockElement::getProperties($this->getId());
        }
        return $this->bxData['PROPERTIES'][$key] ?? null;
    }

    /**
     * - Получает значение свойства
     */
    function getPropValue(string $key)
    {
        $prop = $this->getProp($key);
        if (!$prop) {
            return null;
        }
        return IblockElement::getPropArrayValue($prop);
    }

    function getId(): int
    {
        return (int)$this->getField('ID', 0);
    }

    function getName(): string
    {
        return $this->getField('NAME', '');
    }

    function getPreviewText(): string
    {
        return $this->getField('PREVIEW_TEXT', '');
    }
}
