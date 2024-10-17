<?php

/**
 * - Класс сущности ресторанов
 */

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;
use CIBlockSection;

class EntityRestourant extends Entity
{
    const IBLOCK_CODE = 'restourants';


    /**
     * - Получает города
     * @return array<array{
     *      id: int,
     *      name: string
     * }>
     */
    static function getCities(): array
    {
        $rsSect = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => self::getIblockId()]);
        $sections = [];
        while ($arSect = $rsSect->GetNext()) {
            $sections[] = [
                'id' => $arSect['ID'],
                'name' => $arSect['NAME']
            ];
        }
        return $sections;
    }


    /**
     * - Поулчате рестораны по ID города
     * @return self[]
     */
    static function getByCityId(int $cityId): array
    {
        return [];
    }


    /**
     * - Получает город
     * - Город является разделом
     */
    function getCity(): array
    {

        return [];
    }


    /**
     * - Получаем  рестораны включеные в день открытх дверей и есть дата > текущей
     */
    static function getFreeRestorans(string $city): array
    {

        $arrRestoransName = [];

        $cityId = self::getSectionIdByName($city);

        $arSelect = ["*", 'PROPERTY_CHEK_OPEN_DAY_DOOR', 'PROPERTY_SCHEDULE', 'PROPERTY_COUNT_OLD', 'PROPERTY_COUNT_CHILD', 'PROPERTY_TIME'];
        $arFilter = [
            "IBLOCK_ID" => DAY_OPEN_DOOR,
            "ACTIVE" => "Y",
            'SECTION_ID' => $cityId,
            'PROPERTY_CHEK_OPEN_DAY_DOOR_VALUE' => 'Да'
        ];

        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arrData = $ob->GetFields()['PROPERTY_SCHEDULE_VALUE'];

            foreach ($arrData as $data) {

                if (strtotime($data) > time()) {
                    $arrRestoransName[$ob->GetFields()['NAME']]['DATAS'][$data] = '';
                    $arrRestoransName[$ob->GetFields()['NAME']]['TIME'] = $ob->GetFields()['PROPERTY_TIME_VALUE'];
                }
            }
        }
        $newArrRestoransName = $arrRestoransName;

        $arrCountPlaceAllRestoransInCity = EntityRestourantRequest::getAllRestoransBisyPlace($city);

        foreach ($arrCountPlaceAllRestoransInCity as $namesRestoran => $arrData) {

            if (array_key_exists($namesRestoran, $arrRestoransName)) {

                foreach ($arrData as $dates => $data) {
                    if (!array_key_exists($dates, $newArrRestoransName[$namesRestoran]['DATAS'])) {
                        continue;
                    }
                    if ($data['TOTAL_COUNT_BUSY_PLACE'] >= 5) {
                        unset($arrRestoransName[$namesRestoran]['DATAS'][$dates]);
                    } else {
                        $arrRestoransName[$namesRestoran]['DATAS'][$dates] = 5 - $data['TOTAL_COUNT_BUSY_PLACE'];
                    }
                    if (!$arrRestoransName[$namesRestoran]['DATAS']) {
                        unset($arrRestoransName[$namesRestoran]);
                    }
                }
            }
        }

        return $arrRestoransName ?? [];
    }


    static function getSectionIdByName(string $name): int
    {
        $arFilter = array('IBLOCK_ID' => DAY_OPEN_DOOR, 'GLOBAL_ACTIVE' => 'Y', 'ACTIVE' => 'Y', 'NAME' => $name);
        $db_list = CIBlockSection::GetList([], $arFilter, true);

        if ($ar_result = $db_list->GetNext()) {
            $nameSection = $ar_result['ID'];
        }

        return $nameSection ?? 0;
    }


    static function getAllRestoran($activeElement = 'true')
    {

        $arFilter = array('IBLOCK_ID' => DAY_OPEN_DOOR);

        if ($activeElement) {
            $arFilter['GLOBAL_ACTIVE'] = 'Y';
            $arFilter['ACTIVE'] = 'Y';
        }


        $arSelect = ['NAME','ID'];

        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        $allRest = [];
        while ($ar_result = $res->GetNext()) {
            $allRest[] = $ar_result;
        }

        return  $allRest;
    }


    static function getRestById($id)
    {
        $arFilter = array('IBLOCK_ID' => DAY_OPEN_DOOR, 'ID' => $id);

        $arSelect = [
            "NAME",
            "PROPERTY_MAP",
            '*',
            'PROPERTY_WIFI',
            'PROPERTY_DRIVE',
            'PROPERTY_CAFE',
            'PROPERTY_KIOSK',
            'PROPERTY_PARKING',
            'PROPERTY_IMAGE',
            'PROPERTY_CITY',
            'PROPERTY_ZAL',
            'PROPERTY_BREAK',
            'PROPERTY_WAY',
            'PROPERTY_TEL',
            'PROPERTY_CHEK_OPEN_DAY_DOOR',
            'PROPERTY_PARKING_1',
            'PROPERTY_TEXT_PHONE',
            'PROPERTY_NAME_REST',
            'PROPERTY_IMAGE_REST',
            'PROPERTY_DESCRIPTION',
            'ID',

        ];

        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);


        if ($ar_result = $res->GetNext()) {
            $rest = $ar_result;
        }

        return  $rest;
    }
}
