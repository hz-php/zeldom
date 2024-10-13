<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <ul class="footer__menu" data-aos="fade-up" data-aos-delay="150" data-aos-offset="0">
    <?php
    foreach ($arResult as $arItem):
        ?>
        <li><a href="<?= $arItem['LINK'] ?>" data-slug="catalog"><?= $arItem['TEXT'] ?></a></li>
    <?php endforeach ?>

    </ul>
<?php endif ?>

