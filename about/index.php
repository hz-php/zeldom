<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?>

<?php
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
    "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
    "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
    "SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
),
    false
);?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "about",
    array(
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "IBLOCK_TYPE" => "content_home",
        "IBLOCK_ID" => "18",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "TITLE",
            1 => "CONTENT",
            2 => "TEXT",
            3 => "THIS",
        ),
        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "META_KEYWORDS" => "-",
        "META_DESCRIPTION" => "-",
        "BROWSER_TITLE" => "-",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_TITLE" => "N",
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "FILE_404" => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => "N",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
        "PAGER_SHOW_ALL" => "N",
        "CHECK_DATES" => "N",
        "ELEMENT_ID" => "358",
        "ELEMENT_CODE" => "",
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "USE_SHARE" => $arParams["USE_SHARE"],
        "SHARE_HIDE" => $arParams["SHARE_HIDE"],
        "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
        "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
        "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
        "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
        "ADD_ELEMENT_CHAIN" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "princ",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N"
    ),
    $component
); ?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "call_1",
    array(
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "IBLOCK_TYPE" => "content_home",
        "IBLOCK_ID" => "19",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "NUMBERS",
            1 => "TEXT"
        ),
        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "META_KEYWORDS" => "-",
        "META_DESCRIPTION" => "-",
        "BROWSER_TITLE" => "-",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_TITLE" => "N",
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "FILE_404" => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => "N",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
        "PAGER_SHOW_ALL" => "N",
        "CHECK_DATES" => "N",
        "ELEMENT_ID" => "359",
        "ELEMENT_CODE" => "",
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "USE_SHARE" => $arParams["USE_SHARE"],
        "SHARE_HIDE" => $arParams["SHARE_HIDE"],
        "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
        "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
        "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
        "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
        "ADD_ELEMENT_CHAIN" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "princ",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N"
    ),
    $component
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>