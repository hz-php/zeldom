<?php

/**
 * - Класс со вспомагательными методами для работы с инфоблоками
 */

namespace Zeldom\Bitrix\Helpers;

use Bitrix\Main\Loader as MainLoader;
use CIBlock;

class Iblock
{


    /**
     * - Получает ID инфоблока по его символьному коду
     * @param string $code 
     * @return int 
     */
    static function getIdByCode(string $code): int
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $iblock = CIBlock::GetList([], ['=CODE' => $code])->Fetch();
        return (int)($iblock['ID'] ?? 0);
    }
}
