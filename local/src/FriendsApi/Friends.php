<?php

namespace Itprofit\Bitrix\FriendsApi;

use CIBlockSection;
use Itprofit\Bitrix\Ajax\Main;


class Friends extends Main
{

    static function addCondidat($id): bool
    {
        $tel = str_replace(['(', ')', '-'], [''], $_REQUEST["tel"]);

        $requst = $_REQUEST;
        $birthDays = explode('.', $requst['birthday']);
        $birthDay = $birthDays[2] . '-' . $birthDays[1] . '-' . $birthDays[0];
        $canWork = $requst['services1'];
        $nameSity = self::getNameCityById($requst['city']);

        $restoran = $requst['rest'];

        $data = [
            'FirstName' => $requst['name'],
            "LastName" => $requst['surname'],
            'City' => $nameSity,
            'Source' => 'Rabota.mak.by',
            'TaskjobId' => $id,
            'BirthDate' => $birthDay,
            'Position' => $requst['services'],
            'AddWay'=>'Отклик',
            "Contacts" => [
                ['Phone' => $tel]
            ],
            'DuplicateProcessing' => 'Add',
            "AboutMe" => "Хочу работать в городе $nameSity в ресторане по адресу $restoran . Я могу работать: $canWork"
        ];

        $data = json_encode($data);

        $url = FRINDS_API_URL_SET_CANDIDAT;

        // Инициализируем сеанс:
        $curl = curl_init();
        // Указываем адрес страницы:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 5);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . FRINDS_API,
            'Content-Length: ' . strlen($data),
        ];

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $res = @json_decode(curl_exec($curl), true);

        curl_close($curl);
        if (!$res) {
            return false;
        }

        return !empty($res['Result']['CandidateId']);
    }


    static function getNameCityById(int $idCity): string
    {
        $arFilter2 = ['ID' => $idCity];
        $db_list = CIBlockSection::GetList([], $arFilter2, true, ['NAME']);
        $nameCityes = '';
        if ($ar_result = $db_list->GetNext()) {
            $nameCityes = $ar_result['NAME'];
        }

        return $nameCityes;
    }
}
