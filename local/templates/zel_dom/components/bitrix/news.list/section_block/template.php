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
file_put_contents(__DIR__ . '/_DEBUG_.txt', print_r($arResult['ITEMS'], true));
?>
<div class="info" id="info">
    <div class="info__slider">
        <div class="swiper js-slider">
            <div class="swiper-wrapper">
                <?php
                foreach ($arResult['ITEMS'] as $item) {
                    ?>
                    <div class="swiper-slide">
                        <a class="info__slide" href="/<?= $item['CODE']?>/" data-aos="fade-up" data-aos-delay="0">
                            <div class="info__pic">
                                <img width="64" src="<?= CFile::GetPath($item['PROPERTIES']['ICON']['VALUE']) ?>" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/1.svg" alt=""></div>
                            <span class="info__title"><?= $item['NAME'] ?></span>
                            <div class="info__bottom">
                                <span class="info__txt"><?= $item['PREVIEW_TEXT'] ?></span>
                                <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                ?>
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