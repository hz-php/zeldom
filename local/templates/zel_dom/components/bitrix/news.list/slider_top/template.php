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
<div class="top__slider-wrap">
    <div class="swiper js-slider">
        <div class="swiper-wrapper">
            <?php
            foreach ($arResult['ITEMS'] as $item) {
                $res = CIBlockSection::GetByID($item['PROPERTIES']['SECTION']['VALUE']);
                $ar_res = $res->GetNext();
                ?>
                <div class="swiper-slide">
                    <a class="top__slide" href="<?= $ar_res['SECTION_PAGE_URL']?>" data-aos="fade-up" data-aos-delay="450">
                        <div class="top__slide-pic">
                            <img width="490" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" height="280" alt="">
                        </div>
                        <div class="top__slide-desc">
                            <span class="top__slide-title" style="width: 75%;"><?= $item['NAME'] ?></span>
                            <p class="top__slide-txt">
                                <?= $item['PREVIEW_TEXT']?>
                            </p>
                            <span class="top__slide-link link-diag">
                            </span>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

</div>

<div class="slider__nav">
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