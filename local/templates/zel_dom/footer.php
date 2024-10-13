
<!--  FOOTER  -->
<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__col footer__col-1-1">
                <div class="footer__logo" data-aos="fade-right" data-aos-delay="0" data-aos-offset="0">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo-2.svg" width="202" height="202" alt="">
                </div>
                <div class="footer__contacts" data-aos="fade-right" data-aos-delay="50" data-aos-offset="0">
                    <div class="footer__phones">
                        <div class="footer__phones-1">
                            <div class="box-phones"><span class="box-phones__label js-tooltip-phones_aside" tabindex="0" role="button" data-tooltip-content="#tooltip-phones-aside"><i><svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><use xlink:href="img/svg/phone-1.svg#q"></use></svg></i><span>+7 (777) 208-99-55</span></span></div><span class="footer__label">наш телефон</span>
                        </div>
                        <div class="footer__socials" data-aos="fade-right" data-aos-delay="100" data-aos-offset="0">
                            <ul class="socials">
                                <li>
                                    <a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp">
                                    </a>
                                </li>
                                <li>
                                    <a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/telegram-2.svg" width="57" height="57" alt="Telegram">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__emails"><a class="footer__email" href="mailto:zeldomkz@mail.ru" target="_blank">zeldomkz@mail.ru</a><span class="footer__label">электронная почта</span></div>
                </div>
            </div>
            <div class="footer__col footer__col-1-2">
                <?php
                $APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "Y",    // Разрешить несколько активных пунктов одновременно
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                ),
                    false
                ); ?>

            </div>
            <div class="footer__col footer__col-1-3">
                <ul class="footer__addresses" data-aos="fade-right" data-aos-delay="0" data-aos-offset="0">
                    <li>
                        <p>г. Алматы, проспект Турара Рыскулова, 148а</p>
                        <a class="footer__link-map" href="https://yandex.ru/maps/-/CDwGiZyj" target="_blank" rel="noopener noreferrer">
                            <i><img src="<?= SITE_TEMPLATE_PATH ?>/img/svg/pin-1.svg" width="35" height="35" alt=""></i><span>Посмотреть схему проезда</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__col footer__col-1-4">
                <ul class="footer__links" data-aos="fade-right" data-aos-delay="0" data-aos-offset="0">
                    <li><a class="footer__link m" href="#modal-requisits" data-fancybox-modal>Реквизиты</a></li>
                    <li><a class="footer__link" href="#">Политика конфиденциальности</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--  /FOOTER  -->
