<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
    <ul class="breadcrumbs" data-aos="fade-right" data-aos-delay="0">
        <li><a href="index.html">Главная</a></li>
        <li><span>Общая страница новостей</span></li>
    </ul>
    <div class="top__wrap-2">
        <h1 class="top__title-2" data-aos="fade-right" data-aos-delay="0"><strong>Новости земледелия</strong> и сельского хозяйства </h1>
        <div class="blog" id="blog">
            <div class="blog__filters">
                <div class="blog__filter">
                    <div class="form__box-select form__box-select_years">
                        <select class="form__select js-select" name="filter-years">
                            <option selected disabled>Год</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                        </select>
                    </div>
                </div>
                <div class="blog__filter">
                    <div class="form__box-select form__box-select_months">
                        <select class="form__select js-select" name="filter-months">
                            <option selected disabled>Месяц</option>
                            <option>Январь</option>
                            <option>Февраль</option>
                            <option>Март</option>
                            <option>Апрель</option>
                            <option>Май</option>
                            <option>Июнь</option>
                            <option>Июль</option>
                            <option>Август</option>
                            <option>Сентябрь</option>
                            <option>Октябрь</option>
                            <option>Ноябрь</option>
                            <option>Декабрь</option>
                        </select>
                    </div>
                </div>
                <div class="blog__filter">
                    <div class="form__box-select form__box-select_parts">
                        <select class="form__select js-select" name="filter-cats">
                            <option selected disabled>Раздел</option>
                            <option>Раздел 1</option>
                            <option>Раздел 2</option>
                            <option>Раздел 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="blog__items">
                <div class="blog__item" data-aos="fade-up" data-aos-delay="0">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-1.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="50">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-2.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-3.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-1.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="150">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-2.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-3.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-1.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="250">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-2.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/articles/pic-2-3.jpg" width="436" height="282" alt=""></div><span class="blog__title">В одной из областей Казахстана убирают люцерну</span><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article-2.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
            </div>
            <div class="blog__pagi" data-aos="fade-up" data-aos-delay="0">
                <div class="pagi">
                    <ul>
                        <li><a class="pagi__prev" href="#"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/arrow-prev.svg#q"></use></svg></a></li>
                        <li><span class="pagi__curr">1</span></li>
                        <li><a class="pagi__page" href="#">2</a></li>
                        <li><a class="pagi__page" href="#">3</a></li>
                        <li><a class="pagi__page" href="#">4</a></li>
                        <li><a class="pagi__page" href="#">5</a></li>
                        <li><span class="pagi__page">...</span></li>
                        <li><a class="pagi__page" href="#">12</a></li>
                        <li><a class="pagi__next" href="#"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/arrow-next.svg#q"></use></svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
<?//$APPLICATION->IncludeComponent("bitrix:news", "bootstrap_v4", array(
//	"IBLOCK_TYPE" => "news",
//	"IBLOCK_ID" => "1",
//	"TEMPLATE_THEME" => "site",
//	"NEWS_COUNT" => "10",
//	"USE_SEARCH" => "N",
//	"USE_RSS" => "Y",
//	"NUM_NEWS" => "20",
//	"NUM_DAYS" => "180",
//	"YANDEX" => "N",
//	"USE_RATING" => "N",
//	"USE_CATEGORIES" => "N",
//	"USE_REVIEW" => "N",
//	"USE_FILTER" => "N",
//	"SORT_BY1" => "ACTIVE_FROM",
//	"SORT_ORDER1" => "DESC",
//	"SORT_BY2" => "SORT",
//	"SORT_ORDER2" => "ASC",
//	"CHECK_DATES" => "Y",
//	"SEF_MODE" => "Y",
//	"SEF_FOLDER" => "/news/",
//	"AJAX_MODE" => "N",
//	"AJAX_OPTION_SHADOW" => "Y",
//	"AJAX_OPTION_JUMP" => "N",
//	"AJAX_OPTION_STYLE" => "Y",
//	"AJAX_OPTION_HISTORY" => "N",
//	"CACHE_TYPE" => "A",
//	"CACHE_TIME" => "36000000",
//	"CACHE_FILTER" => "N",
//	"CACHE_GROUPS" => "Y",
//	"DISPLAY_PANEL" => "Y",
//	"SET_TITLE" => "Y",
//	"SET_STATUS_404" => "Y",
//	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
//	"ADD_SECTIONS_CHAIN" => "N",
//	"ADD_ELEMENT_CHAIN" => "Y",
//	"USE_PERMISSIONS" => "N",
//	"PREVIEW_TRUNCATE_LEN" => "",
//	"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
//	"LIST_FIELD_CODE" => array(
//		0 => "",
//		1 => "",
//	),
//	"LIST_PROPERTY_CODE" => array(
//		0 => "",
//		1 => "",
//	),
//	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
//	"DISPLAY_NAME" => "Y",
//	"META_KEYWORDS" => "-",
//	"META_DESCRIPTION" => "-",
//	"BROWSER_TITLE" => "-",
//	"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
//	"DETAIL_FIELD_CODE" => array(
//		0 => "",
//		1 => "",
//	),
//	"DETAIL_PROPERTY_CODE" => array(
//		0 => "",
//		1 => "",
//	),
//	"DETAIL_DISPLAY_TOP_PAGER" => "N",
//	"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
//	"DETAIL_PAGER_TITLE" => "Страница",
//	"DETAIL_PAGER_TEMPLATE" => "arrows",
//	"DETAIL_PAGER_SHOW_ALL" => "Y",
//	"DISPLAY_TOP_PAGER" => "N",
//	"DISPLAY_BOTTOM_PAGER" => "Y",
//	"PAGER_TITLE" => "Новости",
//	"PAGER_SHOW_ALWAYS" => "N",
//	"PAGER_TEMPLATE" => "arrows",
//	"PAGER_DESC_NUMBERING" => "N",
//	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
//	"PAGER_SHOW_ALL" => "N",
//	"DISPLAY_DATE" => "Y",
//	"DISPLAY_PICTURE" => "Y",
//	"DISPLAY_PREVIEW_TEXT" => "Y",
//	"AJAX_OPTION_ADDITIONAL" => "",
//	"SLIDER_PROPERTY" => "PICS_NEWS",
//	"SEF_URL_TEMPLATES" => array(
//		"news" => "",
//		"section" => "",
//		"detail" => "#ELEMENT_CODE#/",
//		"search" => "search/",
//		"rss" => "rss/",
//		"rss_section" => "#SECTION_ID#/rss/",
//	)
//	),
//	false
//);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>