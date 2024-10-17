<?php

/**
 * - Класс сущности ресторанов
 */

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;
use CIBlockSection;

class EntityFoodtruck extends Entity
{

    static function getMobRestorans(): array
    {
        $arSelect = [];
        $arFilter = ["IBLOCK_ID" => MOBILE_REST_MAPS,'ACTIVE'=>'Y'];
        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        $restorans = [];
        while ($ob = $res->GetNextElement()) {
            $restorans[] =  $ob->GetProperties();
        }

        return $restorans;
    }
}
