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
        <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="50"><strong>Интернет-магазин</strong> «Земледел» гарантирует</h1>
    </div>
    <div class="garanties" id="garanties">
        <div class="garanties__item" data-aos="fade-up" data-aos-delay="100">
            <div class="garanties__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/pic-1.png" width="719" height="387" alt=""></div>
            <div class="garanties__desc">
                <div class="garanties__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/icon-1.svg" width="70" height="70" alt=""></i>
                    <div class="garanties__title">Товары лицензированы и сертифицированы</div>
                </div>
                <div class="garanties__body">
                    <div class="garanties__txt">
                        <p>Мы гарантируем, что наша продукция является оригиналом, лицензирована и сертифицирована по мировым стандартам качества. Качество и всхожесть посадочного материала проверена в лабораторных условиях нашими партнерами.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="garanties__item" data-aos="fade-up" data-aos-delay="200">
            <div class="garanties__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/pic-2.png" width="719" height="387" alt=""></div>
            <div class="garanties__desc">
                <div class="garanties__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/icon-2.svg" width="70" height="70" alt=""></i>
                    <div class="garanties__title">Доставку в срок по договору</div>
                </div>
                <div class="garanties__body">
                    <div class="garanties__txt">
                        <p>Собственный логистический отдел позволяет доставлять товары в срок по договору. Сервис по комплектации и доставке заказов товара от 1 до максимум 7 дней. Среднее время от заявки на сайте до получения товара 4 дня.</p>
                    </div><a class="link-1 garanties__link" href="/delivery/">Подробнее о доставке</a>
                </div>
            </div>
        </div>
        <div class="garanties__item" data-aos="fade-up" data-aos-delay="100">
            <div class="garanties__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/pic-3.png" width="719" height="387" alt=""></div>
            <div class="garanties__desc">
                <div class="garanties__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/icon-3.svg" width="70" height="70" alt=""></i>
                    <div class="garanties__title">Безопасную оплату покупок</div>
                </div>
                <div class="garanties__body">
                    <div class="garanties__txt">
                        <p>Наш интернет-магазин работает только по 100% предоплате. И юридические, и физические лица могут оплатить заказ через официальный расчетный счет интернет-магазина в банке АО «Народный Банк Казахстана», на основании счета на оплату, и получить договор.</p>
                    </div><a class="link-1 garanties__link" href="/payments/">Подробнее об оплате</a>
                </div>
            </div>
        </div>
        <div class="garanties__item" data-aos="fade-up" data-aos-delay="100">
            <div class="garanties__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/pic-4.png" width="719" height="387" alt=""></div>
            <div class="garanties__desc">
                <div class="garanties__head"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/garanties/icon-4.svg" width="70" height="70" alt=""></i>
                    <div class="garanties__title">Консультации по агротехникам</div>
                </div>
                <div class="garanties__body">
                    <div class="garanties__txt">
                        <p>Ценность, на которой построена наша компания, – это клиентский сервис, ориентированный на ваши потребности. Для этого мы консультируем по агротехникам для выращивания различных культур, тем самым помогаем повысить урожайность в поле или теплице.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <section class="call call-1 call-1_v4" id="call-1">
        <div class="container">
            <div class="call__desc">
                <h2 class="call__title" data-aos="fade-right" data-aos-delay="50">Нужна консультация?</h2>
                <div class="call__head-title">
                    <ul class="call__list">
                        <li data-aos="fade-right" data-aos-delay="100"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-1.svg" width="48" height="48" alt=""></i>
                            <div>Мы на связи, чтобы помочь <br>с любым вопросом</div>
                        </li>
                    </ul>
                    <div class="call__socials">
                        <ul class="socials">
                            <li data-aos="fade" data-aos-delay="0">
                                <a class="socials__link" href="tel:+77022080333" target="_blank" rel="noopener noreferrer" data-type="phone">
                                    <svg id="q" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47.7607 40.9226L43.8604 36.4657C43.1546 35.6592 42.243 35.0594 41.223 34.7303C40.2029 34.4013 39.1127 34.3553 38.0686 34.5973C37.0245 34.8394 36.0657 35.3603 35.2945 36.1046C34.5232 36.8488 33.9685 37.7885 33.6895 38.8233C26.8846 37.0759 20.6273 29.9553 20.6075 23.9619C21.7935 23.824 22.9096 23.3289 23.8079 22.5423C24.9896 21.5079 25.7121 20.0465 25.8165 18.4795C25.9208 16.9125 25.3985 15.3682 24.3644 14.1862L20.4652 9.7306C19.431 8.54898 17.9698 7.82654 16.403 7.72219C14.8362 7.61784 13.2921 8.14012 12.1103 9.17416C-1.2567 20.873 33.8373 60.9751 47.2044 49.2763C48.3859 48.2423 49.1083 46.7813 49.2126 45.2147C49.317 43.6481 48.7947 42.1042 47.7607 40.9226Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li data-aos="fade" data-aos-delay="100">
                                <a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer" data-type="whatsapp">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp">
                                </a>
                            </li>
                            <li data-aos="fade" data-aos-delay="200">
                                <a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer" data-type="telegram">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/telegram-2.svg" width="57" height="57" alt="Telegram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="call__pic-1_v2" data-aos="fade-up" data-aos-delay="0">
                <img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-1-2.png" width="626" height="597" alt=""></div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>