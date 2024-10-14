<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<div class="call__desc">
    <div class="call__head-title">
        <h2 class="call__title" data-aos="fade-right" data-aos-delay="0">Мы на связи сейчас:</h2>
        <div class="call__socials">
            <?php $APPLICATION->IncludeComponent("bitrix:news.list", "contacts_home", array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "8",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("ID"),
                    "PROPERTY_CODE" => array("DESCRIPTION"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",

                )
            ); ?>

        </div>
    </div>
    <ul class="call__list">
        <li data-aos="fade-right" data-aos-delay="0">
            <i>
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-1.svg" width="48" height="48" alt="">
            </i>

            <div><?= $arResult['ITEMS'][0]['PROPERTIES']['TEXT_FIELD']['VALUE'][0]?></div>
        </li>
        <li data-aos="fade-right" data-aos-delay="100">
            <i>
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-2.svg" width="48" height="48" alt="">
            </i>
            <div><?= $arResult['ITEMS'][0]['PROPERTIES']['TEXT_FIELD']['VALUE'][1]?></div>
        </li>
        <li data-aos="fade-right" data-aos-delay="200">
            <i>
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-3.svg" width="48" height="48" alt="">
            </i>
            <div><?= $arResult['ITEMS'][0]['PROPERTIES']['TEXT_FIELD']['VALUE'][2]?></div>
        </li>
    </ul>

</div>
<div class="call__pic-1" data-aos="fade-up" data-aos-delay="0">
    <img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-1.png" width="610" height="546" alt="">
    <div class="call__pic-1-1" data-aos="fade-up" data-aos-delay="50">
        <img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-2.png" width="360" height="96" alt="">
    </div>
    <div class="call__pic-1-2" data-aos="fade-up" data-aos-delay="100">
        <img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-3.png" width="231" height="71" alt="">
    </div>
</div>