<?php

namespace Zeldom\Bitrix\Options;

class Common extends Main
{
    const IBLOCK_CODE = '';
    const ELEMENT_CODE = '';


    static function getAddress(): string
    {
        return self::getOpt('ADDRESS', '');
    }
}