</div>
<div class="aside" id="aside">
    <div class="aside__wrap custom-scrollbar">
        <div class="aside__sup">
            <div class="aside__search">
                <form class="search js-search" action="#" method="get">
                    <button class="search__submit" type="submit">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="img/svg/zoom.svg#q" aria-hidden="true"></use>
                        </svg></button>
                    <input class="search__input js-search-input" type="text" name="search" placeholder="Поиск товаров по сайту" required>
                    <div class="search__wrap js-search-result"><span class="search__empty">Ничего не найдено. Попробуйте поменять запрос.</span></div>
                </form>
            </div>
            <button class="aside__close close js-aside-toggle" type="button">
                <svg width="20" height="20" aria-hidden="true">
                    <use xlink:href="img/svg/close-1.svg#q"></use>
                </svg>
            </button>
        </div>
        <div class="aside__head">
            <div class="aside__cat"><a class="cat-link" href="catalog.html">
                    <i>
                        <svg id="q" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="8.17297" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                            <rect x="12.4648" y="1" width="8.85405" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                            <rect x="1" y="13.1455" width="8.17297" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                            <rect x="12.4648" y="13.1455" width="8.85405" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                        </svg>
                    </i>
                </a>
            </div>
            <div class="aside__btn-1">
                <a class="circle-btn a" href="cart.html" data-count="8" data-sdf="1">
                    <svg id="q" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.10391 20.16C8.98756 20.16 9.70391 19.4436 9.70391 18.56C9.70391 17.6763 8.98756 16.96 8.10391 16.96C7.22025 16.96 6.50391 17.6763 6.50391 18.56C6.50391 19.4436 7.22025 20.16 8.10391 20.16Z" stroke="none"/>
                        <path d="M18.3227 20.16C19.2063 20.16 19.9227 19.4436 19.9227 18.56C19.9227 17.6763 19.2063 16.96 18.3227 16.96C17.439 16.96 16.7227 17.6763 16.7227 18.56C16.7227 19.4436 17.439 20.16 18.3227 20.16Z" stroke="none"/>
                        <path d="M4.36899 4.8H22L19.406 13.5776C19.3121 13.8952 19.1138 14.1746 18.8411 14.3735C18.5683 14.5724 18.236 14.68 17.8943 14.68H8.47468C8.13302 14.68 7.80067 14.5724 7.52791 14.3735C7.25515 14.1746 7.05684 13.8952 6.96298 13.5776L3.40889 1.55121C3.36196 1.39241 3.2628 1.25271 3.12642 1.15326C2.99004 1.0538 2.82386 1 2.65304 1H1" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="aside__btn-1">
                <a class="circle-btn" href="#modal-login" data-fancybox-modal-2 data-sdf="2" data-status="warn">
                    <svg id="q" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7134 10.7093C14.6986 9.93843 15.4178 8.8813 15.7708 7.68501C16.1237 6.48872 16.093 5.21276 15.6829 4.03464C15.2727 2.85652 14.5036 1.83483 13.4823 1.11171C12.4611 0.388591 11.2387 0 9.9851 0C8.73148 0 7.50904 0.388591 6.48784 1.11171C5.46664 1.83483 4.69746 2.85652 4.28731 4.03464C3.87716 5.21276 3.84644 6.48872 4.19943 7.68501C4.55241 8.8813 5.27154 9.93843 6.25678 10.7093C4.56856 11.382 3.09553 12.4976 1.99473 13.9374C0.893922 15.3771 0.20661 17.087 0.00606162 18.8846C-0.00845511 19.0159 0.00316392 19.1487 0.0402551 19.2754C0.0773462 19.4022 0.139183 19.5205 0.222235 19.6235C0.389967 19.8316 0.63393 19.9648 0.900456 19.994C1.16698 20.0231 1.43424 19.9458 1.64343 19.779C1.85263 19.6122 1.98662 19.3695 2.01594 19.1045C2.23661 17.1508 3.17331 15.3465 4.64708 14.0362C6.12086 12.7259 8.02838 12.0016 10.0052 12.0016C11.982 12.0016 13.8895 12.7259 15.3633 14.0362C16.8371 15.3465 17.7738 17.1508 17.9944 19.1045C18.0218 19.3501 18.1396 19.5769 18.3252 19.7411C18.5108 19.9054 18.7509 19.9955 18.9994 19.994H19.1099C19.3734 19.9638 19.6141 19.8314 19.7798 19.6254C19.9454 19.4195 20.0225 19.1568 19.9943 18.8946C19.7928 17.0918 19.1018 15.3776 17.9953 13.9357C16.8888 12.4937 15.4087 11.3784 13.7134 10.7093ZM9.9851 9.99973C9.19006 9.99973 8.41289 9.76527 7.75184 9.326C7.0908 8.88673 6.57557 8.26237 6.27133 7.53189C5.96708 6.8014 5.88748 5.9976 6.04258 5.22212C6.19768 4.44665 6.58053 3.73433 7.1427 3.17524C7.70487 2.61615 8.42113 2.23541 9.20088 2.08116C9.98064 1.9269 10.7889 2.00607 11.5234 2.30865C12.2579 2.61122 12.8857 3.12362 13.3274 3.78104C13.7691 4.43845 14.0048 5.21137 14.0048 6.00204C14.0048 7.06229 13.5813 8.07912 12.8275 8.82883C12.0736 9.57855 11.0512 9.99973 9.9851 9.99973Z"/>
                    </svg>
                </a>
            </div>
            <div class="aside__btn-1">
                <a class="circle-btn" href="admin/comparison.html">
                    <svg id="q" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.9304 15.099L23.2161 5.51562L23.158 5.40781L23.0884 5.31198C23.0768 5.3 23.0768 5.3 23.0768 5.28802L22.9839 5.19219H22.9723L22.8911 5.13229L22.8679 5.10833L22.7634 5.04844H22.7518L22.6473 5.0125H22.6241L22.508 4.98854H22.1598L14.9286 6.59375V3.95833C14.9286 3.70417 14.8307 3.46041 14.6566 3.28069C14.4825 3.10097 14.2463 3 14 3C13.7537 3 13.5175 3.10097 13.3434 3.28069C13.1693 3.46041 13.0714 3.70417 13.0714 3.95833V7.025L5.44554 8.77396H5.36429L5.24821 8.82187H5.225L5.13214 8.86979C5.13214 8.87136 5.13184 8.87292 5.13126 8.87438C5.13068 8.87583 5.12982 8.87715 5.12874 8.87826C5.12767 8.87937 5.12639 8.88026 5.12498 8.88086C5.12357 8.88146 5.12206 8.88177 5.12054 8.88177L5.01607 8.96563C5.01607 8.9688 5.01485 8.97185 5.01267 8.9741C5.01049 8.97634 5.00754 8.9776 5.00446 8.9776L4.93482 9.06146H4.92321C4.89235 9.09146 4.86853 9.12833 4.85357 9.16927L4.83036 9.19323L4.78393 9.30104H4.77232L1.06964 18.9323C1.02424 19.0463 1.0006 19.1684 1 19.2917C1 22.0828 3.84375 23.125 5.64286 23.125C7.44196 23.125 10.2857 22.0828 10.2857 19.2917C10.2851 19.1684 10.2615 19.0463 10.2161 18.9323L6.90804 10.4031L13.0714 8.98958V24.0833H11.2143C10.968 24.0833 10.7318 24.1843 10.5577 24.364C10.3835 24.5437 10.2857 24.7875 10.2857 25.0417C10.2857 25.2958 10.3835 25.5396 10.5577 25.7193C10.7318 25.899 10.968 26 11.2143 26H16.7857C17.032 26 17.2682 25.899 17.4423 25.7193C17.6165 25.5396 17.7143 25.2958 17.7143 25.0417C17.7143 24.7875 17.6165 24.5437 17.4423 24.364C17.2682 24.1843 17.032 24.0833 16.7857 24.0833H14.9286V8.55833L20.8366 7.20469L17.7839 15.099C17.7385 15.213 17.7149 15.335 17.7143 15.4583C17.7143 18.2495 20.558 19.2917 22.3571 19.2917C24.1562 19.2917 27 18.2495 27 15.4583C26.9994 15.335 26.9758 15.213 26.9304 15.099ZM5.64286 21.2083C4.77232 21.2083 2.99643 20.7771 2.86875 19.4594L5.64286 12.2839L8.41696 19.4594C8.28929 20.7771 6.51339 21.2083 5.64286 21.2083ZM22.3571 17.375C21.4866 17.375 19.7107 16.9437 19.583 15.626L22.3571 8.45052L25.1312 15.626C25.0036 16.9437 23.2277 17.375 22.3571 17.375Z"/>
                    </svg>
                </a>
            </div>
            <div class="aside__btn-1">
                <a class="circle-btn a" href="#modal-login" data-count="12" data-fancybox-modal-2>
                    <svg id="q" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.1187 3.5C17.1281 3.5 15.2514 4.41558 14 5.90335C12.7486 4.41558 10.8719 3.5 8.88125 3.5C5.35489 3.5 2.625 6.24646 2.625 9.79426C2.625 14.1428 6.49239 17.6336 12.3504 23.0119L14 24.5L15.6496 23.0119C21.5076 17.6335 25.375 14.1427 25.375 9.79426C25.375 6.24646 22.6451 3.5 19.1187 3.5ZM14.702 21.5062L14.4712 21.718L14 22.1431L13.5288 21.7181L13.2984 21.5065C10.5411 18.9755 8.15987 16.7895 6.58569 14.835C5.05679 12.9366 4.375 11.382 4.375 9.79426C4.375 8.54383 4.83558 7.39178 5.67191 6.55041C6.50546 5.71184 7.6452 5.25 8.88125 5.25C10.3105 5.25 11.7234 5.91538 12.6607 7.0298L14 8.62209L15.3392 7.0298C16.2766 5.91538 17.6895 5.25 19.1187 5.25C20.3549 5.25 21.4945 5.71184 22.3281 6.55036C23.1644 7.39178 23.625 8.54377 23.625 9.79426C23.625 11.382 22.9432 12.9365 21.4144 14.8349C19.8403 16.7894 17.4591 18.9752 14.702 21.5062Z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="aside__menu">
            <ul class="menu">
                <li class="menu__item"><a class="menu__link " href="about.html" data-slug="about">О компании</a></li>
                <li class="menu__item"><a class="menu__link " href="garanties.html" data-slug="garanties">Гарантия</a></li>
                <li class="menu__item"><a class="menu__link " href="buy.html" data-slug="buy">Как купить</a></li>
                <li class="menu__item"><a class="menu__link " href="delivery.html" data-slug="delivery">Доставка</a></li>
                <li class="menu__item"><a class="menu__link " href="payments.html" data-slug="payments">Оплата</a></li>
                <li class="menu__item"><a class="menu__link " href="partners.html" data-slug="partners">Партнеры</a></li>
                <li class="menu__item"><a class="menu__link " href="news.html" data-slug="news">Новости</a></li>
                <li class="menu__item"><a class="menu__link " href="blog.html" data-slug="blog">Статьи</a></li>
                <li class="menu__item"><a class="menu__link " href="contacts.html" data-slug="contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="aside__footer">
            <div class="aside__phone">
                <div class="box-phones box-phones_b"><span class="box-phones__label js-tooltip-phones_aside" tabindex="0" role="button" data-tooltip-content="#tooltip-phones-aside"><i><svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><use xlink:href="img/svg/phone-1.svg#q"></use></svg></i><span>+7 (777) 208-99-55</span></span></div>
            </div>
            <div class="aside__soc-1"><a class="social-link" href="https://t.me/+77772089955" target="_blank" data-title="Telegram"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/tg.svg#q"></use></svg></a></div>
            <div class="aside__soc-2"><a class="social-link" href="https://wa.me/77772089955" target="_blank" data-title="WhatsApp"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/wa.svg#q"></use></svg></a></div>
        </div>
    </div>
