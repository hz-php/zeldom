<?php

namespace Zeldom\Bitrix\Options;

use CIBlockElement;
use CIBlockProperty;
use Zeldom\Bitrix\Helpers\Arr;
use Zeldom\Bitrix\Helpers\Iblock;


abstract class Main
{
    const IBLOCK_CODE = '';
    const ELEMENT_CODE = '';

    /**
     * @var array $elProps свойства элемента с опциями
     */
    private static $elProps = [];


    /**
     * @param string $key 
     * @param mixed $default
     * @return mixed
     */
    static function getOpt(string $key, $default = null)
    {
        return Arr::get(static::getProps(), $key, $default);
    }


    protected static function getIblockId(): int
    {
        if (!static::IBLOCK_CODE) {
            return 0;
        }
        return Iblock::getIdByCode(static::IBLOCK_CODE);
    }


    /**
     * - Получает все свойства элемента
     */
    protected static function getProps(): array
    {
        $key = static::class;
        if (!array_key_exists($key, self::$elProps)) {
            self::$elProps[$key] = static::fetchProps();
        }
        return self::$elProps[$key];
    }


    protected static function fetchProps(): array
    {
        $iblockId = static::getIblockId();
        if (!$iblockId || !static::ELEMENT_CODE) {
            return [];
        }
        $arrProps = CIBlockElement::GetList([], ['IBLOCK_ID' => $iblockId, 'CODE' => static::ELEMENT_CODE], false, false, ['PROPERTY_*'])->Fetch();
        $res = [];
        foreach ($arrProps as $key => $val) {
            if (!preg_match("/^PROPERTY_/", $key)) {
                continue;
            }
            $propId = (int)preg_replace("/^PROPERTY_/", '', $key);
            $prop = CIBlockProperty::GetByID($propId, $iblockId)->Fetch();
            $res[$prop['CODE']] = $val;
        }
        return $res;
    }
}
