<?php

/**
 * - Класс сущности ресторанов
 */

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;
use CIBlockSection;
use CModule;

class EntitySurvey extends Entity
{
    const IBLOCK_ID = ITERVIE;

    static function add(array $data)
    {
        $el = new CIBlockElement;

        $favites = '';

        foreach ($data['favorit_buy'] as $favorit) {
            $favites .= $favorit . '. ';
        }

        $kitchen = '';
        foreach ($data['kitchen'] as $elem) {
            $kitchen .= $elem . '. ';
        }

        $reson = '';

        foreach ($data['reason'] as $item) {
            if ($item == 'on') {
                continue;
            }

            $reson .= $item . '. ';
        }
        $reson .= $data['reason-other'];


        $arProperties = [];
        $arProperties = [
            'REST' => $data['services'],
            'SEX' => $data['sex'],
            'YEAR' => $data['years'],
            'COUNT_VISIT' => $data['count_visit'],
            'FAVORIT_BUY' => $favites,
            'PREFERENCES' =>   $data['preferences-other'] ?? $data['preferences'],
            'REASON' => $reson,
            'KITCHEN' => $kitchen,
            'IMPERSSION' => $data['impression'],
            'CANGE_OPINIONS' => $data['cange_opinions'],
            'CAHNGE_EXCURSION' => $data['change_excursion'],
            'QUESTIONS' => $data['questions']
        ];

        $arLoadProductArray = [
            "IBLOCK_ID"      => OPINION_OPEN_DAY,
            "PROPERTY_VALUES" => $arProperties,
            "NAME"           => $data['fullname'],
            "ACTIVE"         => "Y",
        ];

        $id = $el->Add($arLoadProductArray);

        return $id ? self::getById($id) : null;
    }
}
