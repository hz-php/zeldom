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
<div class="partners" id="partners">
    <div class="partners__slider">
        <div class="swiper js-slider">
            <div class="swiper-wrapper">
                <?php
                foreach ($arResult['ITEMS'] as $key => $item) {
                    ?>
                    <div class="swiper-slide">
                        <div class="partners__slide" data-aos="fade-up" data-aos-delay="<?= $key == 0 ? 0 : $key + 50 ?>">
                            <div class="partners__logo">
                                <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" width="" height="" alt="">
                            </div>
                            <span class="partners__label"><?= $item['NAME'] ?></span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="partners__bottom">
        <div class="partners__control">
            <div class="partners__scrollbar">
                <div class="swiper-scrollbar js-scrollbar"></div>
            </div>
            <div class="slider__nav partners__nav">
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
        <div class="partners__btns" data-aos="fade-left" data-aos-delay="200"><a class="btn2 partners__btn" href="#modal-diploms" data-fancybox-modal="">Смотреть благодарственные письма</a></div>
    </div>
</div>