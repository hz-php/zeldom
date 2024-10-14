<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин товаров для промышленного земледелия");
?>
    <div class="top__wrap top__wrap-1">
        <?php
        if (!CModule::IncludeModule("iblock"))
            return;
        $res = CIBlockElement::GetByID(317);
        if ($ar_res = $res->GetNext()) {
            $img = CFile::GetPath($ar_res['PREVIEW_PICTURE']);
            $background = CFile::GetPath($ar_res['DETAIL_PICTURE']);
            ?>
            <div class="top__label" data-aos="fade-left" data-aos-delay="300">
                <?= $ar_res['PREVIEW_TEXT']; ?>
            </div>
            <div class="top__desc top__desc-1">

                <h1 class="top__title" data-aos="fade-right" data-aos-delay="300"><?= $ar_res['NAME'] ?></h1>
                <div class="top__btns" data-aos="fade-right" data-aos-delay="400">
                    <a class="btn1 top__btn" href="/catalog/">
                        Перейти в каталог
                        <i class="btn1__arr">
                        </i>
                    </a>
                </div>

            </div>
            <div class="top__pic-1">
            <span>
                <img width="1680" src="<?= $background ?>" height="440" class="img-1" alt="">
            </span>
                <div class="img-2"><img width="1130" src="<?= $img ?>" height="440" alt=""></div>
            </div>
            <div class="top__dots js-dots"></div>
            <?php
        }
        ?>
    </div>

    <div class="slider top__slider" id="slider-top">
        <?php
        $APPLICATION->IncludeComponent("bitrix:news.list", "slider_top", array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "Y",    // Включить режим AJAX
            "IBLOCK_TYPE" => "",    // Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "5",    // Код информационного блока
            "NEWS_COUNT" => "20",    // Количество новостей на странице
            "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
            "FILTER_NAME" => "",    // Фильтр
            "FIELD_CODE" => array(    // Поля
                0 => "ID",
            ),
            "PROPERTY_CODE" => array(    // Свойства
                0 => "DESCRIPTION",
            ),
            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
            "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
            "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
            "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
            "SET_LAST_MODIFIED" => "Y",    // Устанавливать в заголовках ответа время модификации страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",    // Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "",    // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CACHE_TIME" => "3600",    // Время кеширования (сек.)
            "CACHE_FILTER" => "Y",    // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
            "DISPLAY_TOP_PAGER" => "Y",    // Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
            "PAGER_TITLE" => "Новости",    // Название категорий
            "PAGER_SHOW_ALWAYS" => "Y",    // Выводить всегда
            "PAGER_TEMPLATE" => "",    // Шаблон постраничной навигации
            "PAGER_DESC_NUMBERING" => "Y",    // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
            "PAGER_BASE_LINK_ENABLE" => "Y",    // Включить обработку ссылок
            "SET_STATUS_404" => "Y",    // Устанавливать статус 404
            "SHOW_404" => "Y",    // Показ специальной страницы
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",    // Url для построения ссылок (по умолчанию - автоматически)
            "PAGER_PARAMS_NAME" => "arrPager",    // Имя массива с переменными для построения ссылок
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        ),
            false
        ); ?>
    </div>

    </div>
    <!--  BENEFITS  -->
    <section class="section section_benefits" id="s-benefits">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">
                Интернет-магазин «Земледел» — все&nbsp;для <strong>комфортного</strong> промышленного земледелия
            </h2>
            <?php
            $APPLICATION->IncludeComponent("bitrix:news.list", "benefits", array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",    // Включить режим AJAX
                "IBLOCK_TYPE" => "",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "6",    // Код информационного блока
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "",    // Фильтр
                "FIELD_CODE" => array(    // Поля
                    0 => "ID",
                ),
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "DESCRIPTION",
                ),
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_LAST_MODIFIED" => "Y",    // Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",    // Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "CACHE_FILTER" => "Y",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "DISPLAY_TOP_PAGER" => "Y",    // Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PAGER_SHOW_ALWAYS" => "Y",    // Выводить всегда
                "PAGER_TEMPLATE" => "",    // Шаблон постраничной навигации
                "PAGER_DESC_NUMBERING" => "Y",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
                "PAGER_BASE_LINK_ENABLE" => "Y",    // Включить обработку ссылок
                "SET_STATUS_404" => "Y",    // Устанавливать статус 404
                "SHOW_404" => "Y",    // Показ специальной страницы
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",    // Url для построения ссылок (по умолчанию - автоматически)
                "PAGER_PARAMS_NAME" => "arrPager",    // Имя массива с переменными для построения ссылок
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            ),
                false
            ); ?>

        </div>
    </section>
    <!--  /BENEFITS  -->
    <!--  CAT  -->
    <section class="section section_cat" id="s-cat">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Каталог товаров</strong> для фермерского хозяйства</h2>
            <div class="section__aside" data-aos="fade-left" data-aos-delay="100"><i><img width="80" src="/local/templates/zel_dom/img/cat/aside.svg" height="80" alt=""></i>
                <p>всего 10 категорий <br>и более 2500 + товаров</p>
            </div>
            <div class="cat" id="cat">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "section_list",
                    array(
                        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                        "FILTER_NAME" => "sectionsFilter",
                        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                        "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTIONS_LIST_PREVIEW_DESCRIPTION" => $arParams["SECTIONS_LIST_PREVIEW_DESCRIPTION"],
                        "SECTIONS_LIST_PREVIEW_PROPERTY" => ($arParams["SECTIONS_LIST_ROOT_PREVIEW_PROPERTY"] ? $arParams["SECTIONS_LIST_ROOT_PREVIEW_PROPERTY"] : 'UF_SECTION_DESCR'),
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("", ""),
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                        "SECTION_USER_FIELDS" => array("", ""),
                        "SHOW_PARENT_NAME" => "N",
                        "SHOW_SECTIONS_LIST_PREVIEW" => $arParams["SHOW_SECTIONS_LIST_PREVIEW"],
                        "SHOW_SECTION_LIST_PICTURES" => $arParams["SHOW_SECTION_LIST_PICTURES"],
                        "TOP_DEPTH" => 1,
                        "VIEW_MODE" => "LIST"
                    ),
                    $component
                ); ?>


                <div class="cat__btns" data-aos="fade-up" data-aos-delay="200">
                    <a class="btn1 top__btn" href="/catalog/">
                        <span>Смотреть весь каталог</span>
                        <i class="btn1__arr">
                            <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                      fill="white"/>
                                <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                            </svg>
                        </i></a>
                </div>
            </div>
        </div>
    </section>
    <!--  /CAT  -->

    <section class="call call-1" id="call-1">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent("bitrix:news.list", "call_home", array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "Y",
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "9",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("ID"),
                    "PROPERTY_CODE" => array("DESCRIPTION"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",

                )
            ); ?>

        </div>
    </section>
    <!--  ASORT  -->
    <section class="section section_asort" id="s-asort">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Более 10 лет доставляем</strong> сертифицированные товары для промышленного земледелия по&nbsp;всему Казахстану</h2>
            <div class="asort" id="asort">
                <div class="asort__pics">
                    <div class="asort__pic" data-aos="fade-left" data-aos-delay="0">
                        <img width="777" src="/local/templates/zel_dom/img/asort/pic-1.jpg" height="568" class="lazy" data-src="/local/templates/zel_dom/img/asort/pic-1.jpg" alt=""></div>
                    <div class="asort__pic-label" data-aos="fade-left" data-aos-delay="0"><i><img width="83" alt="Like" src="/local/templates/zel_dom/img/asort/like.svg" height="83"></i>
                        <p>Наша задача – подобрать подходящий товар и&nbsp;взять на себя всю логистику вашего заказа</p>
                    </div>
                </div>
                <div class="asort__desc">
                    <div class="txt asort__txt">
                        <p>В интернет-магазине товаров для сада, дачи и огорода «Земледел» вы найдете все товары, нужные для профессионального земледелия:</p>
                    </div>
                    <ul class="asort__list">
                        <li data-aos="fade-right" data-aos-delay="0"><i>
                                <img width="48" src="/local/templates/zel_dom/img/asort/icon-1.svg" height="48" alt=""></i>
                            <p>семена овощей, <br>кормовых</p>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="50"><i>
                                <img width="48" src="/local/templates/zel_dom/img/asort/icon-2.svg" height="48" alt=""></i>
                            <p>все для капельного полива</p>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="0"><i>
                                <img width="48" src="/local/templates/zel_dom/img/asort/icon-3.svg" height="48" alt=""></i>
                            <p>удобрения, микроэлементы и&nbsp;стимуляторы</p>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="50"><i><img width="48" src="/local/templates/zel_dom/img/asort/icon-4.svg" height="48" alt=""></i>
                            <p>пестициды</p>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/asort/icon-5.svg" height="48" alt=""></i>
                            <p>рассадный и укрывной материал, пленка для теплиц</p>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="50"><i><img width="48" src="/local/templates/zel_dom/img/asort/icon-6.svg" height="48" alt=""></i>
                            <p>оборудование</p>
                        </li>
                    </ul>
                    <div class="asort__collapse js-collapse">
                        <div class="txt asort__collapse-wrap js-collapse-wrap">
                            <div>
                                <p>За 12 лет работы, мы стали надежным партнером для крупных тепличных комбинатов, бахчеводов, полеводов и крупных огородников.</p>
                            </div>
                        </div>
                        <span class="link js-collapse-link" tabindex="0" role="button">Читать больше...</span>
                    </div>
                    <div class="asort__btns" data-aos="fade-right" data-aos-delay="0">
                        <a class="btn1 asort__btn" href="about.html"><span>О&nbsp;компании «Земледел»</span>
                            <i class="btn1__arr">
                                <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                    <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                          fill="white"/>
                                    <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  /ASORT  -->
    <!--  PARTNERS  -->
    <section class="section section_partners" id="s-partners">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Наши партнеры</strong> – мировые специалисты в&nbsp;сфере агропромышленности</h2>
            <div class="partners" id="partners">
                <div class="partners__slider">
                    <div class="swiper js-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="0">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/1.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Jara</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="50">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/2.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Bayer</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="100">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/3.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Bejo</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="150">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/4.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Valagro</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="200">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/5.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Syngenta</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="250">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/6.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Dupont</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="300">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/7.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Basf</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="350">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/8.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Seminis</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="400">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/9.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Unigen Seeds</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="450">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/10.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Rijk Zwaan</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="500">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/11.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Avgust</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="550">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/12.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Enza Zaden</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="600">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/13.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Гавриш</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="650">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/14.png" width="" height="" alt=""></div>
                                    <span class="partners__label">ATI</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="700">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/15.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Vellsam</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="partners__slide" data-aos="fade-up" data-aos-delay="750">
                                    <div class="partners__logo"><img src="/local/templates/zel_dom/img/partners/16.png" width="" height="" alt=""></div>
                                    <span class="partners__label">Clause</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partners__bottom">
                    <div class="partners__control">
                        <div class="partners__scrollbar">
                            <div class="swiper-scrollbar js-scrollbar"></div>
                        </div>
                        <div class="slider__nav partners__nav">
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
                    <div class="partners__btns" data-aos="fade-left" data-aos-delay="200"><a class="btn2 partners__btn" href="#modal-diploms" data-fancybox-modal="">Смотреть благодарственные письма</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--  /PARTNERS  -->
    <!--  PRINCIPLE  -->
    <section class="section section_princ" id="s-princ">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Для нас качество — <strong>это&nbsp;принцип</strong></h2>
            <div class="princ" id="princ">
                <div class="princ__pics">
                    <div class="princ__diplom-1" data-aos="fade" data-aos-delay="0"><img width="444" src="/local/templates/zel_dom/img/princ/diplom-2.png" height="520" class="lazy" data-src="/local/templates/zel_dom/img/princ/diplom-2.png" alt=""></div>
                    <div class="princ__diplom-2" data-aos="fade" data-aos-delay="100"><img width="444" src="/local/templates/zel_dom/img/princ/diplom-1.png" height="520" class="lazy" data-src="/local/templates/zel_dom/img/princ/diplom-1.png" alt=""></div>
                    <div class="princ__label" data-aos="fade-left" data-aos-delay="0"><i><img width="74" alt="Reward" src="/local/templates/zel_dom/img/princ/reward.svg" height="74"></i>
                        <p><strong>Сертификат качества</strong><small> пример документа</small></p>
                    </div>
                </div>
                <div class="princ__desc"><span class="princ__title" data-aos="fade-right" data-aos-delay="200">По запросу предоставляем сертификат качества от производителя к каждому товару</span>
                    <div class="princ__txt" data-aos="fade-right" data-aos-delay="250">
                        <p>Наши партнеры – специалисты в мире агропромышленности и лидеры по возделыванию всех видов культур. Мы работаем только с лицензированными компаниями и гарантируем, что вся продукция сертифицирована по мировым стандартам качества.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  /PRINCIPLE  -->
    <section class="call call-2" id="call-2">
        <div class="container">
            <div class="call__wrap">
                <div class="call__desc-2">
                    <h2 class="call__title-2" data-aos="fade-right" data-aos-delay="0"><strong>Бесплатно рассчитаем</strong> расход необходимого материала на&nbsp;вашу&nbsp;площадь</h2>
                    <div class="call__info" data-aos="fade-right" data-aos-delay="100"><i><img width="41" src="/local/templates/zel_dom/img/call/icon-2-1.svg" height="41" alt=""></i>
                        <p>выберите, что нужно рассчитать, оставьте свои контакты — мы отправим вам расчет</p>
                    </div>
                    <form class="form call__form" action="thanks.html" method="post">
                        <div class="form__box-select form__box-select_target" data-aos="fade-right" data-aos-delay="0">
                            <select class="form__select js-select-icon" name="target">
                                <option selected="" disabled="">Расход семян на вашу площадь</option>
                                <option>Расход семян на вашу площадь, схема посадки</option>
                                <option>Расчет материала по капельному орошению</option>
                                <option>Расход удобрений на вашу площадь</option>
                                <option>Расход препарата на вредный объект</option>
                            </select>
                        </div>
                        <div class="form__row-1" data-aos="fade-right" data-aos-delay="0">
                            <div class="form__col-1-1">
                                <div class="messengers js-messengers"><span class="messengers__label">Куда прислать расчет?</span>
                                    <input class="js-messengers-inp" type="hidden" name="messenger" value="WhatsApp">
                                    <div class="messengers__wrap"><a class="messengers__item js-messengers-btn active" tabindex="0" role="button" title="WhatsApp"><img width="64" alt="WhatsApp" src="/local/templates/zel_dom/img/svg/mess-wa.svg" height="64" data-bx-app-ex-src="#BXAPP58#" data-bx-orig-src="/local/templates/zel_dom/img/svg/mess-wa.svg"></a><a class="messengers__item js-messengers-btn" tabindex="0" role="button" title="Telegram"><img width="64" alt="Telegram" src="/local/templates/zel_dom/img/svg/mess-tg.svg" height="64" data-bx-app-ex-src="#BXAPP59#" data-bx-orig-src="/local/templates/zel_dom/img/svg/mess-tg.svg"></a><a class="messengers__item js-messengers-btn" tabindex="0" role="button" title="Email"><img width="64" alt="Email" src="/local/templates/zel_dom/img/svg/mess-email.svg" height="64" data-bx-app-ex-src="#BXAPP60#" data-bx-orig-src="/local/templates/zel_dom/img/svg/mess-email.svg"></a></div>
                                </div>
                            </div>
                            <div class="form__col-1-2">
                                <div class="form__box-input">
                                    <input class="form__input js-input-phone" type="tel" name="userphone" placeholder="Введите ваш номер телефона" required="">
                                    <input class="form__input js-input-email" type="email" name="userphone" placeholder="Введите ваш E-mail" disabled="" style="display:none">
                                </div>
                            </div>
                        </div>
                        <div class="form__box-submit-1" data-aos="fade-right" data-aos-delay="0">
                            <button class="btn1 form__submit" type="submit"><span>Получить расчет расхода</span><i class="btn1__arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                        <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                              fill="white"/>
                                        <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                                    </svg>
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="call__pic-2" data-aos="fade-up" data-aos-delay="0"><img width="860" src="/local/templates/zel_dom/img/call/pic-2-1.png" height="991" class="lazy" data-src="/local/templates/zel_dom/img/call/pic-2-1.png" alt="">
                    <div class="call__box-2-1" data-aos="fade-up" data-aos-delay="100"><i><img width="78" src="/local/templates/zel_dom/img/call/icon-2-2.svg" height="78" alt=""></i>
                        <p>Спланируйте <br>посадочный сезон <br>вместе с «Земледелом» </p>
                    </div>
                    <div class="call__box-2-2"><i><img width="76" src="/local/templates/zel_dom/img/call/icon-2-3.svg" height="76" alt=""></i>
                        <p>предоставим скидку в зависимости от объема заказа или бесплатную доставку<span class="js-tooltip" tabindex="0" role="button" title="Условия уточняйте у наших менеджеров.">*</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ARTICLES  -->
    <section class="section section_articles" id="s-articles">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0">Делимся <strong>полезными статьями</strong> по&nbsp;промышленному земледелию</h2>
            <div class="articles" id="articles">
                <div class="articles__slider">
                    <div class="swiper js-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="articles__slide" href="article.html" data-aos="fade-up" data-aos-delay="0">
                                    <div class="articles__pic">
                                        <img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-1.jpg" width="460" height="282" alt=""></div>
                                    <span class="articles__title">Выращивание зелени как прибыльный бизнес</span>
                                    <div class="articles__excerpt">Практика показывает, что организовать бизнес на выращивании свежей зелени доступно в условиях даже небольшого условиях</div>
                                    <div class="articles__bottom"><span class="articles__publish">3 апреля 2023</span>
                                        <span class="link-diag">
                                           <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                           </svg>
                                        </span></div>
                                </a></div>
                            <div class="swiper-slide"><a class="articles__slide" href="article.html" data-aos="fade-up" data-aos-delay="50">
                                    <div class="articles__pic"><img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2.jpg" width="460" height="282" alt=""></div>
                                    <span class="articles__title">Дыня: посадка, выращивание и уход</span>
                                    <div class="articles__excerpt">В этой статье речь пойдет о сладком ароматном представителе многочисленного семейства тыквенных — дыне.</div>
                                    <div class="articles__bottom">
                                        <span class="articles__publish">30 марта 2023</span><span class="link-diag">
                                          <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                           </svg>
                                        </span></div>
                                </a></div>
                            <div class="swiper-slide"><a class="articles__slide" href="article.html" data-aos="fade-up" data-aos-delay="100">
                                    <div class="articles__pic"><img class="lazy" data-src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-3.jpg" width="460" height="282" alt=""></div>
                                    <span class="articles__title">Какие овощи сеют на рассаду в марте рассаду в марте</span>
                                    <div class="articles__excerpt">С приходом весны начинается рассадный бум – столько всего нужно посеять! А перед этим необходимо докупить...</div>
                                    <div class="articles__bottom"><span class="articles__publish">2 марта 2023</span>
                                        <span class="link-diag">
                                           <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                           </svg>
                                        </span></div>
                                </a></div>
                        </div>
                    </div>
                    <div class="slider__nav js-nav">
                        <span class="slider__arrow slider__arrow_prev js-prev" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-prev.svg#q"></use></svg></span><span class="slider__arrow slider__arrow_next js-next" role="button"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/arrow-next.svg#q"></use></svg></span></div>
                </div>
                <div class="articles__btns" data-aos="fade-up" data-aos-delay="0"><a class="btn1 top__btn" href="/articles/">
                        <span>Читать все статьи</span><i class="btn1__arr">
                            <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                      fill="white"/>
                                <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                            </svg>
                        </i></a></div>
            </div>
        </div>
    </section>
    <!--  /ARTICLES  -->
    <!--  INFO  -->
    <section class="section section_info" id="s-info">
        <div class="container">
            <h2 class="section__title" data-aos="fade-right" data-aos-delay="0"><strong>Узнайте больше</strong> об <br>интернет-магазине «Земледел»</h2>
            <div class="info" id="info">
                <div class="info__slider">
                    <div class="swiper js-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a class="info__slide" href="garanties.html" data-aos="fade-up" data-aos-delay="0">
                                    <div class="info__pic"><img width="64" src="/local/templates/zel_dom/img/info/1.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/1.svg" alt=""></div>
                                    <span class="info__title">Гарантия</span>
                                    <div class="info__bottom">
                                        <span class="info__txt">сертифицированные товары, доставка в срок по договору, безопасная оплата покупок</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide"><a class="info__slide" href="buy.html" data-aos="fade-up" data-aos-delay="50">
                                    <div class="info__pic"><img width="64" src="/local/templates/zel_dom/img/info/2.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/2.svg" alt=""></div>
                                    <span class="info__title">Как купить</span>
                                    <div class="info__bottom"><span class="info__txt">пошаговая инструкция, как оформить заказ в интернет-магазине «Земледел»</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="info__slide" href="delivery.html" data-aos="fade-up" data-aos-delay="100">
                                    <div class="info__pic"><img width="64" src="/local/templates/zel_dom/img/info/3.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/3.svg" alt=""></div>
                                    <span class="info__title">Доставка</span>
                                    <div class="info__bottom"><span class="info__txt">получите расчет сроков и стоимости доставки в любой город Казахстана</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="info__slide" href="payments.html" data-aos="fade-up" data-aos-delay="150">
                                    <div class="info__pic"><img width="64" src="/local/templates/zel_dom/img/info/4.svg" height="64" class="lazy" data-src="/local/templates/zel_dom/img/info/4.svg" alt=""></div>
                                    <span class="info__title">Оплата</span>
                                    <div class="info__bottom">
                                        <span class="info__txt">5 способов оплаты заказа в&nbsp;интернет-магазине «Земледел»</span>
                                        <span class="link-diag">
                                        <svg id="q" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.9251 18.2423L30.1672 18.2699L30.276 29.1556L18.2972 17.414L16.3676 19.3826L28.3465 31.1241L17.4608 31.233L17.4884 33.991L33.0811 33.835L32.9251 18.2423Z"/>
                                        </svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav js-nav">
                        <div class="slider__nav js-nav"><span class="slider__arrow slider__arrow_prev js-prev" role="button">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/svg/arrow-prev.svg#q"></use>
                                </svg>
                            </span>
                            <span class="slider__arrow slider__arrow_next js-next" role="button">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/svg/arrow-next.svg#q"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  /INFO  -->
    <section class="call call-3" id="call-3">
        <div class="container">
            <div class="call__wrap">
                <div class="call__desc-3">
                    <h2 class="call__title-2" data-aos="fade-right" data-aos-delay="0">Получите <strong>профессиональную консультацию</strong> нашего менеджера</h2><span class="call__title-3" data-aos="fade-right" data-aos-delay="0">Мы подробно расскажем вам:</span>
                    <ul class="call__list call__list_v2">
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/call/icon-3-1.svg" height="48" alt=""></i>
                            <div>как улучшить технологию выращивания культур и&nbsp;повысить урожайность в поле или теплице</div>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/call/icon-3-2.svg" height="48" alt=""></i>
                            <div>поможем подобрать товары <span class="d-ib">для промышленного земледелия</span></div>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/call/icon-3-3.svg" height="48" alt=""></i>
                            <div>рассчитаем для вас норму расхода&nbsp;любого&nbsp;товара</div>
                        </li>
                    </ul>
                    <div class="call__row-btns">
                        <div class="call__btns" data-aos="fade-right" data-aos-delay="0">
                            <a class="btn1 call__btn" href="#modal-consult" data-fancybox-modal><span>Получить консультацию</span>
                                <i class="btn1__arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                                        <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                                              fill="white"/>
                                        <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                                    </svg>
                                </i></a></div>
                        <div class="call__socials">
                            <ul class="socials">
                                <li data-aos="fade" data-aos-delay="100"><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer"><img width="57" alt="WhatsApp" src="/local/templates/zel_dom/img/svg/whatsapp-2.svg" height="57"></a></li>
                                <li data-aos="fade" data-aos-delay="200"><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer"><img width="57" alt="Telegram" src="/local/templates/zel_dom/img/svg/telegram-2.svg" height="57"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="call__pic-3" data-aos="fade-up" data-aos-delay="0"><img width="798" src="/local/templates/zel_dom/img/call/pic-3-1.png" height="939" class="lazy" data-src="/local/templates/zel_dom/img/call/pic-3-1.png" alt="">
                    <div class="call__box-3-1"><i><img width="86" src="/local/templates/zel_dom/img/svg/call.svg" height="86" alt=""></i>
                        <p><strong class="color_green">Закутний Владислав</strong><small>менеджер интернет-магазина «Земледел»</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>