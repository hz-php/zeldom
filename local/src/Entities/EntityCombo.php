<?php

namespace Itprofit\Bitrix\Entities;

use CFile;
use CIBlockElement;


class EntityCombo extends Entity
{

    static function getHtml()
    {
        if ($_REQUEST['size'] == 'mid') {
            $propertyName = 'PROPERTY_COMBO_MIDLE.NAME';
            $propertyValue = 'PROPERTY_COMBO_MIDLE_NAME';

            $propertyImage = 'PROPERTY_COMBO_MIDLE.DETAIL_PICTURE';
            $propertyImageValue = 'PROPERTY_COMBO_MIDLE_DETAIL_PICTURE';

            $propertyPrice = 'PROPERTY_COMBO_MIDLE.PROPERTY_COMBO_PRICE';
            $propertyPriceValue = 'PROPERTY_COMBO_MIDLE_PROPERTY_COMBO_PRICE_VALUE';
        } else {
            $propertyName = 'PROPERTY_COMBO_BIG.NAME';
            $propertyValue = 'PROPERTY_COMBO_BIG_NAME';

            $propertyImage = 'PROPERTY_COMBO_BIG.DETAIL_PICTURE';
            $propertyImageValue = 'PROPERTY_COMBO_BIG_DETAIL_PICTURE';

            $propertyPrice = 'PROPERTY_COMBO_BIG.PROPERTY_COMBO_PRICE_BIG';
            $propertyPriceValue = 'PROPERTY_COMBO_BIG_PROPERTY_COMBO_PRICE_BIG_VALUE';
        }
        $idProducts = [$_REQUEST['burger'], $_REQUEST['fries'], $_REQUEST['drink']];
        $SectList = CIBlockElement::GetList(
            ['IBLOCK_SECTION_ID' => 'ASC'],
            array(
                "IBLOCK_ID" => COMBO_CALC,
                "ACTIVE" => "Y", 'ID' => $idProducts
            ),
            false,
            false,
            array("*", 'PROPERTY_LINK.ID', "$propertyName", "$propertyImage", "$propertyPrice")

        );


        while ($SectListGet = $SectList->GetNext()) {
            $elems[] = $SectListGet;
        }

        $nameDrink = $elems[2][$propertyValue];
        $imageDrink = CFile::GetPath($elems[2]["$propertyImageValue"]);
        $priceDrink = $elems[2]["$propertyPriceValue"];

        $namePot = $elems[1]["$propertyValue"];
        $imagePotato = CFile::GetPath($elems[1]["$propertyImageValue"]);
        $pricePotato = $elems[1]["$propertyPriceValue"];

        $nameBurger = $elems[0]["$propertyValue"];
        $imageBurger = CFile::GetPath($elems[0]["$propertyImageValue"]);
        $priceBurger = $elems[0]["$propertyPriceValue"];



        $totalPrice = $pricePotato + $priceDrink + $priceBurger;
        $totalPrice = number_format($totalPrice, 2, '.', '');
        $arrTotalPrice = explode('.', $totalPrice);
        $ryb = $arrTotalPrice[0];
        $kopecks = $arrTotalPrice[1];
?>
        <div class="combo__result__price">
            <div class="combo__result__price__circle">
            </div>
            <div class="combo__result__price__text">
                <span class="combo__result__price__integer"><?= $ryb ?></span>
                <span class="combo__result__price__float"><?= $kopecks ?></span>
                <span class="combo__result__price__currency">руб.</span>
            </div>
        </div>
        <div class="combo__result__preview">
            <div class="combo__result__preview__item combo__result__preview__item--1">
                <div class="combo__result__preview__img">
                    <img src="<?= $imagePotato ?>" alt="image">
                </div>
            </div>
            <div class="combo__result__preview__item combo__result__preview__item--2">
                <div class="combo__result__preview__img">
                    <img src="<?= $imageDrink ?>" alt="image">
                </div>
            </div>
            <div class="combo__result__preview__item combo__result__preview__item--3">
                <div class="combo__result__preview__img">
                    <img src="<?= $imageBurger ?>" alt="image">
                </div>
            </div>
        </div>
        <div class="combo__result__description js-c-result-ajax">
            <?= $nameBurger . '+' . $namePot . '+' . $nameDrink ?>
        </div>

<?php
    }
}
