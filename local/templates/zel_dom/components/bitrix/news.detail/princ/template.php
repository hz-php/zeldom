<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<h2 class="section__title" data-aos="fade-right" data-aos-delay="0">
    <?php
     echo $arResult['PROPERTIES']['NAME']['~VALUE']['TEXT'];
    ?>
</h2>
<div class="princ" id="princ">
    <div class="princ__pics">

        <div class="princ__diplom-1" data-aos="fade" data-aos-delay="0">
            <img width="444" src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGES']['VALUE'][0])?>" height="520" class="lazy" data-src="/local/templates/zel_dom/img/princ/diplom-2.png" alt="">
        </div>
        <div class="princ__diplom-2" data-aos="fade" data-aos-delay="100">
            <img width="444" src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGES']['VALUE'][1])?>" height="520" class="lazy" data-src="/local/templates/zel_dom/img/princ/diplom-1.png" alt="">
            </div>
        <div class="princ__label" data-aos="fade-left" data-aos-delay="0">
            <i><img width="74" alt="Reward" src="/local/templates/zel_dom/img/princ/reward.svg" height="74">
            </i>
            <p>
                <strong>Сертификат качества</strong><small> пример документа</small>
            </p>
        </div>
    </div>
    <div class="princ__desc">
                    <span class="princ__title" data-aos="fade-right" data-aos-delay="200">
                        <?= $arResult['PREVIEW_TEXT']?>
                    </span>
        <div class="princ__txt" data-aos="fade-right" data-aos-delay="250">
            <p>
                <?= $arResult['DETAIL_TEXT']?>
            </p>
        </div>
    </div>
</div>