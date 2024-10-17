<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гарантия");
?>

<?php
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
    "START_FROM" => "0",
    "PATH" => "",
    "SITE_ID" => "-",
),
    false
);?>
    <div class="top__wrap-2">
        <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="50"><strong>Как оплатить заказ</strong> в интернет-магазине «Земледел» </h1>
    </div>
    <div class="buy" id="buy">
        <div class="buy__tabs">
            <ul class="buy__tabs-inside">
                <li data-aos="fade-right" data-aos-delay="100"><a href="#tab-payments-1"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-1.svg" width="70" height="70" alt=""></i><span>Оплата <br>наличными</span></a></li>
                <li data-aos="fade-right" data-aos-delay="150"><a href="#tab-payments-2"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-2.svg" width="70" height="70" alt=""></i><span>Банковский <br>перевод</span></a></li>
                <li data-aos="fade-right" data-aos-delay="200"><a href="#tab-payments-3"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-3.svg" width="70" height="70" alt=""></i><span>Оплата на <br>банковскую <br>карту</span></a></li>
                <li data-aos="fade-right" data-aos-delay="250"><a href="#tab-payments-4"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-4.svg" width="70" height="70" alt=""></i><span>Оплата в <br>приложении <br>Kaspi Pay</span></a></li>
            </ul>
        </div>
        <div class="buy__blocks">
            <!--TAB 1-->
            <div class="buy__block" id="tab-payments-1" data-aos="fade-up" data-aos-delay="300">
                <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-1.svg" width="74" height="74" alt=""></i><span>Оплата наличными</span></div>
                <div class="buy__atten">Оплатите ваш заказ наличными при покупке или получении&nbsp;только в Алматы</div>
                <div class="buy__pic-3"><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/pic-1.png" width="1466" height="570" alt=""></div>
            </div>
            <!--TAB 2-->
            <div class="buy__block" id="tab-payments-2">
                <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-2.svg" width="74" height="74" alt=""></i><span>Банковский перевод</span></div>
                <div class="buy__atten buy__atten_v2">И юридические, и физические лица могут оплатить заказ через официальный расчетный счет интернет-магазина в банке АО «Народный Банк Казахстана», на основании счета на оплату</div>
                <div class="buy__col-3-1">
                    <div class="buy__reqs">
                        <div class="buy__reqs-title">Наши реквизиты для оплаты через расчетный счет:</div>
                        <div class="buy__reqs-txt">
                            <div>
                                <p>ТОО «ЗЕЛЕНЫЙ ДОМ KZ»</p>
                                <p>БИН: 210140001074</p>
                                <p>РНН: 590400012448</p>
                                <p>Кбе: 17</p>
                            </div>
                            <div>
                                <p>р/с: KZ20601A291000504211 KZT</p>
                                <p>KZ41601A291000504221 USD</p>
                                <p>KZ62601A291000504231 RUB</p>
                                <p>Банк: АО «Народный Банк Казахстана»</p>
                                <p>БИК: HSBKKZKX</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buy__col-3-2"><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/pic-2.png" width="567" height="533" alt=""></div>
            </div>
            <!--TAB 3-->
            <div class="buy__block" id="tab-payments-3">
                <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-3.svg" width="74" height="74" alt=""></i><span>Оплата на банковскую карту</span></div>
                <div class="buy__atten buy__atten_v3">Оплатите свой заказ через перевод на карту банковскую карту Visa или Mastercard от «Kaspi Bank», «Сбербанк» или «Forte Bank». Или пополните карту через терминалы, или через кассы в отделениях данных банков</div>
                <div class="buy__reqs"><span class="buy__reqs-title">Наши банковские карты:</span>
                    <div class="buy__row-4" id="get-paments-cards">
                        <div class="buy__col-4-1">
                            <label class="buy__label">ИП Назаренко</label>
                            <div class="buy__reqs-select">
                                <select class="form__select" id="select-payments-card-1" name="bank-card-1">
                                    <option value="1">«Kaspi Bank»</option>
                                    <option value="2">«ForteBank»</option>
                                    <option value="3">«Сбербанк»</option>
                                </select>
                            </div>
                            <div class="buy__reqs-txt-2" id="select-payments-wrap-1"></div>
                        </div>
                        <div class="buy__col-4-1">
                            <label class="buy__label">ИП Алешкова</label>
                            <div class="buy__reqs-select">
                                <select class="form__select" id="select-payments-card-2" name="bank-card-2">
                                    <option value="11">«Kaspi Bank»</option>
                                    <option value="12">«ForteBank»</option>
                                </select>
                            </div>
                            <div class="buy__reqs-txt-2" id="select-payments-wrap-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--TAB 4-->
            <div class="buy__block" id="tab-payments-4">
                <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-4.svg" width="74" height="74" alt=""></i><span>Оплатите ваш заказ в приложении Kaspi Pay, <span class="d-ib">следуя простой инструкции</span></span></div>
                <div class="buy__attens">
                    <div class="buy__atten">На ваш номер, привязанный к приложению Kaspi kz, выставляется счет для оплаты заказа, на сумму, предварительно сформированную в заказе</div>
                    <div class="buy__atten">Выставленный счет действует 24 часа</div>
                    <div class="buy__atten">В приложении Kaspi kz вы получите PUSH-уведомление о выставленном счете для оплаты</div>
                    <div class="buy__atten">Для оплаты достаточно перейти к счету, нажать ОПЛАТИТЬ и выбрать удобный способ оплаты</div>
                    <div class="buy__atten">Кассир, который отправлял покупателю счет, увидит уведомление об оплате</div>
                    <div class="buy__atten">При необходимости, таким же спосбом оформляется возврат средств</div>
                </div>
                <div class="buy__reqs">
                    <div class="buy__reqs-title">Либо воспользуйтесь нашими реквизитами:</div>
                    <div class="buy__reqs-txt-2">
                        <p>р/с: KZ20722S000006784341 KZT</p>
                        <p>Банк: АО «Kaspi Bank»</p>
                        <p>БИК: CASPKZKA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buy__info" data-aos="fade-up" data-aos-delay="0"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/shield.svg" width="63" height="83" alt=""></i>
            <div><span class="buy__info-title">Безопасные покупки</span>
                <p>Наша компания не несет ответственности за средства, отправленные на расчетные счета и номера банковских карт, отличающиеся от указанных на данной странице. Отгрузочные документы не выдаются и товар не поставляется. <strong>Пожалуйста, будьте внимательны при введении данных!</strong></p>
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
                    <div class="slider__nav sales__nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-prev.svg#q"></use></svg></span><span class="slider__arrow slider__arrow_next js-next" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-next.svg#q"></use></svg></span></div>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>