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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'CONT' => 'bx_sitemap',
        'TITLE' => 'bx_sitemap_title',
        'LIST' => 'bx_sitemap_ul',
    ),
    'LINE' => array(
        'CONT' => 'bx_catalog_line',
        'TITLE' => 'bx_catalog_line_category_title',
        'LIST' => 'bx_catalog_line_ul',
        'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'
    ),
    'TEXT' => array(
        'CONT' => 'bx_catalog_text',
        'TITLE' => 'bx_catalog_text_category_title',
        'LIST' => 'bx_catalog_text_ul'
    ),
    'TILE' => array(
        'CONT' => 'bx_catalog_tile',
        'TITLE' => 'bx_catalog_tile_category_title',
        'LIST' => 'bx_catalog_tile_ul',
        'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'
    )
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
function getNounDeclension($count, $singular, $genitiveSingular, $genitivePlural) {
    $count = abs($count) % 100;
    $countLast = $count % 10;

    if ($count > 10 && $count < 20) {
        return $genitivePlural;
    }
    if ($countLast > 1 && $countLast < 5) {
        return $genitiveSingular;
    }
    if ($countLast == 1) {
        return $singular;
    }

    return $genitivePlural;
}
file_put_contents(__DIR__ . '/_DEBUG_', print_r($arResult['SECTIONS'], true));
?>
<div class="cat__slider">
    <div class="swiper js-slider">
        <div class="swiper-wrapper">
            <?php
            foreach ($arResult['SECTIONS'] as $section) {
                ?>
                <div class="swiper-slide">
                    <a class="cat__slide" href="<?= $section['SECTION_PAGE_URL'] ?>" data-aos="fade-up" data-aos-delay="0">
                        <div class="cat__pic"><img width="324" src="<?= $section['PICTURE']['SRC'] ?>" height="257" alt=""></div>
                        <div class="cat__desc"><span class="cat__title"><?= $section['NAME'] ?></span>
                            <div class="cat__footer"><span class="cat__count">
                                    <?php
                                    echo $section['ELEMENT_CNT'] . ' ' . getNounDeclension($section['ELEMENT_CNT'], 'товар', 'товара', 'товаров');
                                    ?>
                                    </span>
                                <span class="link-diag">
                                      <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                      </svg>
                                    </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="slider__nav js-nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button"><?= SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span></span>/img/svg/arrow-prev.svg#q"&gt;<span class="slider__arrow slider__arrow_next js-next" role="button"><?= SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span></span>/img/svg/arrow-next.svg#q"&gt;</div>
</div>
