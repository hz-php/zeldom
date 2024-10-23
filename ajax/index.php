<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Записи Highload-блока");

use Bitrix\Main\Loader;

Loader::includeModule('iblock');

$res = CIBlockElement::GetList(
    Array(),
    [
        "IBLOCK_ID" => 25,
        "ACTIVE_DATE" => "Y",
        "ACTIVE" => "Y",
        "=PROPERTY_REGION" => $_GET['id']
    ],
    false,
    [],
    ["ID", "NAME", "PROPERTY_REGION"]
);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
}
file_put_contents(__DIR__ . '/_DEBUG_', print_r([$_GET['id'], $arFields], true));