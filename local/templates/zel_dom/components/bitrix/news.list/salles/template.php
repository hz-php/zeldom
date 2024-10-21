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
<div class="sales" id="sales">
    <div class="swiper js-slider">
        <div class="swiper-wrapper">
            <?php
            foreach ($arResult['ITEMS'] as $item) {
                ?>
                <div class="swiper-slide">
                    <div class="sales__slide" data-aos="fade-up" data-aos-delay="0">
                        <div class="sales__pic"><img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" width="404" height="372" alt=""></div>
                        <div class="sales__desc">
                            <?= $item['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
        <div class="slider__nav sales__nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button">
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