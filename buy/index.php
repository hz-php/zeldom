<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?>
<?php
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
    "START_FROM" => "0",
    "PATH" => "",
    "SITE_ID" => "-",
),
    false
);?>
            <ul class="breadcrumbs" data-aos="fade-right" data-aos-delay="0">
                <li><a href="index.html">Главная</a></li>
                <li><span>Как купить</span></li>
            </ul>
            <div class="top__wrap-2">
                <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="50"><strong>Как оформить заказ</strong> в интернет-магазине «Земледел» </h1>
            </div>
            <div class="buy" id="buy">
                <div class="buy__tabs">
                    <ul class="buy__tabs-inside">
                        <li data-aos="fade-right" data-aos-delay="100"><a href="#tab-buy-1"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-1.svg" width="70" height="70" alt=""></i><span>Оформите <br>заказ на сайте</span></a></li>
                        <li data-aos="fade-right" data-aos-delay="150"><a href="#tab-buy-2"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-2.svg" width="70" height="70" alt=""></i><span>Позвоните или напишите <br>нам в мессенджеры</span></a></li>
                        <li data-aos="fade-right" data-aos-delay="200"><a href="#tab-buy-3"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-3.svg" width="70" height="70" alt=""></i><span>Напишите на <br>электронную почту</span></a></li>
                    </ul>
                </div>
                <div class="buy__blocks">
                    <!--TAB 1-->
                    <div class="buy__block" id="tab-buy-1" data-aos="fade-up" data-aos-delay="300">
                        <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-1.svg" width="74" height="74" alt=""></i><span>Оформите заказ на&nbsp;сайте</span></div>
                        <div class="buy__txt">Следуйте схеме и сделайте заказ <strong>за 5 минут</strong></div>
                        <div class="buy__slider">
                            <ul class="buy__slider-tabs js-slider-tabs">
                                <li role="button" tabindex="0"><strong><i>1</i><small> шаг</small></strong><span>каталог товаров</span></li>
                                <li role="button" tabindex="0"><strong><i>2</i><small> шаг</small></strong><span>категории</span></li>
                                <li role="button" tabindex="0"><strong><i>3</i><small> шаг</small></strong><span>карточка товара</span></li>
                                <li role="button" tabindex="0"><strong><i>4</i><small> шаг</small></strong><span>корзина</span></li>
                                <li role="button" tabindex="0"><strong><i>5</i><small> шаг</small></strong><span>оформление заказа</span></li>
                            </ul>
                            <div class="buy__slider-wrap">
                                <div class="swiper js-slider-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/pic-1-1.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/pic-1-2.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/pic-1-3.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/pic-1-4.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/pic-1-5.png" width="1158" height="685" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy__slider-control">
                                <div class="buy__slider-scrollbar">
                                    <div class="swiper-scrollbar js-scrollbar"></div>
                                </div>
                                <div class="slider__nav buy__slider-nav">
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
                        </div>
                    </div>
                    <!--TAB 2-->
                    <div class="buy__block" id="tab-buy-2">
                        <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-2.svg" width="74" height="74" alt=""></i>
                            <span>Позвоните или напишите нам в мессенджеры</span></div>
                        <div class="buy__txt">Проконсультируем по всем интересующим вопросам и&nbsp;поможем оформить ваш заказ</div>
                        <div class="buy__wrap">
                            <div class="buy__row-2">
                                <div class="buy__col-2-1"><span class="buy__label">Позвоните по любому из основных номеров:</span>
                                    <ul class="buy__phones">
                                        <li>+7 (777) 208-99-55</li>
                                    </ul>
                                </div>
                                <div class="buy__col-2-1"><span class="buy__label">Напишите нам в мессенджеры:</span>
                                    <ul class="socials buy__socials">
                                        <li><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/wa.svg" width="57" height="57" alt="WhatsApp"></a>
                                        </li>
                                        <li><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/tg.svg" width="57" height="57" alt="Telegram"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="buy__col-2-1"><span class="buy__label">Либо позвоните по дополнительным номерам</span>
                                    <a class="btn2 btn2_big buy__btn-opt" href="#modal-dop-phones" data-fancybox-modal>Посмотреть дополнительные номера</a></div>
                            </div>
                        </div>
                    </div>
                    <!--TAB 3-->
                    <div class="buy__block" id="tab-buy-3">
                        <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/tab-3.svg" width="74" height="74" alt=""></i>
                            <span>Позвоните или напишите нам в мессенджеры</span></div>
                        <div class="buy__txt">Напишите ваши предложения и пожелания на нашу электронную почту
                            <a class="buy__email" href="mailto:zeldomkz@mail.ru" target="_blank">zeldomkz@mail.ru </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  SALES  -->
    <section class="section section_sales" id="s-sales">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">С нами выгодно: <strong>скидки и&nbsp;акции</strong></h2>
            <div class="sales" id="sales">
                <div class="swiper js-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sales__slide" data-aos="fade-up" data-aos-delay="0">
                                <div class="sales__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/sale-1.jpeg" width="404" height="372" alt=""></div>
                                <div class="sales__desc"><span class="sales__title">Акция</span>
                                    <div class="sales__txt">10+1 и 5+1*</div>
                                    <div class="sales__sub">*на конкретные позиции товара</div><a class="btn2 sales__btn" href="#modal-sale-1" data-fancybox-modal><span>Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sales__slide" data-aos="fade-up" data-aos-delay="100">
                                <div class="sales__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/buy/sale-2.jpeg" width="404" height="372" alt=""></div>
                                <div class="sales__desc"><span class="sales__title">Скидка</span>
                                    <div class="sales__txt">в зависимости от объема заказа или <strong>бесплатную доставку*</strong></div>
                                    <div class="sales__sub">* подробности уточняйте у&nbsp;менеджеров</div>
                                </div>
                            </div>
                        </div>
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
                        </span></div>
                </div>
            </div>
        </div>
    </section>
    <!--  /SALES  -->
    <section class="call call-1 call-1_v3" id="call-1">
        <div class="container">
            <div class="call__desc">
                <h2 class="call__title" data-aos="fade-right" data-aos-delay="0">Нужна помощь в подборе товаров? </h2>
                <div class="call__head-title"><span class="call__title-3" data-aos="fade-right" data-aos-delay="0">Мы на связи сейчас:</span>
                    <div class="call__socials">
                        <ul class="socials">
                            <li data-aos="fade" data-aos-delay="0">
                                <a class="socials__link" href="tel:+77022080333" target="_blank" rel="noopener noreferrer" data-type="phone">
                                    <svg id="q" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47.7607 40.9226L43.8604 36.4657C43.1546 35.6592 42.243 35.0594 41.223 34.7303C40.2029 34.4013 39.1127 34.3553 38.0686 34.5973C37.0245 34.8394 36.0657 35.3603 35.2945 36.1046C34.5232 36.8488 33.9685 37.7885 33.6895 38.8233C26.8846 37.0759 20.6273 29.9553 20.6075 23.9619C21.7935 23.824 22.9096 23.3289 23.8079 22.5423C24.9896 21.5079 25.7121 20.0465 25.8165 18.4795C25.9208 16.9125 25.3985 15.3682 24.3644 14.1862L20.4652 9.7306C19.431 8.54898 17.9698 7.82654 16.403 7.72219C14.8362 7.61784 13.2921 8.14012 12.1103 9.17416C-1.2567 20.873 33.8373 60.9751 47.2044 49.2763C48.3859 48.2423 49.1083 46.7813 49.2126 45.2147C49.317 43.6481 48.7947 42.1042 47.7607 40.9226Z"/>
                                    </svg>
                                </a></li>
                            <li data-aos="fade" data-aos-delay="100">
                                <a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer" data-type="whatsapp">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp"></a></li>
                            <li data-aos="fade" data-aos-delay="200">
                                <a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer" data-type="telegram">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/telegram-2.svg" width="57" height="57" alt="Telegram"></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="call__list">
                    <li data-aos="fade-up" data-aos-delay="0"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-1.svg" width="48" height="48" alt=""></i>
                        <div>консультации по&nbsp;телефону</div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="50"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-2.svg" width="48" height="48" alt=""></i>
                        <div>оформление и сопровождение заказов</div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="100"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-3.svg" width="48" height="48" alt=""></i>
                        <div>профессиональный расчет нормы расхода любого товара</div>
                    </li>
                </ul>
            </div>
            <div class="call__pic-1_v2" data-aos="fade-up" data-aos-delay="0"><img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-1-2.png" width="626" height="597" alt=""></div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>