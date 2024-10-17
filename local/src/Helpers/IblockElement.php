<?php

/**
 * - Вспомогательный класс с методами для работы с элементами инфоблока
 */

namespace Zeldom\Bitrix\Helpers;

use Bitrix\Main\LoaderException;
use Bitrix\Main\ArgumentOutOfRangeException;
use Bitrix\Main\Config\ConfigurationException;
use Bitrix\Main\ObjectNotFoundException;
use Bitrix\Main\ArgumentNullException;
use Bitrix\Main\ArgumentException;
use CIBlockElement;
use PHPMailer\PHPMailer\Exception;

class IblockElement
{

    static function getIdByCode(string $code, string $iblockCode): int
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $iblockId = Iblock::getIdByCode($iblockCode);
        if (!$iblockId) {
            return 0;
        }
        $el = CIBlockElement::GetList([], ['=CODE' => $code, '=IBLOCK_ID' => $iblockId], false, false, ['ID'])->Fetch();
        return (int)($el['ID'] ?? 0);
    }



    static function getProperties(int $elId): array
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $el = CIBlockElement::GetByID($elId)->Fetch();

        if (!$el) {
            return [];
        }

        $dbProps = CIBlockElement::GetProperty($el['IBLOCK_ID'], $el['ID']);
        $res = [];

        while ($prop = $dbProps->Fetch()) {
            $res[$prop['CODE']] = $prop;
        }

        return $res;
    }


    /**
     * - Получает все активные элементы инфоблока
     * @param int $iblockId 
     * @param array $arOrder 
     * @return int[] 
     */
    static function getAllActive(int $iblockId, array $arOrder = ['SORT' => 'ASC']): array
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $dbRes = CIBlockElement::GetList($arOrder, ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'], false, false, ['ID']);

        $res = [];

        while ($el = $dbRes->Fetch()) {
            $res[] = (int)$el['ID'];
        }

        return $res;
    }


    /**
     * - Получает значение из массива свойства
     */
    static function getPropArrayValue(array $prop)
    {
        // список, возвращаем символьный код значения
        if ($prop['PROPERTY_TYPE'] === 'L') {
            return Property::getEnumXmlId((int)$prop['VALUE']);
        }
        // текст/html
        if ($prop['PROPERTY_TYPE'] === 'S') {
            if (!is_array($prop['VALUE'])) {
                return $prop['VALUE'] ?? $prop['DEFAULT_VALUE'] ?? '';
            }
            return $prop['VALUE']['TEXT'] ?? $prop['DEFAULT_VALUE']['TEXT'] ?? '';
        }
        // файл
        if ($prop['PROPERTY_TYPE'] === 'F') {
            return (int)($prop['VALUE'] ?? $prop['DEFAULT_VALUE'] ?? 0);
        }
        return $prop['VALUE'] ?? $prop['DEFAULT_VALUE'] ?? '';
    }
}