</div>
<div class="aside__overlay js-aside-toggle"></div>
<div class="fixmenu" id="fixmenu">
    <div class="container">
        <div class="fixmenu__row">
            <div class="fixmenu__phones">
                <div class="header__soc-1"><a class="social-link" href="https://t.me/+77772089955" target="_blank" data-title="Telegram"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/tg.svg#q"></use></svg></a></div>
                <div class="header__soc-2"><a class="social-link" href="https://wa.me/77772089955" target="_blank" data-title="WhatsApp"><svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/wa.svg#q"></use></svg></a></div>
                <div class="box-phones">
                    <span class="box-phones__label js-tooltip-phones" tabindex="0" role="button" data-tooltip-content="#tooltip-phones">
                        <i>
                      <svg id="q" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7748 14.196L17.2623 12.6835C16.8115 12.2362 16.2029 11.9841 15.5678 11.9814C14.9328 11.9787 14.3221 12.2256 13.8674 12.669C13.6248 12.913 13.3048 13.0648 12.9624 13.0983C12.6199 13.1318 12.2765 13.0449 11.9913 12.8526C10.8653 12.1011 9.89796 11.1357 9.14432 10.0112C8.95537 9.72269 8.87162 9.37791 8.90719 9.03491C8.94275 8.69191 9.09546 8.37165 9.33957 8.12809C9.77895 7.67301 10.0227 7.06402 10.0188 6.43147C10.0148 5.79891 9.76333 5.19304 9.31826 4.74353L7.80576 3.23103C7.35293 2.77976 6.73971 2.52637 6.10041 2.52637C5.46112 2.52637 4.84789 2.77976 4.39507 3.23103L3.95988 3.6669C1.69113 5.93565 1.86094 10.7055 6.58132 15.4232C9.42757 18.2701 12.2924 19.4622 14.6154 19.4622C15.2993 19.485 15.9808 19.3714 16.6203 19.1282C17.2598 18.8849 17.8445 18.5168 18.3403 18.0453L18.7762 17.6094C19.2283 17.1564 19.4821 16.5424 19.4818 15.9024C19.4816 15.2624 19.2273 14.6486 18.7748 14.196ZM17.8027 16.6373L17.3668 17.0732C15.5793 18.8607 11.6338 18.5341 7.55207 14.4517C3.47038 10.3693 3.14313 6.42103 4.93063 4.63353L5.36307 4.19834C5.55778 4.00434 5.82143 3.89541 6.09629 3.89541C6.37115 3.89541 6.6348 4.00434 6.82951 4.19834L8.34201 5.71084C8.53318 5.90297 8.64169 6.1622 8.64438 6.43322C8.64708 6.70423 8.54375 6.96557 8.35645 7.16147C7.89189 7.62899 7.6021 8.24195 7.53564 8.89768C7.46918 9.5534 7.63008 10.2121 7.99138 10.7633C8.8477 12.0447 9.94886 13.1442 11.2316 13.9987C11.7811 14.36 12.4381 14.5219 13.0926 14.4572C13.7472 14.3925 14.3597 14.1052 14.8279 13.6432C15.0234 13.4537 15.2855 13.3485 15.5578 13.3501C15.8301 13.3518 16.0908 13.4602 16.284 13.6522L17.7965 15.1647C17.894 15.2607 17.9715 15.3751 18.0246 15.5013C18.0777 15.6274 18.1053 15.7628 18.1059 15.8997C18.1065 16.0365 18.08 16.1722 18.028 16.2988C17.9759 16.4253 17.8994 16.5404 17.8027 16.6373Z" fill="black"/>
                      </svg>
                        </i>
                        <span>+7 (777) 208-99-55</span></span></div>
            </div>
            <div class="fixmenu__search">
                <form class="search js-search" action="#" method="get">
                    <button class="search__submit" type="submit">
                        <svg id="q" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.62447 15.9228C5.00921 17.3095 6.85324 18.1419 8.80917 18.2633C10.7651 18.3847 12.6979 17.7866 14.2435 16.5818L19.5615 21.8998C19.7501 22.0819 20.0027 22.1827 20.2649 22.1805C20.5271 22.1782 20.7779 22.073 20.9633 21.8876C21.1487 21.7022 21.2539 21.4514 21.2561 21.1892C21.2584 20.927 21.1576 20.6744 20.9755 20.4858L15.6575 15.1678C16.9158 13.5529 17.5107 11.5189 17.3209 9.48055C17.131 7.44218 16.1708 5.55298 14.636 4.19825C13.1011 2.84352 11.1073 2.1253 9.06113 2.19006C7.01496 2.25483 5.07056 3.0977 3.62447 4.54679C2.87727 5.29361 2.28453 6.18033 1.88013 7.1563C1.47573 8.13227 1.26758 9.17835 1.26758 10.2348C1.26758 11.2912 1.47573 12.3373 1.88013 13.3133C2.28453 14.2892 2.87727 15.176 3.62447 15.9228ZM5.03847 5.96279C6.02705 4.97423 7.32779 4.35903 8.7191 4.22198C10.1104 4.08494 11.5062 4.43453 12.6686 5.21121C13.8311 5.98788 14.6883 7.14358 15.0942 8.4814C15.5001 9.81922 15.4296 11.2564 14.8946 12.548C14.3597 13.8397 13.3935 14.9059 12.1606 15.5651C10.9277 16.2242 9.5044 16.4355 8.13319 16.1629C6.76199 15.8903 5.52772 15.1507 4.64067 14.0701C3.75362 12.9895 3.26868 11.6348 3.26847 10.2368C3.26573 9.44236 3.42078 8.6553 3.72462 7.92127C4.02846 7.18724 4.47505 6.52085 5.03847 5.96079V5.96279Z" fill="black"/>
                        </svg>
                    </button>
                    <input class="search__input js-search-input" type="text" name="search" placeholder="Поиск товаров по сайту" required>
                    <div class="search__wrap js-search-result"><span class="search__empty">Ничего не найдено. Попробуйте поменять запрос.</span></div>
                </form>
            </div>
            <div class="fixmenu__cat"><a class="cat-link" href="catalog.html"><i>
                        <svg id="q" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="8.17297" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                            <rect x="12.4648" y="1" width="8.85405" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                            <rect x="1" y="13.1455" width="8.17297" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                            <rect x="12.4648" y="13.1455" width="8.85405" height="8.85405" rx="2" stroke-width="1.8" stroke-linejoin="round"/>
                        </svg>
                    </i><span>Каталог</span></a></div>
            <div class="fixmenu__favorite"><a class="circle-btn a" href="#" data-count="12">
                    <svg id="q" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.1187 3.5C17.1281 3.5 15.2514 4.41558 14 5.90335C12.7486 4.41558 10.8719 3.5 8.88125 3.5C5.35489 3.5 2.625 6.24646 2.625 9.79426C2.625 14.1428 6.49239 17.6336 12.3504 23.0119L14 24.5L15.6496 23.0119C21.5076 17.6335 25.375 14.1427 25.375 9.79426C25.375 6.24646 22.6451 3.5 19.1187 3.5ZM14.702 21.5062L14.4712 21.718L14 22.1431L13.5288 21.7181L13.2984 21.5065C10.5411 18.9755 8.15987 16.7895 6.58569 14.835C5.05679 12.9366 4.375 11.382 4.375 9.79426C4.375 8.54383 4.83558 7.39178 5.67191 6.55041C6.50546 5.71184 7.6452 5.25 8.88125 5.25C10.3105 5.25 11.7234 5.91538 12.6607 7.0298L14 8.62209L15.3392 7.0298C16.2766 5.91538 17.6895 5.25 19.1187 5.25C20.3549 5.25 21.4945 5.71184 22.3281 6.55036C23.1644 7.39178 23.625 8.54377 23.625 9.79426C23.625 11.382 22.9432 12.9365 21.4144 14.8349C19.8403 16.7894 17.4591 18.9752 14.702 21.5062Z"/>
                    </svg>
                </a></div>
            <div class="fixmenu__weight"><a class="circle-btn" href="#">
                    <svg id="q" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.9304 15.099L23.2161 5.51562L23.158 5.40781L23.0884 5.31198C23.0768 5.3 23.0768 5.3 23.0768 5.28802L22.9839 5.19219H22.9723L22.8911 5.13229L22.8679 5.10833L22.7634 5.04844H22.7518L22.6473 5.0125H22.6241L22.508 4.98854H22.1598L14.9286 6.59375V3.95833C14.9286 3.70417 14.8307 3.46041 14.6566 3.28069C14.4825 3.10097 14.2463 3 14 3C13.7537 3 13.5175 3.10097 13.3434 3.28069C13.1693 3.46041 13.0714 3.70417 13.0714 3.95833V7.025L5.44554 8.77396H5.36429L5.24821 8.82187H5.225L5.13214 8.86979C5.13214 8.87136 5.13184 8.87292 5.13126 8.87438C5.13068 8.87583 5.12982 8.87715 5.12874 8.87826C5.12767 8.87937 5.12639 8.88026 5.12498 8.88086C5.12357 8.88146 5.12206 8.88177 5.12054 8.88177L5.01607 8.96563C5.01607 8.9688 5.01485 8.97185 5.01267 8.9741C5.01049 8.97634 5.00754 8.9776 5.00446 8.9776L4.93482 9.06146H4.92321C4.89235 9.09146 4.86853 9.12833 4.85357 9.16927L4.83036 9.19323L4.78393 9.30104H4.77232L1.06964 18.9323C1.02424 19.0463 1.0006 19.1684 1 19.2917C1 22.0828 3.84375 23.125 5.64286 23.125C7.44196 23.125 10.2857 22.0828 10.2857 19.2917C10.2851 19.1684 10.2615 19.0463 10.2161 18.9323L6.90804 10.4031L13.0714 8.98958V24.0833H11.2143C10.968 24.0833 10.7318 24.1843 10.5577 24.364C10.3835 24.5437 10.2857 24.7875 10.2857 25.0417C10.2857 25.2958 10.3835 25.5396 10.5577 25.7193C10.7318 25.899 10.968 26 11.2143 26H16.7857C17.032 26 17.2682 25.899 17.4423 25.7193C17.6165 25.5396 17.7143 25.2958 17.7143 25.0417C17.7143 24.7875 17.6165 24.5437 17.4423 24.364C17.2682 24.1843 17.032 24.0833 16.7857 24.0833H14.9286V8.55833L20.8366 7.20469L17.7839 15.099C17.7385 15.213 17.7149 15.335 17.7143 15.4583C17.7143 18.2495 20.558 19.2917 22.3571 19.2917C24.1562 19.2917 27 18.2495 27 15.4583C26.9994 15.335 26.9758 15.213 26.9304 15.099ZM5.64286 21.2083C4.77232 21.2083 2.99643 20.7771 2.86875 19.4594L5.64286 12.2839L8.41696 19.4594C8.28929 20.7771 6.51339 21.2083 5.64286 21.2083ZM22.3571 17.375C21.4866 17.375 19.7107 16.9437 19.583 15.626L22.3571 8.45052L25.1312 15.626C25.0036 16.9437 23.2277 17.375 22.3571 17.375Z"/>
                    </svg>
                </a></div>
            <div class="fixmenu__cart"><a class="cart-btn" href="cart.html"><i>
                        <svg id="q" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.10391 20.16C8.98756 20.16 9.70391 19.4436 9.70391 18.56C9.70391 17.6763 8.98756 16.96 8.10391 16.96C7.22025 16.96 6.50391 17.6763 6.50391 18.56C6.50391 19.4436 7.22025 20.16 8.10391 20.16Z" stroke="none"/>
                            <path d="M18.3227 20.16C19.2063 20.16 19.9227 19.4436 19.9227 18.56C19.9227 17.6763 19.2063 16.96 18.3227 16.96C17.439 16.96 16.7227 17.6763 16.7227 18.56C16.7227 19.4436 17.439 20.16 18.3227 20.16Z" stroke="none"/>
                            <path d="M4.36899 4.8H22L19.406 13.5776C19.3121 13.8952 19.1138 14.1746 18.8411 14.3735C18.5683 14.5724 18.236 14.68 17.8943 14.68H8.47468C8.13302 14.68 7.80067 14.5724 7.52791 14.3735C7.25515 14.1746 7.05684 13.8952 6.96298 13.5776L3.40889 1.55121C3.36196 1.39241 3.2628 1.25271 3.12642 1.15326C2.99004 1.0538 2.82386 1 2.65304 1H1" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </i><span>Корзина</span><small>8</small></a></div>
            <div class="fixmenu__profile"><a class="profile-btn" href="#" data-status="warn"><i>
                        <svg id="q" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7134 10.7093C14.6986 9.93843 15.4178 8.8813 15.7708 7.68501C16.1237 6.48872 16.093 5.21276 15.6829 4.03464C15.2727 2.85652 14.5036 1.83483 13.4823 1.11171C12.4611 0.388591 11.2387 0 9.9851 0C8.73148 0 7.50904 0.388591 6.48784 1.11171C5.46664 1.83483 4.69746 2.85652 4.28731 4.03464C3.87716 5.21276 3.84644 6.48872 4.19943 7.68501C4.55241 8.8813 5.27154 9.93843 6.25678 10.7093C4.56856 11.382 3.09553 12.4976 1.99473 13.9374C0.893922 15.3771 0.20661 17.087 0.00606162 18.8846C-0.00845511 19.0159 0.00316392 19.1487 0.0402551 19.2754C0.0773462 19.4022 0.139183 19.5205 0.222235 19.6235C0.389967 19.8316 0.63393 19.9648 0.900456 19.994C1.16698 20.0231 1.43424 19.9458 1.64343 19.779C1.85263 19.6122 1.98662 19.3695 2.01594 19.1045C2.23661 17.1508 3.17331 15.3465 4.64708 14.0362C6.12086 12.7259 8.02838 12.0016 10.0052 12.0016C11.982 12.0016 13.8895 12.7259 15.3633 14.0362C16.8371 15.3465 17.7738 17.1508 17.9944 19.1045C18.0218 19.3501 18.1396 19.5769 18.3252 19.7411C18.5108 19.9054 18.7509 19.9955 18.9994 19.994H19.1099C19.3734 19.9638 19.6141 19.8314 19.7798 19.6254C19.9454 19.4195 20.0225 19.1568 19.9943 18.8946C19.7928 17.0918 19.1018 15.3776 17.9953 13.9357C16.8888 12.4937 15.4087 11.3784 13.7134 10.7093ZM9.9851 9.99973C9.19006 9.99973 8.41289 9.76527 7.75184 9.326C7.0908 8.88673 6.57557 8.26237 6.27133 7.53189C5.96708 6.8014 5.88748 5.9976 6.04258 5.22212C6.19768 4.44665 6.58053 3.73433 7.1427 3.17524C7.70487 2.61615 8.42113 2.23541 9.20088 2.08116C9.98064 1.9269 10.7889 2.00607 11.5234 2.30865C12.2579 2.61122 12.8857 3.12362 13.3274 3.78104C13.7691 4.43845 14.0048 5.21137 14.0048 6.00204C14.0048 7.06229 13.5813 8.07912 12.8275 8.82883C12.0736 9.57855 11.0512 9.99973 9.9851 9.99973Z"/>
                        </svg>
                    </i><span>Мой профиль</span></a></div>
            <div class="fixmenu__burger">
                <button class="circle-btn js-aside-toggle" type="button">
                    <svg id="q" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M2.5 5H17.5M2.5 10H17.5M2.5 15H17.5" stroke="black" stroke-width="1.81818" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<!--  Модальное окно Получите консультацию  -->
