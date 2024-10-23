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
<div class="buy" id="buy">
    <div class="buy__tabs">
        <ul class="buy__tabs-inside">
            <?php
            foreach ($arResult['ITEMS'] as $key => $arItem) {
            $icon = CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']);
                ?>
                <li data-aos="fade-right" data-aos-delay="100"><a href="#tab-payments-<?= $key + 1 ?>">
                        <i>
                            <img src="<?= $icon ?>" width="70" height="70" alt="">
                        </i>
                        <span><?= html_entity_decode($arItem['NAME'])?></span></a>
                </li>
                <?php
            }
            ?>

        </ul>
    </div>
    <div class="buy__blocks">
        <?php
        foreach ($arResult['ITEMS'] as $key => $paymentsBlock) {
//        $icon = CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']);
        ?>
        <div class="buy__block" id="tab-payments-<?= $key + 1 ?>" data-aos="fade-up" data-aos-delay="300">
            <div class="buy__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/tab-1.svg" width="74" height="74" alt=""></i><span>Оплата наличными</span></div>
            <div class="buy__atten">Оплатите ваш заказ наличными при покупке или получении&nbsp;только в Алматы</div>
            <div class="buy__pic-3"><img src="<?= SITE_TEMPLATE_PATH ?>/img/payments/pic-1.png" width="1466" height="570" alt=""></div>
        </div>
            <?php
        }
        ?>
<!--        <div class="buy__block" id="tab-payments-2">-->
<!--            <div class="buy__head"><i><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/payments/tab-2.svg" width="74" height="74" alt=""></i><span>Банковский перевод</span></div>-->
<!--            <div class="buy__atten buy__atten_v2">И юридические, и физические лица могут оплатить заказ через официальный расчетный счет интернет-магазина в банке АО «Народный Банк Казахстана», на основании счета на оплату</div>-->
<!--            <div class="buy__col-3-1">-->
<!--                <div class="buy__reqs">-->
<!--                    <div class="buy__reqs-title">Наши реквизиты для оплаты через расчетный счет:</div>-->
<!--                    <div class="buy__reqs-txt">-->
<!--                        <div>-->
<!--                            <p>ТОО «ЗЕЛЕНЫЙ ДОМ KZ»</p>-->
<!--                            <p>БИН: 210140001074</p>-->
<!--                            <p>РНН: 590400012448</p>-->
<!--                            <p>Кбе: 17</p>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <p>р/с: KZ20601A291000504211 KZT</p>-->
<!--                            <p>KZ41601A291000504221 USD</p>-->
<!--                            <p>KZ62601A291000504231 RUB</p>-->
<!--                            <p>Банк: АО «Народный Банк Казахстана»</p>-->
<!--                            <p>БИК: HSBKKZKX</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="buy__col-3-2"><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/payments/pic-2.png" width="567" height="533" alt=""></div>-->
<!--        </div>-->
<!--        <!--TAB 3-->-->
<!--        <div class="buy__block" id="tab-payments-3">-->
<!--            <div class="buy__head"><i><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/payments/tab-3.svg" width="74" height="74" alt=""></i><span>Оплата на банковскую карту</span></div>-->
<!--            <div class="buy__atten buy__atten_v3">Оплатите свой заказ через перевод на карту банковскую карту Visa или Mastercard от «Kaspi Bank», «Сбербанк» или «Forte Bank». Или пополните карту через терминалы, или через кассы в отделениях данных банков</div>-->
<!--            <div class="buy__reqs"><span class="buy__reqs-title">Наши банковские карты:</span>-->
<!--                <div class="buy__row-4" id="get-paments-cards">-->
<!--                    <div class="buy__col-4-1">-->
<!--                        <label class="buy__label">ИП Назаренко</label>-->
<!--                        <div class="buy__reqs-select">-->
<!--                            <select class="form__select" id="select-payments-card-1" name="bank-card-1">-->
<!--                                <option value="1">«Kaspi Bank»</option>-->
<!--                                <option value="2">«ForteBank»</option>-->
<!--                                <option value="3">«Сбербанк»</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="buy__reqs-txt-2" id="select-payments-wrap-1"></div>-->
<!--                    </div>-->
<!--                    <div class="buy__col-4-1">-->
<!--                        <label class="buy__label">ИП Алешкова</label>-->
<!--                        <div class="buy__reqs-select">-->
<!--                            <select class="form__select" id="select-payments-card-2" name="bank-card-2">-->
<!--                                <option value="11">«Kaspi Bank»</option>-->
<!--                                <option value="12">«ForteBank»</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="buy__reqs-txt-2" id="select-payments-wrap-2"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!--TAB 4-->-->
<!--        <div class="buy__block" id="tab-payments-4">-->
<!--            <div class="buy__head"><i><img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/img/payments/tab-4.svg" width="74" height="74" alt=""></i><span>Оплатите ваш заказ в приложении Kaspi Pay, <span class="d-ib">следуя простой инструкции</span></span></div>-->
<!--            <div class="buy__attens">-->
<!--                <div class="buy__atten">На ваш номер, привязанный к приложению Kaspi kz, выставляется счет для оплаты заказа, на сумму, предварительно сформированную в заказе</div>-->
<!--                <div class="buy__atten">Выставленный счет действует 24 часа</div>-->
<!--                <div class="buy__atten">В приложении Kaspi kz вы получите PUSH-уведомление о выставленном счете для оплаты</div>-->
<!--                <div class="buy__atten">Для оплаты достаточно перейти к счету, нажать ОПЛАТИТЬ и выбрать удобный способ оплаты</div>-->
<!--                <div class="buy__atten">Кассир, который отправлял покупателю счет, увидит уведомление об оплате</div>-->
<!--                <div class="buy__atten">При необходимости, таким же спосбом оформляется возврат средств</div>-->
<!--            </div>-->
<!--            <div class="buy__reqs">-->
<!--                <div class="buy__reqs-title">Либо воспользуйтесь нашими реквизитами:</div>-->
<!--                <div class="buy__reqs-txt-2">-->
<!--                    <p>р/с: KZ20722S000006784341 KZT</p>-->
<!--                    <p>Банк: АО «Kaspi Bank»</p>-->
<!--                    <p>БИК: CASPKZKA</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
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
                                <div class="sales__sub">*на конкретные позиции товара</div>
                                <a class="btn2 sales__btn" href="#modal-sale-1" data-fancybox-modal><span>Подробнее</span></a>
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