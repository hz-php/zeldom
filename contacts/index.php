<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?>
    <ul class="breadcrumbs" data-aos="fade-right" data-aos-delay="0">
        <li><a href="index.html">Главная</a></li>
        <li><span>Контакты</span></li>
    </ul>
    <div class="top__wrap-2">
        <div class="contacts">
            <div class="display-flex">
                <div class="contacts__col-1">
                    <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="50">Контакты</h1>
                    <div class="contacts__row-1">
                        <div class="contacts__col-1-1" data-aos="fade-up" data-aos-delay="100">
                            <div class="box-phones"><span class="box-phones__label js-tooltip-phones_big" tabindex="0" role="button" data-tooltip-content="#tooltip-phones"><i><svg width="46" height="46" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/phone-3.svg#q"></use></svg></i><span>+7 (777) 208-99-55</span></span></div><span class="contacts__label">номер телефона</span>
                        </div>
                        <div class="contacts__col-1-2" data-aos="fade-up" data-aos-delay="150"><a class="contacts__email" href="mailto:zeldomkz@mail.ru" target="_blank">zeldomkz@mail.ru</a><span class="contacts__label">электронная почта</span></div>
                    </div>
                    <div class="contacts__addresses" data-aos="fade-right" data-aos-delay="200">
                        <div class="contacts__address">
                            <p>г. Алматы проспект Турара Рыскулова, 148а</p>
                        </div>
                    </div>
                    <div class="contacts__maps" data-aos="fade-up" data-aos-delay="250"><a class="contacts__maps-link link-1" href="https://yandex.ru/maps/-/CDwGiZyj" target="_blank" rel="noopener noreferrer">
                            На большую карту <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/arrow-link-2.svg#q"></use></svg></a>
                        <div class="contacts__map" id="map"></div><script src="https://api-maps.yandex.ru/v3/?apikey=a8e2278f-fa01-48e7-a8c4-496f5f7467e3&lang=ru_RU"></script>
                    </div>
                </div>
                <div class="contacts__col-2">
                    <div class="contacts__aside" data-aos="fade-left" data-aos-delay="100"><img src="<?= SITE_TEMPLATE_PATH ?>/img/contacts/aside.jpg" width="630" height="957" alt="">
                        <div class="contacts__aside-desc"><span class="contacts__aside-title"><strong>Закажите товары</strong> для&nbsp;промышленного земледелия</span>
                            <div class="contacts__aside-txt">Выберите подходящие товары из каталога и оформите заказ в нашем интернет-магазине</div><a class="btn1" href="catalog.html"><span>Перейти в каталог</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <div class="section_margin-bottom">
        <section class="call call-1 call-1_v2" id="call-1">
            <div class="container">
                <div class="call__desc">
                    <h2 class="call__title" data-aos="fade-right" data-aos-delay="0">Нужна помощь? <br>Поможем оформить ваш заказ</h2>
                    <div class="call__row-2">
                        <ul class="call__list">
                            <li data-aos="fade-right" data-aos-delay="0"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/call/icon-1-1.svg" width="48" height="48" alt=""></i>
                                <div>позвоните или напишите нам – консультируем, оформляем и сопровождаем ваши заказы.</div>
                            </li>
                        </ul>
                        <div class="call__socials">
                            <ul class="socials">
                                <li data-aos="fade" data-aos-delay="0"><a class="socials__link" href="tel:+77022080333" target="_blank" rel="noopener noreferrer" data-type="phone"><svg width="57" height="57" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/phone-2.svg#q"></use></svg></a></li>
                                <li data-aos="fade" data-aos-delay="100"><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer" data-type="whatsapp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp"></a></li>
                                <li data-aos="fade" data-aos-delay="200"><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer" data-type="telegram"><img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/telegram-2.svg" width="57" height="57" alt="Telegram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="call__pic-1_v1" data-aos="fade-up" data-aos-delay="0"><img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-1-1.png" width="571" height="511" alt="">
                    <div class="call__pic-1-3" data-aos="fade-up" data-aos-delay="0"><img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-2-1.png" width="353" height="96" alt=""></div>
                    <div class="call__pic-1-4" data-aos="fade-up" data-aos-delay="0"><img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/call/pic-1-3-1.png" width="231" height="71" alt=""></div>
                </div>
            </div>
        </section>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>