<div class="modal" id="modal-consult" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
          <svg id="q" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3683 9.9999L17.3521 4.01739C17.442 3.92754 17.5133 3.82086 17.5619 3.70348C17.6105 3.5861 17.6355 3.46029 17.6355 3.33323C17.6355 3.20618 17.6105 3.08037 17.5619 2.96298C17.5133 2.8456 17.442 2.73894 17.3522 2.6491C17.2623 2.55926 17.1557 2.48799 17.0383 2.43937C16.9209 2.39075 16.7951 2.36572 16.668 2.36572C16.541 2.36572 16.4152 2.39075 16.2978 2.43937C16.1804 2.48799 16.0737 2.55928 15.9839 2.64912L10.0014 8.63292L4.01883 2.6491C3.92899 2.55926 3.82233 2.48799 3.70495 2.43937C3.58756 2.39075 3.46175 2.36572 3.3347 2.36572C3.20764 2.36572 3.08183 2.39075 2.96445 2.43937C2.84706 2.48799 2.74041 2.55926 2.65056 2.6491C2.56072 2.73894 2.48946 2.8456 2.44083 2.96298C2.39221 3.08037 2.36719 3.20618 2.36719 3.33323C2.36719 3.46029 2.39221 3.5861 2.44083 3.70348C2.48946 3.82086 2.56075 3.92754 2.65059 4.01739L8.63439 9.9999L2.65056 15.9824C2.46912 16.1639 2.36719 16.41 2.36719 16.6666C2.36719 16.9232 2.46912 17.1693 2.65056 17.3507C2.83201 17.5321 3.0781 17.6341 3.3347 17.6341C3.5913 17.6341 3.83741 17.5321 4.01885 17.3507L10.0014 11.3669L15.9839 17.3507C16.1653 17.5321 16.4114 17.6341 16.668 17.6341C16.9246 17.6341 17.1707 17.5321 17.3522 17.3507C17.5336 17.1693 17.6355 16.9232 17.6355 16.6666C17.6355 16.41 17.5336 16.1639 17.3521 15.9824L11.3683 9.9999Z"/>
          </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Получите <strong>профессиональную</strong> консультацию</span>
            <div class="modal__box"><i><img src="img/modal/chat-1.svg" width="57" height="57" alt=""></i>
                <p>Оставьте свои контактные данные, мы свяжемся с вами в&nbsp;течение 10&nbsp;минут и ответим на все интересующие вопросы.</p>
            </div>
            <form class="form modal__form" action="thanks.html" method="post" autocomplete="off">
                <div class="form__row-1">
                    <div class="form__col-1-1">
                        <div class="messengers js-messengers"><span class="messengers__label">Как с вами связаться?</span>
                            <input class="js-messengers-inp" type="hidden" name="messenger" value="WhatsApp">
                            <div class="messengers__wrap"><a class="messengers__item js-messengers-btn active" tabindex="0" role="button" title="WhatsApp"><img src="img/svg/mess-wa.svg" width="64" height="64" alt="WhatsApp"></a><a class="messengers__item js-messengers-btn" tabindex="0" role="button" title="Telegram"><img src="img/svg/mess-tg.svg" width="64" height="64" alt="Telegram"></a><a class="messengers__item js-messengers-btn" tabindex="0" role="button" title="Email"><img src="img/svg/mess-email.svg" width="64" height="64" alt="Email"></a></div>
                        </div>
                    </div>
                    <div class="form__col-1-2">
                        <div class="form__box-input">
                            <input class="form__input form__input_v2 js-input-phone" type="tel" name="userphone" placeholder="Введите ваш номер телефона" required>
                            <input class="form__input form__input_v2 js-input-email" type="email" name="userphone" placeholder="Введите ваш E-mail" disabled style="display:none">
                        </div>
                    </div>
                </div>
                <div class="form__box-submit-1 text-center">
                    <button class="btn1 btn1_small form__submit" type="submit"><span>Получить консультацию</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/btn-arrow.svg#q"></use></svg></i></button>
                    <input type="hidden" name="title" value="Получите профессиональную консультацию">
                </div>
            </form>
        </div>
    </div>
