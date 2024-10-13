<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
    <li class="menu__item"><a  href="<?=$arItem["LINK"]?>" class="menu__link active"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
    <li class="menu__item"><a class="menu__link " href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>

<?endforeach?>

</ul>
<?endif?>
<!---->
<!--    <li class="menu__item"><a class="menu__link " href="about.html" data-slug="about">О компании</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="garanties.html" data-slug="garanties">Гарантия</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="buy.html" data-slug="buy">Как купить</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="delivery.html" data-slug="delivery">Доставка</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="payments.html" data-slug="payments">Оплата</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="partners.html" data-slug="partners">Партнеры</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="news.html" data-slug="news">Новости</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="blog.html" data-slug="blog">Статьи</a></li>-->
<!--    <li class="menu__item"><a class="menu__link " href="contacts.html" data-slug="contacts">Контакты</a></li>-->
<!--</ul>-->
