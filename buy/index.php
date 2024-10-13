<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?>

    <!--  TOP  -->
    <section class="top" id="top">
        <div class="container">
            <!--  HEADER  -->
            <header class="header display-flex">
                <div class="header__logo" data-aos="fade-down"><a class="logo" href="index.html"><img src="img/logo.svg" alt="" width="68" height="60"></a></div>
                <div class="header__wrap">
                    <div class="header__row-1 display-flex align-center">
                        <div class="header__cat" data-aos="fade-down" data-aos-delay="50"><a class="cat-link" href="catalog.html"><i><svg width="23" height="23" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/cat.svg#q"></use></svg></i><span>Каталог</span></a></div>
                        <div class="header__cart_mob" data-aos="fade-down" data-aos-delay="200"><a class="circle-btn a" href="cart.html" data-count="12"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/cart.svg#q"></use></svg></a></div>
                        <div class="header__profile_mob" data-aos="fade-down" data-aos-delay="200"><a class="circle-btn" href="#modal-login" data-fancybox-modal-2 data-status="warn"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/user.svg#q"></use></svg></a></div>
                        <div class="header__zoom" data-aos="fade-down" data-aos-delay="150"><a class="circle-btn" href="search.html"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/zoom.svg#q"></use></svg></a></div>
                        <div class="header__burger" data-aos="fade-down" data-aos-delay="200">
                            <button class="circle-btn js-aside-toggle" type="button"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/burger.svg#q"></use></svg></button>
                        </div>
                        <div class="header__search" data-aos="fade-down" data-aos-delay="150">
                            <form class="search js-search" action="search.html" method="get">
                                <button class="search__submit" type="submit"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/zoom.svg#q" aria-hidden="true"></use></svg></button>
                                <input class="search__input js-search-input" type="text" name="search" placeholder="Поиск товаров по сайту" required>
                                <div class="search__wrap js-search-result">
                                    <div class="search__bar">
                                        <div class="search__row">
                                            <div class="search__category">Категории</div>
                                            <div class="search__list">
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена томатов</a></div>
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена арбузов</a></div>
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена огурцов</a></div>
                                                <div class="search__item"><a href="goods.html">Обработка <strong>Сем</strong>ян</a></div>
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена томатов</a></div>
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена арбузов</a></div>
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена огурцов</a></div>
                                                <div class="search__item"><a href="goods.html"> <strong>Сем</strong>ена огурцов</a></div>
                                            </div>
                                        </div>
                                        <div class="search__row">
                                            <div class="search__category">Товары</div>
                                            <div class="search__list">
                                                <div class="search__block"><a class="search__block-img" href="goods.html"><img src="img/catalog/pic-2-1.png" width="58" height="40" alt=""></a>
                                                    <div><a class="search__block-link" href="goods.html">Фарао F1 (Farao F1) <strong>сем</strong>ена арбуза</a><span class="search__block-sub">28 000 ₸</span></div>
                                                </div>
                                                <div class="search__block"><a class="search__block-img" href="goods.html"><img src="img/catalog/pic-2-1.png" width="58" height="40" alt=""></a>
                                                    <div><a class="search__block-link" href="goods.html">Фарао F1 (Farao F1) <strong>сем</strong>ена арбуза</a><span class="search__block-sub">28 000 ₸</span></div>
                                                </div>
                                                <div class="search__block"><a class="search__block-img" href="goods.html"><img src="img/catalog/pic-2-1.png" width="58" height="40" alt=""></a>
                                                    <div><a class="search__block-link" href="goods.html">Фарао F1 (Farao F1) <strong>сем</strong>ена арбуза</a><span class="search__block-sub">28 000 ₸</span></div>
                                                </div>
                                                <div class="search__block"><a class="search__block-img" href="goods.html"><img src="img/catalog/pic-2-1.png" width="58" height="40" alt=""></a>
                                                    <div><a class="search__block-link" href="goods.html">Фарао F1 (Farao F1) <strong>сем</strong>ена арбуза</a><span class="search__block-sub">28 000 ₸</span></div>
                                                </div>
                                                <div class="search__block"><a class="search__block-img" href="goods.html"><img src="img/catalog/pic-2-1.png" width="58" height="40" alt=""></a>
                                                    <div><a class="search__block-link" href="goods.html">Фарао F1 (Farao F1) <strong>сем</strong>ена арбуза</a><span class="search__block-sub">28 000 ₸</span></div>
                                                </div>
                                                <div class="search__block"><a class="search__block-img" href="goods.html"><img src="img/catalog/pic-2-1.png" width="58" height="40" alt=""></a>
                                                    <div><a class="search__block-link" href="goods.html">Фарао F1 (Farao F1) <strong>сем</strong>ена арбуза</a><span class="search__block-sub">28 000 ₸</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="header__favorite" data-aos="fade-down" data-aos-delay="200"><a class="circle-btn a" href="#modal-login" data-fancybox-modal-2 data-count="12"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/heart.svg#q"></use></svg></a></div>
                        <div class="header__weight" data-aos="fade-down" data-aos-delay="250"><a class="circle-btn" href="admin/comparison.html"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/weight.svg#q"></use></svg></a></div>
                        <div class="header__cart" data-aos="fade-down" data-aos-delay="300"><a class="cart-btn" href="cart.html"><i><svg width="23" height="21" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/cart.svg#q"></use></svg></i><span>Корзина</span><small>8</small></a></div>
                        <div class="header__profile" data-aos="fade-down" data-aos-delay="350"><a class="profile-btn" href="#modal-login" data-fancybox-modal-2 data-status="warn"><i><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/user.svg#q"></use></svg></i><span>Мой профиль</span></a></div>
                    </div>
                    <div class="header__row-2 display-flex align-center">
                        <div class="header__phones" data-aos="fade-down" data-aos-delay="400">
                            <div class="box-phones"><span class="box-phones__label js-tooltip-phones" tabindex="0" role="button" data-tooltip-content="#tooltip-phones"><i><svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><use xlink:href="img/svg/phone-1.svg#q"></use></svg></i><span>+7 (777) 208-99-55</span></span></div>
                        </div>
                        <div class="header__soc-1" data-aos="fade-down" data-aos-delay="450"><a class="social-link" href="https://t.me/+77772089955" target="_blank" data-title="Telegram"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/tg.svg#q"></use></svg></a></div>
                        <div class="header__soc-2" data-aos="fade-down" data-aos-delay="450"><a class="social-link" href="https://wa.me/77772089955" target="_blank" data-title="WhatsApp"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/wa.svg#q"></use></svg></a></div>
                        <div class="header__nav" data-aos="fade-down" data-aos-delay="500">
                            <ul class="menu">
                                <li class="menu__item"><a class="menu__link " href="about.html" data-slug="about">О компании</a></li>
                                <li class="menu__item"><a class="menu__link " href="garanties.html" data-slug="garanties">Гарантия</a></li>
                                <li class="menu__item"><a class="menu__link active" href="buy.html" data-slug="buy">Как купить</a></li>
                                <li class="menu__item"><a class="menu__link " href="delivery.html" data-slug="delivery">Доставка</a></li>
                                <li class="menu__item"><a class="menu__link " href="payments.html" data-slug="payments">Оплата</a></li>
                                <li class="menu__item"><a class="menu__link " href="partners.html" data-slug="partners">Партнеры</a></li>
                                <li class="menu__item"><a class="menu__link " href="news.html" data-slug="news">Новости</a></li>
                                <li class="menu__item"><a class="menu__link " href="blog.html" data-slug="blog">Статьи</a></li>
                                <li class="menu__item"><a class="menu__link " href="contacts.html" data-slug="contacts">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--  HEADER  -->
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
                        <li data-aos="fade-right" data-aos-delay="100"><a href="#tab-buy-1"><i><img src="img/buy/tab-1.svg" width="70" height="70" alt=""></i><span>Оформите <br>заказ на сайте</span></a></li>
                        <li data-aos="fade-right" data-aos-delay="150"><a href="#tab-buy-2"><i><img src="img/buy/tab-2.svg" width="70" height="70" alt=""></i><span>Позвоните или напишите <br>нам в мессенджеры</span></a></li>
                        <li data-aos="fade-right" data-aos-delay="200"><a href="#tab-buy-3"><i><img src="img/buy/tab-3.svg" width="70" height="70" alt=""></i><span>Напишите на <br>электронную почту</span></a></li>
                    </ul>
                </div>
                <div class="buy__blocks">
                    <!--TAB 1-->
                    <div class="buy__block" id="tab-buy-1" data-aos="fade-up" data-aos-delay="300">
                        <div class="buy__head"><i><img src="img/buy/tab-1.svg" width="74" height="74" alt=""></i><span>Оформите заказ на&nbsp;сайте</span></div>
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
                                        <div class="swiper-slide"><img src="img/buy/pic-1-1.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="img/buy/pic-1-2.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="img/buy/pic-1-3.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="img/buy/pic-1-4.png" width="1158" height="685" alt=""></div>
                                        <div class="swiper-slide"><img src="img/buy/pic-1-5.png" width="1158" height="685" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy__slider-control">
                                <div class="buy__slider-scrollbar">
                                    <div class="swiper-scrollbar js-scrollbar"></div>
                                </div>
                                <div class="slider__nav buy__slider-nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-prev.svg#q"></use></svg></span><span class="slider__arrow slider__arrow_next js-next" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-next.svg#q"></use></svg></span></div>
                            </div>
                        </div>
                    </div>
                    <!--TAB 2-->
                    <div class="buy__block" id="tab-buy-2">
                        <div class="buy__head"><i><img src="img/buy/tab-2.svg" width="74" height="74" alt=""></i><span>Позвоните или напишите нам в мессенджеры</span></div>
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
                                        <li><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer"><img src="img/svg/wa.svg" width="57" height="57" alt="WhatsApp"></a></li>
                                        <li><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer"><img src="img/svg/tg.svg" width="57" height="57" alt="Telegram"></a></li>
                                    </ul>
                                </div>
                                <div class="buy__col-2-1"><span class="buy__label">Либо позвоните по дополнительным номерам</span><a class="btn2 btn2_big buy__btn-opt" href="#modal-dop-phones" data-fancybox-modal>Посмотреть дополнительные номера</a></div>
                            </div>
                        </div>
                    </div>
                    <!--TAB 3-->
                    <div class="buy__block" id="tab-buy-3">
                        <div class="buy__head"><i><img src="img/buy/tab-3.svg" width="74" height="74" alt=""></i><span>Позвоните или напишите нам в мессенджеры</span></div>
                        <div class="buy__txt">Напишите ваши предложения и пожелания на нашу электронную почту <a class="buy__email" href="mailto:zeldomkz@mail.ru" target="_blank">zeldomkz@mail.ru </a></div>
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
                                <div class="sales__pic"><img src="img/buy/sale-1.jpeg" width="404" height="372" alt=""></div>
                                <div class="sales__desc"><span class="sales__title">Акция</span>
                                    <div class="sales__txt">10+1 и 5+1*</div>
                                    <div class="sales__sub">*на конкретные позиции товара</div><a class="btn2 sales__btn" href="#modal-sale-1" data-fancybox-modal><span>Подробнее</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sales__slide" data-aos="fade-up" data-aos-delay="100">
                                <div class="sales__pic"><img src="img/buy/sale-2.jpeg" width="404" height="372" alt=""></div>
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
                            <li data-aos="fade" data-aos-delay="0"><a class="socials__link" href="tel:+77022080333" target="_blank" rel="noopener noreferrer" data-type="phone"><svg width="57" height="57" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/phone-2.svg#q"></use></svg></a></li>
                            <li data-aos="fade" data-aos-delay="100"><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer" data-type="whatsapp"><img src="img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp"></a></li>
                            <li data-aos="fade" data-aos-delay="200"><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer" data-type="telegram"><img src="img/svg/telegram-2.svg" width="57" height="57" alt="Telegram"></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="call__list">
                    <li data-aos="fade-up" data-aos-delay="0"><i><img src="img/call/icon-1-1.svg" width="48" height="48" alt=""></i>
                        <div>консультации по&nbsp;телефону</div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="50"><i><img src="img/call/icon-1-2.svg" width="48" height="48" alt=""></i>
                        <div>оформление и сопровождение заказов</div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="100"><i><img src="img/call/icon-1-3.svg" width="48" height="48" alt=""></i>
                        <div>профессиональный расчет нормы расхода любого товара</div>
                    </li>
                </ul>
            </div>
            <div class="call__pic-1_v2" data-aos="fade-up" data-aos-delay="0"><img class="lazy" data-src="img/call/pic-1-1-2.png" width="626" height="597" alt=""></div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>