</div>
<!--  /Модальное окно Получите консультацию  -->
<!--  Модальное окно Реквизиты  -->
<div class="modal" id="modal-requisits" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg id="q" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3683 9.9999L17.3521 4.01739C17.442 3.92754 17.5133 3.82086 17.5619 3.70348C17.6105 3.5861 17.6355 3.46029 17.6355 3.33323C17.6355 3.20618 17.6105 3.08037 17.5619 2.96298C17.5133 2.8456 17.442 2.73894 17.3522 2.6491C17.2623 2.55926 17.1557 2.48799 17.0383 2.43937C16.9209 2.39075 16.7951 2.36572 16.668 2.36572C16.541 2.36572 16.4152 2.39075 16.2978 2.43937C16.1804 2.48799 16.0737 2.55928 15.9839 2.64912L10.0014 8.63292L4.01883 2.6491C3.92899 2.55926 3.82233 2.48799 3.70495 2.43937C3.58756 2.39075 3.46175 2.36572 3.3347 2.36572C3.20764 2.36572 3.08183 2.39075 2.96445 2.43937C2.84706 2.48799 2.74041 2.55926 2.65056 2.6491C2.56072 2.73894 2.48946 2.8456 2.44083 2.96298C2.39221 3.08037 2.36719 3.20618 2.36719 3.33323C2.36719 3.46029 2.39221 3.5861 2.44083 3.70348C2.48946 3.82086 2.56075 3.92754 2.65059 4.01739L8.63439 9.9999L2.65056 15.9824C2.46912 16.1639 2.36719 16.41 2.36719 16.6666C2.36719 16.9232 2.46912 17.1693 2.65056 17.3507C2.83201 17.5321 3.0781 17.6341 3.3347 17.6341C3.5913 17.6341 3.83741 17.5321 4.01885 17.3507L10.0014 11.3669L15.9839 17.3507C16.1653 17.5321 16.4114 17.6341 16.668 17.6341C16.9246 17.6341 17.1707 17.5321 17.3522 17.3507C17.5336 17.1693 17.6355 16.9232 17.6355 16.6666C17.6355 16.41 17.5336 16.1639 17.3521 15.9824L11.3683 9.9999Z"/>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title"><strong>Реквизиты для оплаты заказов</strong> в&nbsp;интернет-магазине «Земледел» через расчетный счет:</span>
            <div class="requisits">
                <div class="requisits__title">ТОО «ЗЕЛЕНЫЙ ДОМ KZ»</div>
                <ul class="requisits__list">
                    <li>
                        <p>210140001074</p><small>БИН</small>
                    </li>
                    <li>
                        <p>590400012448</p><small>РНН</small>
                    </li>
                    <li>
                        <p>17</p><small>Код Бенефициара (КБе)</small>
                    </li>
                    <li>
                        <p>АО «Народный Банк Казахстана»</p><small>Банк</small>
                    </li>
                    <li>
                        <p>HSBKKZKX</p><small>БИК</small>
                    </li>
                </ul>
                <div class="requisits__footer">
                    <ul class="requisits__list">
                        <li>
                            <p>KZ20601A291000504211</p><small>Расчетный счет, KZT</small>
                        </li>
                        <li>
                            <p>KZ41601A291000504221</p><small>Расчетный счет, USD</small>
                        </li>
                        <li>
                            <p>KZ62601A291000504231</p><small>Расчетный счет, RUB</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Реквизиты  -->
