<?php

/**
 * - Вспомогательный класс для работы со свойствами
 */

namespace Zeldom\Bitrix\Helpers;

use CIBlockPropertyEnum;

class Property
{


    static function getEnumXmlId(int $propValueId): string
    {
        $res = CIBlockPropertyEnum::GetByID($propValueId);
        return $res['XML_ID'] ?? '';
    }
}
