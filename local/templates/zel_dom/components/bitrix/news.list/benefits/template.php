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
<div class="benefits" id="benefits">
    <ul class="benefits__nav">

        <li data-aos="fade-right" data-aos-delay="200">
            <a class="benefits__tab js-tab active" href="#tab-benefits-1">
                <i>
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][0]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                    </svg>
                </i>
                <?= $arResult['ITEMS'][0]['NAME'] ?>
            </a>
        </li>
        <li data-aos="fade-right" data-aos-delay="250">
            <a class="benefits__tab js-tab " href="#tab-benefits-2">
                <i>
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][1]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                    </svg>
                </i>
                <?= $arResult['ITEMS'][1]['NAME'] ?>
            </a>
        </li>
        <li data-aos="fade-right" data-aos-delay="300">
            <a class="benefits__tab js-tab " href="#tab-benefits-3">
                <i>
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][2]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                    </svg>
                </i>
                <?= $arResult['ITEMS'][2]['NAME'] ?>
            </a>
        </li>
        <li data-aos="fade-right" data-aos-delay="350">
            <a class="benefits__tab js-tab " href="#tab-benefits-3">
                <i>
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][3]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                    </svg>
                </i>
                <?= $arResult['ITEMS'][3]['NAME'] ?>
            </a>
        </li>
    </ul>
    <div class="benefits__slider">
        <div class="swiper js-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="benefits__slide">
                        <div class="benefits__pic" data-aos="fade" data-aos-delay="100">
                            <img width="629" src="<?= $arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC'] ?>" height="447" alt="">
                        </div>
                        <div class="benefits__desc" data-aos="fade-left" data-aos-delay="450">
                            <div class="benefits__head">
                                <i class="benefits__icon">
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][0]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                                    </svg>

                                </i><span class="benefits__title"><?= $arResult['ITEMS'][0]['NAME'] ?></span></div>
                            <div class="benefits__txt">
                                <?php
                                    echo $arResult['ITEMS'][0]['PREVIEW_TEXT'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="benefits__slide">
                        <div class="benefits__pic" data-aos="fade" data-aos-delay="100">
                            <img width="629" src="<?= $arResult['ITEMS'][1]['PREVIEW_PICTURE']['SRC'] ?>" height="447" alt="">
                        </div>
                        <div class="benefits__desc" data-aos="fade-left" data-aos-delay="450">
                            <div class="benefits__head">
                                <i class="benefits__icon">
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][1]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                                    </svg>

                                </i><span class="benefits__title"><?= $arResult['ITEMS'][1]['NAME'] ?></span></div>
                            <div class="benefits__txt">
                                <?php
                                echo $arResult['ITEMS'][1]['PREVIEW_TEXT'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="benefits__slide">
                        <div class="benefits__pic" data-aos="fade" data-aos-delay="100">
                            <img width="629" src="<?= $arResult['ITEMS'][2]['PREVIEW_PICTURE']['SRC'] ?>" height="447" alt="">
                        </div>
                        <div class="benefits__desc" data-aos="fade-left" data-aos-delay="450">
                            <div class="benefits__head">
                                <i class="benefits__icon">
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][2]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                                    </svg>

                                </i><span class="benefits__title"><?= $arResult['ITEMS'][2]['NAME'] ?></span></div>
                            <div class="benefits__txt">
                                <?php
                                echo $arResult['ITEMS'][2]['PREVIEW_TEXT'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="benefits__slide">
                        <div class="benefits__pic" data-aos="fade" data-aos-delay="100">
                            <img width="629" src="<?= $arResult['ITEMS'][3]['PREVIEW_PICTURE']['SRC'] ?>" height="447" alt="">
                        </div>
                        <div class="benefits__desc" data-aos="fade-left" data-aos-delay="450">
                            <div class="benefits__head">
                                <i class="benefits__icon">
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="<?= CFile::GetPath($arResult['ITEMS'][3]['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                                    </svg>

                                </i><span class="benefits__title"><?= $arResult['ITEMS'][3]['NAME'] ?></span></div>
                            <div class="benefits__txt">
                                <?php
                                echo $arResult['ITEMS'][3]['PREVIEW_TEXT'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
