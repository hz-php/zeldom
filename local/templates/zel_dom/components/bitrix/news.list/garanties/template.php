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
<div class="garanties" id="garanties">
    <?php
    foreach ($arResult['ITEMS'] as $item) {
            $iconSrc = CFile::GetPath($item['PROPERTIES']['ICON']['VALUE']);
        ?>
        <div class="garanties__item" data-aos="fade-up" data-aos-delay="200">
            <div class="garanties__pic"><img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" width="719" height="387" alt=""></div>
            <div class="garanties__desc">
                <div class="garanties__head"><i><img src="<?= $iconSrc ?>" width="70" height="70" alt=""></i>
                    <div class="garanties__title"><?= $item['NAME'] ?></div>
                </div>
                <div class="garanties__body">
                    <div class="garanties__txt">
                        <p><?= $item['PREVIEW_TEXT'] ?></p>
                    </div>
                    <?php
                    if (!empty($item['PROPERTIES']['LINK']['VALUE'])) {
                        ?>
                        <a class="link-1 garanties__link" href="<?= $item['PROPERTIES']['LINK']['VALUE']?>">Подробнее о доставке</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>