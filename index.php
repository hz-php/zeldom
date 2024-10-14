<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин товаров для промышленного земледелия");
?>
    <div class="top__wrap top__wrap-1">
        <?php
        if (!CModule::IncludeModule("iblock"))
            return;
        $res = CIBlockElement::GetByID(317);
        if ($ar_res = $res->GetNext()) {
            $img = CFile::GetPath($ar_res['PREVIEW_PICTURE']);
            $background = CFile::GetPath($ar_res['DETAIL_PICTURE']);
            ?>
            <div class="top__label" data-aos="fade-left" data-aos-delay="300">
                <?= $ar_res['PREVIEW_TEXT']; ?>
            </div>
            <div class="top__desc top__desc-1">

                <h1 class="top__title" data-aos="fade-right" data-aos-delay="300"><?= $ar_res['NAME'] ?></h1>
                <div class="top__btns" data-aos="fade-right" data-aos-delay="400">
                    <a class="btn1 top__btn" href="/catalog/">
                        Перейти в каталог
                        <i class="btn1__arr">
                        </i>
                    </a>
                </div>

            </div>
            <div class="top__pic-1">
            <span>
                <img width="1680" src="<?= $background ?>" height="440" class="img-1" alt="">
            </span>
                <div class="img-2"><img width="1130" src="<?= $img ?>" height="440" alt=""></div>
            </div>
            <div class="top__dots js-dots"></div>
            <?php
        }
        ?>
    </div>

    <div class="slider top__slider" id="slider-top">
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider_top",
            array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "catalog",
                "IBLOCK_ID" => "5",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "ID",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "DESCRIPTION",
                    2 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
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
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "Y",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "COMPONENT_TEMPLATE" => "slider_top",
                "STRICT_SECTION_CHECK" => "N",
                "FILE_404" => ""
            ),
            false
        ); ?>
    </div>

    </div>
    <!--  BENEFITS  -->
    <section class="section section_benefits" id="s-benefits">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">
                Интернет-магазин «Земледел» — все&nbsp;для <strong>комфортного</strong> промышленного земледелия
            </h2>
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "benefits",
                array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "catalog",
                    "IBLOCK_ID" => "6",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
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
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "COMPONENT_TEMPLATE" => "benefits",
                    "STRICT_SECTION_CHECK" => "N",
                    "FILE_404" => ""
                ),
                false
            ); ?>
        </div>
    </section>
    <!--  /BENEFITS  -->
    <!--  CAT  -->
    <section class="section section_cat" id="s-cat">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Каталог товаров</strong> для фермерского хозяйства</h2>
            <div class="section__aside" data-aos="fade-left" data-aos-delay="100"><i><img width="80" src="/local/templates/zel_dom/img/cat/aside.svg" height="80" alt=""></i>
                <p>всего 10 категорий <br>и более 2500 + товаров</p>
            </div>
            <div class="cat" id="cat">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "section_list",
                    array(
                        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                        "FILTER_NAME" => "sectionsFilter",
                        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                        "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTIONS_LIST_PREVIEW_DESCRIPTION" => $arParams["SECTIONS_LIST_PREVIEW_DESCRIPTION"],
                        "SECTIONS_LIST_PREVIEW_PROPERTY" => ($arParams["SECTIONS_LIST_ROOT_PREVIEW_PROPERTY"] ? $arParams["SECTIONS_LIST_ROOT_PREVIEW_PROPERTY"] : 'UF_SECTION_DESCR'),
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("", ""),
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                        "SECTION_USER_FIELDS" => array("", ""),
                        "SHOW_PARENT_NAME" => "N",
                        "SHOW_SECTIONS_LIST_PREVIEW" => $arParams["SHOW_SECTIONS_LIST_PREVIEW"],
                        "SHOW_SECTION_LIST_PICTURES" => $arParams["SHOW_SECTION_LIST_PICTURES"],
                        "TOP_DEPTH" => 1,
                        "VIEW_MODE" => "LIST"
                    ),
                    $component
                ); ?>


                <div class="cat__btns" data-aos="fade-up" data-aos-delay="200">
                    <a class="btn1 top__btn" href="/catalog/">
                        <span>Смотреть весь каталог</span>
                        <i class="btn1__arr">
                            <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                      fill="white"/>
                                <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                            </svg>
                        </i></a>
                </div>
            </div>
        </div>
    </section>
    <!--  /CAT  -->

    <section class="call call-1" id="call-1">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "call_home",
                array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "9",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
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
                    "COMPONENT_TEMPLATE" => "call_home",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "STRICT_SECTION_CHECK" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            ); ?>
        </div>
    </section>
    <!--  ASORT  -->
    <section class="section section_asort" id="s-asort">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "asort",
                array(
                    "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                    "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                    "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                    "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                    "IBLOCK_TYPE" => "content_home",
                    "IBLOCK_ID" => "10",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "TEXT_FIELD",
                        1 => "AREA_TEXT",
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
                    "ELEMENT_ID" => "330",
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
                    "COMPONENT_TEMPLATE" => "asort",
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
        </div>
    </section>
    <!--  /ASORT  -->
    <!--  PARTNERS  -->
    <section class="section section_partners" id="s-partners">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Наши партнеры</strong> – мировые специалисты в&nbsp;сфере агропромышленности</h2>
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "partners",
                array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "11",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
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
                    "COMPONENT_TEMPLATE" => "call_home",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "STRICT_SECTION_CHECK" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            ); ?>

        </div>
    </section>
    <!--  /PARTNERS  -->
    <!--  PRINCIPLE  -->
    <section class="section section_princ" id="s-princ">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "princ",
                array(
                    "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                    "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                    "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                    "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                    "IBLOCK_TYPE" => "content_home",
                    "IBLOCK_ID" => "12",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "NAME",
                        1 => "IMAGES",
                        2 => "",
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
                    "ELEMENT_ID" => "347",
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
        </div>
    </section>
    <!--  /PRINCIPLE  -->
    <section class="call call-2" id="call-2">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "call",
                array(
                    "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                    "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                    "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                    "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                    "IBLOCK_TYPE" => "content_home",
                    "IBLOCK_ID" => "13",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "WARIANTS",
                        1 => "TEXT_FIELDS",
                        2 => "",
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
                    "ELEMENT_ID" => "348",
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
        </div>
    </section>
    <!--  ARTICLES  -->
    <section class="section section_articles" id="s-articles">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">
                Делимся <strong>полезными статьями</strong> по&nbsp;промышленному земледелию
            </h2>
            <?$APPLICATION->IncludeComponent("bitrix:news.list","articles_home",Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "14",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => Array("ID"),
                    "PROPERTY_CODE" => Array("DESCRIPTION"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
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
                    "PAGER_BASE_LINK_ENABLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "SHOW_404" => "Y",
                    "MESSAGE_404" => "",
                    "PAGER_BASE_LINK" => "",
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => ""
                )
            );?>

        </div>
    </section>
    <!--  /ARTICLES  -->
    <!--  INFO  -->
    <section class="section section_info" id="s-info">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Узнайте больше</strong> об <br>интернет-магазине «Земледел»</h2>
            <div class="info" id="info">
                <div class="info__slider">
                    <div class="swiper js-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a class="info__slide" href="garanties.html" data-aos="fade-up" data-aos-delay="0">
                                    <div class="info__pic">
                                        <img width="64" src="/local/templates/zel_dom/img/info/1.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/1.svg" alt=""></div>
                                    <span class="info__title">Гарантия</span>
                                    <div class="info__bottom">
                                        <span class="info__txt">сертифицированные товары, доставка в срок по договору, безопасная оплата покупок</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide"><a class="info__slide" href="buy.html" data-aos="fade-up" data-aos-delay="50">
                                    <div class="info__pic">
                                        <img width="64" src="/local/templates/zel_dom/img/info/2.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/2.svg" alt=""></div>
                                    <span class="info__title">Как купить</span>
                                    <div class="info__bottom"><span class="info__txt">пошаговая инструкция, как оформить заказ в интернет-магазине «Земледел»</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="info__slide" href="delivery.html" data-aos="fade-up" data-aos-delay="100">
                                    <div class="info__pic">
                                        <img width="64" src="/local/templates/zel_dom/img/info/3.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/3.svg" alt=""></div>
                                    <span class="info__title">Доставка</span>
                                    <div class="info__bottom"><span class="info__txt">получите расчет сроков и стоимости доставки в любой город Казахстана</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="info__slide" href="payments.html" data-aos="fade-up" data-aos-delay="150">
                                    <div class="info__pic">
                                        <img width="64" src="/local/templates/zel_dom/img/info/4.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/4.svg" alt=""></div>
                                    <span class="info__title">Оплата</span>
                                    <div class="info__bottom">
                                        <span class="info__txt">5 способов оплаты заказа в&nbsp;интернет-магазине «Земледел»</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav js-nav">
                        <div class="slider__nav js-nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/svg/arrow-prev.svg#q"></use>
                                </svg>
                            </span>
                            <span class="slider__arrow slider__arrow_next js-next" role="button">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/svg/arrow-next.svg#q"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  /INFO  -->
    <section class="call call-3" id="call-3">
        <div class="container">
            <div class="call__wrap">
                <div class="call__desc-3">
                    <h2 class="call__title-2" data-aos="fade-right" data-aos-delay="0">Получите <strong>профессиональную консультацию</strong> нашего менеджера</h2><span class="call__title-3" data-aos="fade-right" data-aos-delay="0">Мы подробно расскажем вам:</span>
                    <ul class="call__list call__list_v2">
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/call/icon-3-1.svg" height="48" alt=""></i>
                            <div>как улучшить технологию выращивания культур и&nbsp;повысить урожайность в поле или теплице</div>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/call/icon-3-2.svg" height="48" alt=""></i>
                            <div>поможем подобрать товары <span class="d-ib">для промышленного земледелия</span></div>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/call/icon-3-3.svg" height="48" alt=""></i>
                            <div>рассчитаем для вас норму расхода&nbsp;любого&nbsp;товара</div>
                        </li>
                    </ul>
                    <div class="call__row-btns">
                        <div class="call__btns" data-aos="fade-right" data-aos-delay="0">
                            <a class="btn1 call__btn" href="#modal-consult" data-fancybox-modal><span>Получить консультацию</span>
                                <i class="btn1__arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                        <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                              fill="white"/>
                                        <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                                    </svg>
                                </i></a></div>
                        <div class="call__socials">
                            <ul class="socials">
                                <li data-aos="fade" data-aos-delay="100"><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer"><img width="57" alt="WhatsApp" src="/local/templates/zel_dom/img/svg/whatsapp-2.svg" height="57"></a></li>
                                <li data-aos="fade" data-aos-delay="200"><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer"><img width="57" alt="Telegram" src="/local/templates/zel_dom/img/svg/telegram-2.svg" height="57"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="call__pic-3" data-aos="fade-up" data-aos-delay="0"><img width="798" src="/local/templates/zel_dom/img/call/pic-3-1.png" height="939" class="lazy" data-src="/local/templates/zel_dom/img/call/pic-3-1.png" alt="">
                    <div class="call__box-3-1"><i><img width="86" src="/local/templates/zel_dom/img/svg/call.svg" height="86" alt=""></i>
                        <p><strong class="color_green">Закутний Владислав</strong><small>менеджер интернет-магазина «Земледел»</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>