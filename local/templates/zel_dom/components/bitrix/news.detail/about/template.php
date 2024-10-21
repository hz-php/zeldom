<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="top__wrap-2">
    <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="50"><?= $arResult['PROPERTIES']['TITLE']['~VALUE']['TEXT'] ?></h1>
</div>
<div class="about" id="about">
    <div class="about__pics">
        <div class="about__pic" data-aos="fade-up" data-aos-delay="100">
            <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" width="717" height="489" alt=""></div>
        <div class="about__pic-label" data-aos="fade-up" data-aos-delay="150"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/asort/like.svg" width="83" height="83" alt="Like"></i>
            <p><?= $arResult['PREVIEW_TEXT'] ?></p>
        </div>
    </div>
    <div class="about__desc" data-aos="fade-right" data-aos-delay="250"><span class="about__title">Наша компания занимается доставкой сертифицированных товаров для промышленного земледелия по всему <strong>Казахстану</strong></span>
        <ul class="list">
            <?php
            foreach ($arResult['PROPERTIES']['CONTENT']['~VALUE'] as $content) {
                ?>
                <li><?= $content['TEXT']?></li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
</section>

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

<section class="section section_advants" id="s-advants">
    <div class="container">
        <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Интернет магазин <strong>«Земледел»</strong> – это</h2>
        <div class="advants">
            <div class="advants__item" data-aos="fade-up" data-aos-delay="0">
                <div class="advants__icon"><img src="<?= SITE_TEMPLATE_PATH ?>/img/advants/icon-1.svg" width="64" height="64" alt=""></div>
       <?= $arResult['PROPERTIES']['THIS']['~VALUE'][0]['TEXT']?>
            </div>
            <div class="advants__item" data-aos="fade-up" data-aos-delay="50">
                <div class="advants__icon"><img src="<?= SITE_TEMPLATE_PATH ?>/img/advants/icon-2.svg" width="64" height="64" alt=""></div>
                <?= $arResult['PROPERTIES']['THIS']['~VALUE'][1]['TEXT']?>
            </div>
            <div class="advants__item" data-aos="fade-up" data-aos-delay="100">
                <div class="advants__icon"><img src="<?= SITE_TEMPLATE_PATH ?>/img/advants/icon-3.svg" width="64" height="64" alt=""></div>
                <?= $arResult['PROPERTIES']['THIS']['~VALUE'][2]['TEXT']?>
            </div>
            <div class="advants__item" data-aos="fade-up" data-aos-delay="150">
                <div class="advants__icon"><img src="<?= SITE_TEMPLATE_PATH ?>/img/advants/icon-4.svg" width="64" height="64" alt=""></div>
                <?= $arResult['PROPERTIES']['THIS']['~VALUE'][3]['TEXT']?>
            </div>
        </div>
    </div>
</section>