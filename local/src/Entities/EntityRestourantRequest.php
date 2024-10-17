<?php

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;

class EntityRestourantRequest extends Entity
{
    const IBLOCK_CODE = 'restourants_requests';


    /**
     * - Создает заявку по данным пришедшим в запросе
     * @return ?self
     */
    static function createFromRequest()
    {
        if (empty($_REQUEST['count_old'])) {
            $countOld = $_REQUEST['count_old1'];
        } else {
            $countOld = $_REQUEST['count_old'];
        }

        $el = new CIBlockElement;
        $arProperties = [];
        $arProperties = [
            'CITY' => $_REQUEST['city'],
            'DATA' => $_REQUEST['date'],
            'RESTORAN' => $_REQUEST['rest'],
            'TIME' => $_REQUEST['time'],
            'COUNT_OLD' => $countOld,
            'COUNT_CHILD' => $_REQUEST['count_child'],
            'PHONE' => $_REQUEST['phone'],
            'MAIL' => $_REQUEST['email'],

        ];

        $arLoadProductArray = [
            "IBLOCK_ID"      => DAY_OPEN_DOOR_APPLICATION,
            "PROPERTY_VALUES" => $arProperties,
            "NAME"           => $_REQUEST['name'],
            "ACTIVE"         => "Y",
        ];

        $id = $el->Add($arLoadProductArray);

        return $id ? self::getById($id) : null;
    }

    /**
     * - Получаем все рестораны и присваеваем им колличество занятых мест на дату  
     */
    static function getAllRestoransBisyPlace(string $city): array
    {
        $arSelect = [
            '*',
            'PROPERTY_RESTORAN',
            'PROPERTY_TIME',
            'PROPERTY_DATA',
            'PROPERTY_COUNT_OLD',
            'PROPERTY_COUNT_CHILD',
        ];
        $thisDate = date('Y-m-d');
        $date = date('Y-m-d', strtotime($thisDate . " - 16 day"));
        $timestamp = MakeTimeStamp($date, 'YYYY-MM-DD');
        $convertDateTime = ConvertTimeStamp($timestamp);

        $arFilter = [
            "IBLOCK_ID" => DAY_OPEN_DOOR_APPLICATION,
            '<=DATE_MODIFY_FROM' => $convertDateTime,
            'PROPERTY_CITY' => $city,
            'ACTIVE' => 'Y'
        ];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        $arrCountPlaceInRestorans = [];
        while ($ob = $res->GetNextElement()) {
            $nameRestoran = $ob->GetFields()['PROPERTY_RESTORAN_VALUE'];
            $dataRestoran = $ob->GetFields()['PROPERTY_DATA_VALUE'];
            $countOld = $ob->GetFields()['PROPERTY_COUNT_OLD_VALUE'];
            $countChild = $ob->GetFields()['PROPERTY_COUNT_CHILD_VALUE'];
            $arrCountPlaceInRestorans[$nameRestoran][$dataRestoran]['TOTAL_COUNT_BUSY_PLACE'] = $arrCountPlaceInRestorans[$nameRestoran][$dataRestoran]['TOTAL_COUNT_BUSY_PLACE'] +  $countOld + $countChild;
        }
        return $arrCountPlaceInRestorans ?? [];
    }


    
}
