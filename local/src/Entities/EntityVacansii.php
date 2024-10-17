<?php

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;
use CIBlockSection;

class EntityVacansii extends Entity
{

    static function getDataCity(): array
    {
        $arrIdRestorans = self::getIdRestoransHaveVacansia();
        $arrIdCityes = self::getIdCitiesByIdRestorans($arrIdRestorans);
        $cityes = self::getNameCityesByIdRestorn($arrIdCityes);

        return $cityes;
    }


    static function getIdRestoransHaveVacansia(): array
    {
        $arSelect = ['PROPERTY_RESTORANS'];
        $arFilter = ["IBLOCK_ID" => VACANSII, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y"];
        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);
        $idRestorans = [];
        while ($ob = $res->GetNextElement()) {
            $idRestoran = $ob->GetFields()['PROPERTY_RESTORANS_VALUE'];
            if (!in_array($idRestoran, $idRestorans)) {
                $idRestorans[] = $idRestoran;
            }
        }
        return $idRestorans;
    }


    static function getIdCitiesByIdRestorans(array $arrIdRestorans): array
    {
        $arSelect = ['IBLOCK_SECTION_ID'];
        $arFilter = ["ID" => $arrIdRestorans, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y"];
        $res1 = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        $idCityes = [];
        while ($ob1 = $res1->GetNextElement()) {
            $idCity = $ob1->GetFields()['IBLOCK_SECTION_ID'];
            if (!in_array($idCity, $idCityes)) {
                $idCityes[] = $idCity;
            }
        }
        return $idCityes;
    }


    static function getNameCityesByIdRestorn(array $idRestoran): array
    {
        $arFilter2 = ['ID' => $idRestoran];
        $db_list = CIBlockSection::GetList([], $arFilter2, true, ['NAME', 'ID']);
        $nameCityes = [];
        while ($ar_result = $db_list->GetNext()) {
            $nameCityes[] = $ar_result;
        }

        return $nameCityes;
    }


    static function getRestoransByIdCity(int $cityId): array
    {
        $idRestorans = self::getIdRestoransHaveVacansia();
        $arSelect = ['NAME', 'ID'];
        $arFilter = ["ID" => $idRestorans, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", 'IBLOCK_SECTION_ID' => $cityId];
        $res1 = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        $namesRestorans = [];
        while ($ob1 = $res1->GetNextElement()) {
            $namesRestorans[] = $ob1->GetFields()['NAME'];
        }
        return $namesRestorans;
    }


    static function getVacansiiByNameRestoran(string $nameRestoran): array
    {
        $arSelect = ["ID", "NAME"];
        $arFilter = ["IBLOCK_ID" => DAY_OPEN_DOOR, "ACTIVE_DATE" => "Y", 'NAME' => $nameRestoran, "ACTIVE" => "Y"];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        if ($ob = $res->GetNextElement()) {
            $idRestoran = $ob->GetFields()['ID'];
        }

        $arSelect1 = ['NAME'];
        $arFilter1 = ["IBLOCK_ID" => VACANSII, 'PROPERTY_RESTORANS' => $idRestoran];
        $res1 = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter1, false, [], $arSelect1);

        $vacansii = [];
        while ($ob1 = $res1->GetNextElement()) {
            $vacansii[] = $ob1->GetFields()['NAME'];
        }
        return $vacansii;
    }


    static function getMinYearWorkByNameVacansia(string $vacanisa): int
    {
        $arSelect = ['NAME', 'PROPERTY_MIN_YEAR_WORK'];
        $arFilter = ["IBLOCK_ID" => VACANSII, 'NAME' => $vacanisa];
        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        if ($ob = $res->GetNextElement()) {
            $year = $ob->GetFields()['PROPERTY_MIN_YEAR_WORK_VALUE'];
        }
        if (!$year) {
            $year = 18;
        }

        return $year;
    }


    static function getIdVacnsiaFriendsWork(): int
    {

        //получаем все свойства в конкретной вакансии
        $arSelect = [];
        $arFilter = ["IBLOCK_ID" => VACANSII, 'NAME' => $_REQUEST['services']];
        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        if ($ob = $res->GetNextElement()) {
            $options =  $ob->GetProperties();
        }

        //берем все id ресторанов присвоеной к вакансии
        $idRestorans = [];
        foreach ($options['RESTORANS']['VALUE'] as $idResoran) {
            $idRestorans[] = $idResoran;
        }

        //получаем название ресторанов
        $res = CIBlockElement::GetList(['id' => $idRestorans], ['ID' => $idRestorans], false, [], ['NAME']);
        $namesRestorans = [];
        while ($ob = $res->GetNextElement()) {
            $namesRestorans[] =  $ob->GetFields()['NAME'];
        }

        //сапостовляем поля
        $idVacaniaFrendsWork = '';
        foreach ($namesRestorans as $key => $nameRestoran) {
            if ($nameRestoran == $_REQUEST['rest']) {
                $idVacaniaFrendsWork = $options['ID_FRIENDS_WORK']['VALUE'][$key];
                break;
            }
        }

        return $idVacaniaFrendsWork ?? 0;
    }



    static function getAllVacansii(): array
    {
        $arSelect = ['NAME'];
        $arFilter = ["IBLOCK_ID" => VACANSII];
        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        while ($ob = $res->GetNextElement()) {
            $arrNameVacansii[] = $ob->GetFields()['NAME'];
        }

        return $arrNameVacansii ?? [];
    }
}