<!--  Модальное окно Реквизиты 2  -->
<div class="modal" id="modal-requisits-2" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title"><strong>Реквизиты для оплаты заказов</strong> в&nbsp;интернет-магазине «Земледел» через расчетный счет:</span>
            <div class="requisits">
                <div class="requisits__title">ТОО «ЗЕЛЕНЫЙ ДОМ KZ»</div>
                <ul class="requisits__list">
                    <li>
                        <p>KZ20722S000006784341</p><small>Расчетный счет, KZT</small>
                    </li>
                    <li>
                        <p>CASPKZKA</p><small>БИК</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Реквизиты  -->
<!--  Модальное окно Выйти из аккаунта  -->
<div class="modal modal_w592" id="modal-logout" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Вы уверены, что хотите выйти из аккаунта?</span>
            <div class="modal__subtitle-1">
                <p>В следующий раз для входа будет необходимо <span class="d-ib">ввести логин и пароль.</span></p>
            </div>
            <div class="modal__btn-double">
                <div><a class="btn2 btn2_small btn2_red" href="../">Выйти из аккаунта</a></div>
                <div>
                    <button class="btn2 btn2_small" type="button" data-fancybox-close>Остаться</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Выйти из аккаунта  -->
<!--  Модальное окно Вход на сайт  -->
<div class="modal modal_w660" id="modal-login" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Вход на сайт «Земледел»</span>
            <div class="modal__subtitle-1">
                <p>Чтобы войти на сайт, введите в полях ниже адрес электронной <span class="d-ib">почты и пароль от аккаунта.</span></p>
            </div>
            <div class="modal__form">
                <form class="form" method="post" action="#">
                    <div class="form__box-2">
                        <input class="form__input form__input_v2" type="email" name="useremail" placeholder="Адрес электронной почты" required>
                    </div>
                    <div class="form__box-2 form__box-pass js-hide-pass">
                        <input class="form__input form__input_v2 js-hide-pass-inp" type="password" name="userpassword" placeholder="Пароль" required>
                        <button class="form__btn-pass js-hide-pass-btn" type="button"><svg class="h" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-hide.svg#q"></use></svg>
                            <svg class="o" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-show.svg#q"></use></svg>
                        </button>
                    </div>
                    <div class="form__box-forgot"><a class="form__forgot" href="#modal-registr-2" data-fancybox-modal-2>Не помню пароль</a></div>
                    <div class="form__box-submit-2 text-center">
                        <button class="btn1 btn1_small form__submit" type="submit"><span>Войти на сайт</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/btn-arrow.svg#q"></use></svg></i></button>
                    </div>
                </form>
            </div>
            <div class="modal__sub">У вас еще нет аккаунта? <a class="link-1" href="#modal-registr" data-fancybox-modal-2>Зарегистрируйтесь</a></div>
        </div>
    </div>
