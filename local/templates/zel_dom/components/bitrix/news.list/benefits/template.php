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
        <?php
            foreach ($arResult['ITEMS'] as $key => $item) {
            ?>
            <li data-aos="fade-right" data-aos-delay="200">
                <a class="benefits__tab js-tab <?= $key === 0 ? 'active' : '' ?>" href="#tab-benefits-<?= $key + 1 ?>">
                    <i>
                        <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="<?= CFile::GetPath($item['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                        </svg>
                    </i>
                    <?= $item['NAME'] ?>
                </a></li>
            <?php
        }
        ?>
    </ul>
    <div class="benefits__slider">
        <div class="swiper js-slider">
            <div class="swiper-wrapper">
                <?php
                foreach ($arResult['ITEMS'] as $key => $itemText) {
                ?>
                <div class="swiper-slide" >
                    <div class="benefits__slide">
                        <div class="benefits__pic" data-aos="fade" data-aos-delay="100">
                            <img width="629" src="<?= $itemText['PREVIEW_PICTURE']['SRC'] ?>" height="447" alt="">
                        </div>
                        <div class="benefits__desc" data-aos="fade-left" data-aos-delay="450">
                            <div class="benefits__head">
                                <i class="benefits__icon">
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="<?= CFile::GetPath($itemText['PROPERTIES']['ICON']['VALUE']) ?>#q"></use>
                                    </svg>

                                </i><span class="benefits__title"><?= $itemText['NAME']?></span></div>
                            <div class="benefits__txt">
                                <?php
                                 echo $itemText['PREVIEW_TEXT'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.benefits__tab');

        tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();

                // Убираем класс active у всех ссылок
                tabs.forEach(t => t.classList.remove('active'));

                // Добавляем класс active к текущей ссылке
                this.classList.add('active');
            });
        });
    });
</script>