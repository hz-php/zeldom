<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");

CModule::IncludeModule("iblock");
$arFields = [];
$arSelect = array("ID", "NAME");
$arFilter = array("IBLOCK_ID" => 22, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
$res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
while ($ob = $res->GetNextElement()) {
    $arFields[] = $ob->GetFields();
}
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "START_FROM" => "0",
    "PATH" => "",
    "SITE_ID" => "-",
),
    false
);

CModule::IncludeModule("iblock");

$tabs = [];
$resTabs = CIBlockElement::GetList(
    array(),
    ["IBLOCK_ID" => 23, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y"],
    false,
    array("nPageSize" => 50),
    ["ID", "NAME", "PROPERTY_EMAIL", "PROPERTY_NUMBERS", "PROPERTY_IMAGES", "PREVIEW_TEXT"]
);

while ($obTabs = $resTabs->GetNextElement()) {
    $fields = $obTabs->GetFields();
    $properties = $obTabs->GetProperties();

    // Добавляем свойства к полям элемента
    foreach ($properties as $propCode => $propValue) {
        if (is_array($propValue['VALUE'])) {
            $fields['PROPERTY_' . $propCode . '_VALUE'] = $propValue['VALUE'];
        } else {
            $fields['PROPERTY_' . $propCode . '_VALUE'] = [$propValue['VALUE']];
        }
    }

    // Проверяем, есть ли уже элемент с таким ID в массиве $tabs
    $elementExists = false;
    foreach ($tabs as &$tab) {
        if ($tab['ID'] == $fields['ID']) {
            // Объединяем свойства
            foreach ($fields as $key => $value) {
                if (strpos($key, 'PROPERTY_') === 0) {
                    // Преобразуем строку в массив, если нужно
                    if (!isset($tab[$key])) {
                        $tab[$key] = $value;
                    } else {
                        // Если $tab[$key] не массив, преобразуем его в массив
                        if (!is_array($tab[$key])) {
                            $tab[$key] = [$tab[$key]];
                        }
                        // Если $value не массив, также преобразуем в массив
                        if (!is_array($value)) {
                            $value = [$value];
                        }
                        $tab[$key] = array_merge($tab[$key], $value);
                    }
                }
            }
            $elementExists = true;
            break;
        }
    }

    // Если элемента с таким ID еще нет, добавляем его в массив $tabs
    if (!$elementExists) {
        $tabs[] = $fields;
    }
}
file_put_contents(__DIR__ . '/_DEBUG_', print_r($tabs, true));
?>

    <div class="top__wrap-2">
        <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="50"><strong>Как оформить заказ</strong> в интернет-магазине «Земледел» </h1>
    </div>
    <div class="buy" id="buy">
        <div class="buy__tabs">
            <ul class="buy__tabs-inside">
                <?php
                foreach ($arFields as $key => $value) {
                    ?>
                    <li data-aos="fade-right" data-aos-delay="<?= $key + 1 ?>00">
                        <a href="#tab-buy-<?= $key + 1 ?>">
                            <i>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-<?= $key + 1 ?>.svg" width="70" height="70" alt="">
                            </i>
                            <span><?= $value['NAME'] ?></span>
                        </a>
                    </li>

                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="buy__blocks">
            <!--TAB 1-->
            <div class="buy__block" id="tab-buy-1" data-aos="fade-up" data-aos-delay="300">
                <div class="buy__head">
                    <i>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-1.svg" width="74" height="74" alt="">
                    </i>
                    <span><?= $tabs[0]['NAME'] ?></span>
                </div>
                <div class="buy__txt"><?= $tabs[0]['PREVIEW_TEXT'] ?></div>
                <div class="buy__slider">
                    <ul class="buy__slider-tabs js-slider-tabs">
                        <li role="button" tabindex="0"><strong><i>1</i><small> шаг</small></strong><span>каталог товаров</span></li>
                        <li role="button" tabindex="0"><strong><i>2</i><small> шаг</small></strong><span>категории</span></li>
                        <li role="button" tabindex="0"><strong><i>3</i><small> шаг</small></strong><span>карточка товара</span></li>
                        <li role="button" tabindex="0"><strong><i>4</i><small> шаг</small></strong><span>корзина</span></li>
                        <li role="button" tabindex="0"><strong><i>5</i><small> шаг</small></strong><span>оформление заказа</span></li>
                    </ul>
                    <div class="buy__slider-wrap">
                        <div class="swiper js-slider-1">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($tabs[0]['PROPERTY_IMAGES_VALUE'] as $numbImage) {
                                    ?>
                                    <div class="swiper-slide"><img src="<?= CFile::GetPath($numbImage) ?>" width="1158" height="685" alt=""></div>
<!--                                    <div class="swiper-slide"><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/buy/pic-1-2.png" width="1158" height="685" alt=""></div>-->
<!--                                    <div class="swiper-slide"><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/buy/pic-1-3.png" width="1158" height="685" alt=""></div>-->
<!--                                    <div class="swiper-slide"><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/buy/pic-1-4.png" width="1158" height="685" alt=""></div>-->
<!--                                    <div class="swiper-slide"><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/buy/pic-1-5.png" width="1158" height="685" alt=""></div>-->
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="buy__slider-control">
                        <div class="buy__slider-scrollbar">
                            <div class="swiper-scrollbar js-scrollbar"></div>
                        </div>
                        <div class="slider__nav buy__slider-nav">
                                    <span class="slider__arrow slider__arrow_prev js-prev" role="button">
                                       <svg id="q" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M28 17L20 25.5L28 34" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                            <span class="slider__arrow slider__arrow_next js-next" role="button">
                                       <svg id="q" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M22 17L30 25.5L22 34" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--TAB 2-->
            <div class="buy__block" id="tab-buy-2">
                <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-2.svg" width="74" height="74" alt=""></i>
                    <span><?= $tabs[1]['NAME'] ?></span></div>
                <div class="buy__txt"><?= $tabs[1]['PREVIEW_TEXT'] ?></div>
                <div class="buy__wrap">
                    <div class="buy__row-2">
                        <div class="buy__col-2-1"><span class="buy__label">Позвоните по любому из основных номеров:</span>
                            <ul class="buy__phones">
                                <li><?= $tabs[1]['PROPERTY_NUMBERS_VALUE'][0]?></li>
                            </ul>
                        </div>
                        <div class="buy__col-2-1"><span class="buy__label">Напишите нам в мессенджеры:</span>
                            <ul class="socials buy__socials">
                                <li><a class="socials__link" href="https://wa.me/<?= $tabs[1]['PROPERTY_NUMBERS_VALUE'][1]?>" target="_blank" rel="noopener noreferrer">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/wa.svg" width="57" height="57" alt="WhatsApp"></a>
                                </li>
                                <li><a class="socials__link" href="https://t.me/<?= $tabs[1]['PROPERTY_NUMBERS_VALUE'][1]?>" target="_blank" rel="noopener noreferrer">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/tg.svg" width="57" height="57" alt="Telegram"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="buy__col-2-1"><span class="buy__label">Либо позвоните по дополнительным номерам</span>
                            <a class="btn2 btn2_big buy__btn-opt" href="#modal-dop-phones" data-fancybox-modal>Посмотреть дополнительные номера</a></div>
                    </div>
                </div>
            </div>
            <!--TAB 3-->
            <div class="buy__block" id="tab-buy-3">
                <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-3.svg" width="74" height="74" alt=""></i>
                    <span><?= $tabs[2]['NAME'] ?></span></div>
                <div class="buy__txt"><?= $tabs[2]['PREVIEW_TEXT'] ?>
                    <a class="buy__email" href="mailto:<?= $tabs[2]['PROPERTY_EMAIL_VALUE'] ?>" target="_blank"><?= $tabs[2]['PROPERTY_EMAIL_VALUE'] ?></a></div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <!--  SALES  -->
    <section class="section section_sales" id="s-sales">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">С нами выгодно: <strong>скидки и&nbsp;акции</strong></h2>

                        <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "salles",
                            array(
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "AJAX_MODE" => "Y",
                                "IBLOCK_TYPE" => "news",
                                "IBLOCK_ID" => "24",
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
    <!--  /SALES  -->

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "call_2",
    array(
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "IBLOCK_TYPE" => "content_home",
        "IBLOCK_ID" => "21",
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
        "ELEMENT_ID" => "364",
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>