</div>
<!--  /Модальное окно Вход на сайт  -->
<!--  Модальное окно Регистрация на сайте  -->
<div class="modal modal_w660" id="modal-registr" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Регистрация на сайте «Земледел»</span>
            <div class="modal__subtitle-1">
                <p>Чтобы зарегистрироваться на сайте, введите адрес своей электронной почты, мы вышлем вам одноразовый код для регистрации.</p>
            </div>
            <div class="modal__form">
                <form class="form" method="post" action="#">
                    <div class="form__box-2">
                        <input class="form__input form__input_v2" type="email" name="useremail" placeholder="Адрес электронной почты" required>
                    </div>
                    <div class="form__box-2 form__box-pass js-hide-pass">
                        <input class="form__input form__input_v2 js-hide-pass-inp" type="password" name="userpassword" placeholder="Пароль" required>
                        <button class="form__btn-pass js-hide-pass-btn" type="button"><svg class="h" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-hide.svg#q"></use></svg>
                            <svg class="o" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-show.svg#q"></use></svg>
                        </button>
                    </div>
                    <div class="form__box-submit-2 text-center">
                        <button class="btn1 btn1_small form__submit" type="submit"><span>Войти на сайт</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/btn-arrow.svg#q"></use></svg></i></button>
                    </div>
                </form>
            </div>
            <div class="modal__sub">У вас еще нет аккаунта? <a class="link-1" href="#modal-login" data-fancybox-modal-2>Войдите</a></div>
        </div>
    </div>
