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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'CONT' => 'bx_sitemap',
        'TITLE' => 'bx_sitemap_title',
        'LIST' => 'catalog-section-list-list',
    ),
    'LINE' => array(
        'TITLE' => 'catalog-section-list-item-title',
        'LIST' => 'catalog-section-list-line-list mb-4',
        'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'
    ),
    'TEXT' => array(
        'TITLE' => 'catalog-section-list-item-title',
        'LIST' => 'catalog-section-list-text-list row mb-4'
    ),
    'TILE' => array(
        'TITLE' => 'catalog-section-list-item-title',
        'LIST' => 'catalog-section-list-tile-list row mb-4',
        'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'
    )
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));


?>


<div class="top__wrap-2">
    <h1 class="top__title-2 top__title-2_v2" data-aos="fade-right" data-aos-delay="50">
        <strong>Каталог товаров</strong> для промышленного земледелия
    </h1>
    <div class="section__aside" data-aos="fade-left" data-aos-delay="100"><i>
            <img src="/local/templates/zel_dom/img/cat/aside.svg" width="80" height="80" alt=""></i>
        <p>всего <br><?= count($arResult['SECTIONS']) ?> категорий</p>
    </div>
</div>
<div class="catalog" id="catalog">
    <div class="catalog__items">
        <?php
        foreach ($arResult['SECTIONS'] as $section) {
            $subSections = CIBlockSection::GetList(
                ['SORT' => 'ASC'], // Сортировка
                ['IBLOCK_ID' => 2, 'SECTION_ID' => $section['ID'], 'ACTIVE' => 'Y'],
                false, // Не группируем по разделам
                ['ID', 'NAME', 'SECTION_PAGE_URL'] // Поля, которые нужно выбрать
            );

            ?>
            <div class="catalog__item" data-aos="fade-up" data-aos-delay="0">
                <div class="catalog__card">
                    <div class="catalog__pic">
                        <img src="<?= $section['PICTURE']['SRC'] ?>" width="324" height="257" alt="">
                    </div>
                    <span class="catalog__title"><?= $section['NAME'] ?></span>

                    <?php
                    // Собираем все подразделы в массив
                    $subSectionsArray = [];
                    while ($subSection = $subSections->GetNext()) {
                        $subSectionsArray[] = $subSection;
                    }

                    // Получаем количество подразделов
                    $totalSubSections = count($subSectionsArray);

                    if ($totalSubSections > 0) { ?>
                        <div class="catalog__body">
                            <!-- Первые 5 подразделов -->
                            <ul class="catalog__list">
                                <?php
                                for ($i = 0; $i < min(5, $totalSubSections); $i++) { // Выводим не больше 5 элементов
                                    $subSection = $subSectionsArray[$i];
                                    ?>
                                    <li><a href="<?= $subSection['SECTION_PAGE_URL'] ?>"><?= $subSection['NAME'] ?></a></li>
                                <?php } ?>
                            </ul>

                            <?php if ($totalSubSections > 5) { // Если есть больше 5 подразделов, выводим остальные ?>
                                <ul class="catalog__list js-list-hidden" style="display:none">
                                    <?php
                                    for ($i = 5; $i < $totalSubSections; $i++) { // Выводим остальные подразделы
                                        $subSection = $subSectionsArray[$i];
                                        ?>
                                        <li><a href="<?= $subSection['SECTION_PAGE_URL'] ?>"><?= $subSection['NAME'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>

                        <?php if ($totalSubSections > 5) { // Добавляем кнопку, если больше 5 подразделов ?>
                            <div class="catalog__bottom">
                                <button class="catalog__collapse js-catalog-collapse" type="button">
                                    <svg id="q" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28 17L20 25.5L28 34" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <a class="catalog__link-diag link-diag" href="<?= $section['SECTION_PAGE_URL'] ?>">
                                    <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                    </svg>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>

            </div>
            <?php
        }
        ?>

    </div>

</section>
<section class="call call-1 call-1_v3" id="call-1">
    <div class="container">
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "section_page",
            array(
                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                "IBLOCK_TYPE" => "content_home",
                "IBLOCK_ID" => "13",
                "FIELD_CODE" => array(
                    0 => "PREVIEW_PICTURE",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "TELEGA",
                    2 => "WHATSAP",
                    3 => "PHONE",
                    4 => "TEXT_INFO",
                    5 => "",
                ),
                "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
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
                "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                "USE_SHARE" => $arParams["USE_SHARE"],
                "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                "ADD_ELEMENT_CHAIN" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "section_page",
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