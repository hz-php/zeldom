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
        <li><span>Статьи</span></li>
    </ul>
    <div class="top__wrap-2">
        <h1 class="top__title-2 top__title-2_v2" data-aos="fade-right" data-aos-delay="0"><strong>Полезные статьи</strong> по&nbsp;промышленному земледелию</h1>
        <div class="blog" id="blog">
            <div class="blog__items">
                <div class="blog__item" data-aos="fade-up" data-aos-delay="0">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/1.png" width="436" height="282" alt=""></div><span class="blog__title">Выращивание зелени как прибыльный бизнес Выращивание зелени как прибыльный бизнес</span>
                    <div class="blog__excerpt">
                        <p>Практика показывает, что организовать бизнес на выращивании свежей зелени доступно в условиях даже небольшого...</p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="50">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/2.png" width="436" height="282" alt=""></div><span class="blog__title">Дыня: посадка, выращивание и уход</span>
                    <div class="blog__excerpt">
                        <p>В этой статье речь пойдет о сладком ароматном представителе многочисленного семейства тыквенных — дыне. </p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/3.png" width="436" height="282" alt=""></div><span class="blog__title">Какие овощи сеют на рассаду в марте</span>
                    <div class="blog__excerpt">
                        <p>С приходом весны начинается рассадный бум – столько всего нужно посеять! А перед этим необходимо докупить...</p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/1.png" width="436" height="282" alt=""></div><span class="blog__title">Выращивание зелени как прибыльный бизнес Выращивание зелени как прибыльный бизнес</span>
                    <div class="blog__excerpt">
                        <p>Практика показывает, что организовать бизнес на выращивании свежей зелени доступно в условиях даже небольшого...</p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="150">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/2.png" width="436" height="282" alt=""></div><span class="blog__title">Дыня: посадка, выращивание и уход</span>
                    <div class="blog__excerpt">
                        <p>В этой статье речь пойдет о сладком ароматном представителе многочисленного семейства тыквенных — дыне. </p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/3.png" width="436" height="282" alt=""></div><span class="blog__title">Какие овощи сеют на рассаду в марте</span>
                    <div class="blog__excerpt">
                        <p>С приходом весны начинается рассадный бум – столько всего нужно посеять! А перед этим необходимо докупить...</p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/1.png" width="436" height="282" alt=""></div><span class="blog__title">Выращивание зелени как прибыльный бизнес Выращивание зелени как прибыльный бизнес</span>
                    <div class="blog__excerpt">
                        <p>Практика показывает, что организовать бизнес на выращивании свежей зелени доступно в условиях даже небольшого...</p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="250">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/2.png" width="436" height="282" alt=""></div><span class="blog__title">Дыня: посадка, выращивание и уход</span>
                    <div class="blog__excerpt">
                        <p>В этой статье речь пойдет о сладком ароматном представителе многочисленного семейства тыквенных — дыне. </p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
                </div>
                <div class="blog__item" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog__pic"><img src="<?= SITE_TEMPLATE_PATH ?>/img/blog/3.png" width="436" height="282" alt=""></div><span class="blog__title">Какие овощи сеют на рассаду в марте</span>
                    <div class="blog__excerpt">
                        <p>С приходом весны начинается рассадный бум – столько всего нужно посеять! А перед этим необходимо докупить...</p>
                    </div><span class="blog__publish">09.06.2021</span><a class="btn1 blog__btn" href="article.html"><span>Читать далее</span><i class="btn1__arr"><svg width="40" height="26" xmlns="http://www.w3.org/2000/svg"><use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/svg/btn-arrow.svg#q"></use></svg></i></a>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>