</div>
<!--  /Модальное окно Регистрация на сайте  -->
<!--  Модальное окно Регистрация на сайте 2 -->
<div class="modal modal_w660" id="modal-registr-2" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Регистрация на сайте «Земледел»</span>
            <div class="modal__subtitle-1">
                <p>На вашу электронную почту <strong style="color:#000">[example@mail.com]</strong> отправлен одноразовый 4-значный код. Введите его ниже, чтобы подтвердить свою почту.</p>
            </div>
            <div class="modal__form">
                <form class="form" method="post" action="#">
                    <div class="form__box-2">
                        <input class="form__input form__input_v2" type="text" name="usercodeaccept" placeholder="Код из письма" required>
                    </div>
                    <div class="form__box-submit-2 text-center">
                        <button class="btn1 btn1_small form__submit" type="submit"><span>Проверить</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/btn-arrow.svg#q"></use></svg></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Регистрация на сайте 2  -->
<!--  Модальное окно Восстановление доступа -->
<div class="modal modal_w660" id="modal-registr-3" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Восстановление доступа к&nbsp;аккаунту</span>
            <div class="modal__subtitle-1">
                <p>На вашу электронную почту <strong style="color:#000">[example@mail.com]</strong> отправлен одноразовый 4-значный код. Введите его ниже, чтобы подтвердить свою почту.</p>
            </div>
            <div class="modal__form">
                <form class="form" method="post" action="#">
                    <div class="form__box-2">
                        <input class="form__input form__input_v2" type="text" name="usercodeaccept" placeholder="Код из письма" required>
                    </div>
                    <div class="form__box-submit-2 text-center">
                        <button class="btn1 btn1_small form__submit" type="submit"><span>Проверить</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/btn-arrow.svg#q"></use></svg></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Восстановление доступа  -->
<!--  Модальное окно Восстановление доступа  -->
<div class="modal modal_w660" id="modal-registr-4" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title">Восстановление доступа к&nbsp;аккаунту</span>
            <div class="modal__subtitle-1">
                <p>Почта подтверждена! Придумайте надежный пароль <span class="d-ib">для своего аккаунта.</span></p>
            </div>
            <div class="modal__form">
                <form class="form" method="post" action="#">
                    <div class="form__box-2 form__box-pass js-hide-pass">
                        <input class="form__input form__input_v2 js-hide-pass-inp" type="password" name="userpassword1" placeholder="Введите новый пароль" required>
                        <button class="form__btn-pass js-hide-pass-btn" type="button"><svg class="h" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-hide.svg#q"></use></svg>
                            <svg class="o" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-show.svg#q"></use></svg>
                        </button>
                    </div>
                    <div class="form__box-2 form__box-pass js-hide-pass">
                        <input class="form__input form__input_v2 js-hide-pass-inp" type="password" name="userpassword2" placeholder="Повторите новый пароль" required>
                        <button class="form__btn-pass js-hide-pass-btn" type="button"><svg class="h" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-hide.svg#q"></use></svg>
                            <svg class="o" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/modal/eye-show.svg#q"></use></svg>
                        </button>
                    </div>
                    <div class="form__box-submit-2 text-center">
                        <button class="btn1 btn1_small form__submit" type="submit"><span>Сохранить новый пароль</span><i class="btn1__safe"><svg width="21" height="22" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/uil_save.svg#q"></use></svg></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Восстановление доступа  -->
<!--  Модальное окно Дипломы  -->
<div class="modal modal_w1192" id="modal-diploms" style="display:none">
    <div class="modal__wrap">
        <button class="modal__close" type="button" data-fancybox-close aria-label="Close">
            <svg aria-hidden="true" width="26" height="26">
                <use xlink:href="img/svg/close-1.svg#q"></use>
            </svg>
        </button>
        <div class="modal__content"><span class="modal__title"><strong>Благодарственные письма</strong> компании «Земледел» от&nbsp;партнеров и клиентов</span>
            <div class="modal__diploms" id="diploms">
                <div class="swiper js-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="modal__diploms-slide">
                                <div class="modal__diploms-pic"><img src="img/diploms/1.png" width="397" height="561" alt=""></div>
                                <div class="modal__diploms-desc"><span class="modal__diploms-title">«Название компании»</span><span class="modal__diploms-publish">24 июня 2023</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="modal__diploms-slide">
                                <div class="modal__diploms-pic"><img src="img/diploms/1.png" width="397" height="561" alt=""></div>
                                <div class="modal__diploms-desc"><span class="modal__diploms-title">«Название компании»</span><span class="modal__diploms-publish">24 июня 2023</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="modal__diploms-slide">
                                <div class="modal__diploms-pic"><img src="img/diploms/1.png" width="397" height="561" alt=""></div>
                                <div class="modal__diploms-desc"><span class="modal__diploms-title">«Название компании»</span><span class="modal__diploms-publish">24 июня 2023</span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="modal__diploms-slide">
                                <div class="modal__diploms-pic"><img src="img/diploms/1.png" width="397" height="561" alt=""></div>
                                <div class="modal__diploms-desc"><span class="modal__diploms-title">«Название компании»</span><span class="modal__diploms-publish">24 июня 2023</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__diploms-bottom">
                    <div class="modal__diploms-scrollbar">
                        <div class="swiper-scrolbar js-scrollbar"></div>
                    </div>
                    <div class="slider__nav modal__diploms-nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-prev.svg#q"></use></svg></span><span class="slider__arrow slider__arrow_next js-next" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-next.svg#q"></use></svg></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  /Модальное окно Дипломы  -->
<!--status - ok, wrong-->
<div class="add-to-cart" id="add-to-cart" data-status="ok"><i></i>
    <p>Товар добавлен <br>в корзину</p><a href="goods.html"><svg width="44" height="44" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><use xlink:href="img/svg2/arrow-add.svg#q"></use></svg></a>
</div>
<div hidden>
    <div id="tooltip-phones">
        <ul class="box-phones__list">
            <li><a href="tel:+77772089955">+7 (777) 208-99-55</a></li>
        </ul>
    </div>
    <div id="tooltip-phones-aside">
        <ul class="box-phones__list box-phones__list_aside">
            <li><a href="tel:+77772089955">+7 (777) 208-99-55</a></li>
        </ul>
    </div>
</div>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/libs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/custom.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/search.js"></script>
</body>
</html>