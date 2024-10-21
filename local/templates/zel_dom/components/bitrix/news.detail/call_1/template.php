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
<section class="call call-1 call-1_v4" id="call-1">
    <div class="container">
        <div class="call__desc">
            <h2 class="call__title" data-aos="fade-right" data-aos-delay="50"><?= $arResult['NAME'] ?></h2>
            <div class="call__head-title">
                <ul class="call__list">
                    <li data-aos="fade-right" data-aos-delay="100"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-1.svg" width="48" height="48" alt=""></i>
                        <div><?= $arResult['PROPERTIES']['TEXT']['VALUE'] ?></div>
                    </li>
                </ul>
                <div class="call__socials">
                    <ul class="socials">

                        <li data-aos="fade" data-aos-delay="0"><a class="socials__link" href="tel:<?= $arResult['PROPERTIES']['NUMBERS']['VALUE'][0] ?>" target="_blank" rel="noopener noreferrer" data-type="phone">
                                <svg id="q" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M47.7607 40.9226L43.8604 36.4657C43.1546 35.6592 42.243 35.0594 41.223 34.7303C40.2029 34.4013 39.1127 34.3553 38.0686 34.5973C37.0245 34.8394 36.0657 35.3603 35.2945 36.1046C34.5232 36.8488 33.9685 37.7885 33.6895 38.8233C26.8846 37.0759 20.6273 29.9553 20.6075 23.9619C21.7935 23.824 22.9096 23.3289 23.8079 22.5423C24.9896 21.5079 25.7121 20.0465 25.8165 18.4795C25.9208 16.9125 25.3985 15.3682 24.3644 14.1862L20.4652 9.7306C19.431 8.54898 17.9698 7.82654 16.403 7.72219C14.8362 7.61784 13.2921 8.14012 12.1103 9.17416C-1.2567 20.873 33.8373 60.9751 47.2044 49.2763C48.3859 48.2423 49.1083 46.7813 49.2126 45.2147C49.317 43.6481 48.7947 42.1042 47.7607 40.9226Z"/>
                                </svg>
                            </a></li>
                        <li data-aos="fade" data-aos-delay="100"><a class="socials__link" href="https://wa.me/<?= $arResult['PROPERTIES']['NUMBERS']['VALUE'][1] ?>" target="_blank" rel="noopener noreferrer" data-type="whatsapp">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp"></a></li>
                        <li data-aos="fade" data-aos-delay="200"><a class="socials__link" href="https://t.me/<?= $arResult['PROPERTIES']['NUMBERS']['VALUE'][2] ?>" target="_blank" rel="noopener noreferrer" data-type="telegram">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/telegram-2.svg" width="57" height="57" alt="Telegram"></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="call__pic-1_v2" data-aos="fade-up" data-aos-delay="0">
            <img class="lazy" data-src="<?= $arResult['DETAIL_PICTURE']['SRC']?>" width="626" height="597" alt=""></div>
    </div>
</section>