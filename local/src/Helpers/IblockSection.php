<?php

/**
 * - Вспомогательный класс с методами для работы с разделами инфоблока
 */

namespace Zeldom\Bitrix\Helpers;

use CIBlockElement;
use CIBlockSection;

class IblockSection
{

    static function getById(int $sectionId): array
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $section = CIBlockSection::GetByID($sectionId)->Fetch();

        return $section ? $section : [];
    }


    static function getField(int $sectionId, string $key, $def = null)
    {
        $iblockId = self::getIblockIdBySectionId($sectionId);
        $res = CIBlockSection::GetList([], ['ID' => $sectionId, 'IBLOCK_ID' => $iblockId], false, ['ID', $key])->Fetch();
        return $res[$key] ?? $def;
    }


    static function getIblockIdBySectionId(int $sectionId): int
    {
        $section = self::getById($sectionId);
        return (int)($section['IBLOCK_ID'] ?? 0);
    }
}
