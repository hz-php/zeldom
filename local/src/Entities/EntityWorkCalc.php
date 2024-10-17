<?php

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;


class EntityWorkCalc extends Entity
{

    static function getMaxAndMinHours()
    {

        $arSelect = ['PROPERTY_CHANGE_DAY', 'PROPERTY_CHANGE_NIGHT'];
        $arFilter = ["IBLOCK_ID" => CALC_VACANSII, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", 'CODE' => $_POST['position']];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        if ($ob = $res->GetNext()) {
            $data = $ob;
        }

        $minMax = [];
        if ($_REQUEST['shift'] == 'day') {
            $minMax = explode(';', $data['PROPERTY_CHANGE_DAY_VALUE']);
        } elseif ($_REQUEST['shift'] == 'night') {
            $minMax = explode(';', $data['PROPERTY_CHANGE_NIGHT_VALUE']);
        }
?>
        <div class="calc-form__page__title">
            Сколько рабочих часов<br class='desk'> ты<br class='tab'> планируешь отработать в неделю?
        </div>
        <div class="c-field-wrapper">
            <div class="c-field-wrap">
                <label class="c-input c-field js-c-input js-c-field-hours">
                    <input type="text" class="c-input__field js-c-input__field " autocomplete="on" name="hours" placeholder="Введите количество" data-required data-max-value="<?= $minMax[1] ?>" data-min-value="<?= $minMax[0] ?>">
                    <span class="c-input__error-message alert-input-text"></span>
                </label>
            </div>
        </div>
    <?php
    }


    static function getHtml()
    {
        $kofTime = 168 / 40;
        $arSelect = [
            'PROPERTY_CHANGE_DAY',
            'PROPERTY_CHANGE_NIGHT',
            'PROPERTY_WAY_CALC_VALUE',
            'PROPERTY_PRICE',
            'PROPERTY_PRICE_HOURS',
            'PROPERTY_PRICE_HOURS_REGION',
            'PROPERTY_BONUS',
            'PROPERTY_PRICE_REGION',
            'PROPERTY_PRICE_NIGHT_MINSK',
            'PROPERTY_PRICE_NIGHT_REGION',
            'PROPERTY_SURCHARGE',
            'PROPERTY_PRICE_HOURS_NIGHT_MINSK',
            'PROPERTY_PRICE_HOURS_NIGHT_REGION',
            'PROPERTY_HIDE_TOTAL_SUM',
            'PROPERTY_BONUS_NOT_FULL',
        ];
        $arFilter = ["IBLOCK_ID" => CALC_VACANSII, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", 'CODE' => $_POST['position']];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        while ($ob = $res->GetNext()) {
            $data = $ob;
        }

        //если выбрали тарифную ставку
        if ($data['PROPERTY_WAY_CALC_VALUE_ENUM_ID'] == 49) {
            //определяем тарифную ставку в завимости от города и смены
            if ($_REQUEST['city'] == 'Минск' && $_REQUEST['shift'] == 'day') {
                $tariffStavka = $data['PROPERTY_PRICE_HOURS_VALUE'];
            } elseif ($_REQUEST['city'] == 'Минск' && $_REQUEST['shift'] == 'night') {
                $tariffStavka = $data['PROPERTY_PRICE_HOURS_NIGHT_MINSK_VALUE'];
            } elseif ($_REQUEST['shift'] == 'day') {
                $tariffStavka = $data['PROPERTY_PRICE_HOURS_REGION_VALUE'];
            } elseif ($_REQUEST['shift'] == 'night') {
                $tariffStavka = $data['PROPERTY_PRICE_HOURS_NIGHT_REGION_VALUE'];
            }


            //проверка на максимальное колличество времени можно отработать в неделю
            $maxHours = '';
            if ($_REQUEST['shift'] == 'day') {
                $maxHours = explode(';', $data['PROPERTY_CHANGE_DAY_VALUE']);
            } elseif ($_REQUEST['shift'] == 'night') {
                $maxHours = explode(';', $data['PROPERTY_CHANGE_NIGHT_VALUE']);
            }
            $maxHours = str_replace(',', '.', $maxHours[1]);

            //проверка выплачивания премии
            if ($_REQUEST['hours'] == $maxHours && $_REQUEST['shift'] == 'day') {
                $bonus = $data['PROPERTY_BONUS_VALUE'];
            } elseif ($_REQUEST['hours'] < $maxHours && ($_REQUEST['hours'] * $kofTime) >= 120 && $_REQUEST['shift'] == 'day') {
                $bonus = $data['PROPERTY_BONUS_NOT_FULL_VALUE'];
            } elseif ($_REQUEST['hours'] *$kofTime >= 134.4 && $_REQUEST['hours'] *$kofTime < 154 && $_REQUEST['shift'] == 'night') {
                $bonus = $data['PROPERTY_BONUS_VALUE'];
            } elseif ($_REQUEST['hours'] < $maxHours && ($_REQUEST['hours'] * $kofTime) >= 100 && $_REQUEST['shift'] == 'night') {
                $bonus = $data['PROPERTY_BONUS_NOT_FULL_VALUE'];
            } else {
                $bonus = 0;
            }
         

            if ($_REQUEST['shift'] == 'day') {
                $price =  $_REQUEST['hours'] * $tariffStavka * $kofTime + $bonus;
            } elseif ($_REQUEST['shift'] == 'night') {
                $price =  $_REQUEST['hours'] * $tariffStavka * $kofTime + $_REQUEST['hours'] * $tariffStavka * 0.2 * 0.75 * $kofTime + $bonus;
            }
            $price = number_format($price, 2, '.', '');

            $sumAllTimeWork = $maxHours * $kofTime * $tariffStavka + $data['PROPERTY_BONUS_VALUE'];
            $sumAllTimeWork = number_format($sumAllTimeWork, 2, '.', '');
        } elseif ($data['PROPERTY_WAY_CALC_VALUE_ENUM_ID'] == 50) {
            if ($_REQUEST['city'] == 'Минск') {
                $price = $data['PROPERTY_PRICE_VALUE'];
            } else {
                $price = $data['PROPERTY_PRICE_REGION_VALUE'];
            }
        }


    ?>

        <div class="modal-content--inner">
            <div class="modal-close js-close-modal js-c-close-form" data-target="modal-calc-form">
            </div>

            <div class="c-form calc-form js-c-result-wrap js-c-form js-form-validate" data-c-inited="">
                <div class="calc-form__result">
                    <div class="calc-form__head">
                        <span class="calc-form__result__label">Потенциальный уровень зарплаты</span>
                    </div>
                    <div class="calc-form__result__body">
                        <div class="calc-form__result__info">
                            <div class="calc-form__result__msg">Планируешь отработать <?php if ($_REQUEST['hours']) {
                                                                                            echo $kofTime * $_REQUEST['hours'];
                                                                                        } else {
                                                                                            echo 168;
                                                                                        } ?> часа(ов) в месяц? Твоя заработная плата может составить</div>
                            <div class="calc-form__result__rate">
                                <div class="calc-form__result__rate__value">
                                    <?= $price ?> руб./месяц
                                </div>
                                <div class="calc-form__result__rate__prompt">до вычета налогов</div>
                            </div>
                            <a href='#form_facansii' class="calc-form__result__link btn js-close-modal js-c-close-form" data-target="modal-calc-form">Заполнить анкету</a>
                        </div>
                        <div class="calc-form__result__img">
                            <?php if ($data['PROPERTY_HIDE_TOTAL_SUM_ENUM_ID'] == 53 || empty($data['PROPERTY_HIDE_TOTAL_SUM_ENUM_ID'])) {
                            ?>
                                <div class="calc-form__result__img__cloud">
                                    <div class="calc-form__result__img__cloud__img">
                                        <svg width="285" height="182" viewBox="0 0 285 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m236.454 153.092-.577-.097.081-.488h.496v.585Zm-.301 1.802.577.096-.577-.096Zm-.284 12.247-.577.097.577-.097Zm.949 3.387.543-.217-.543.217Zm.513 1.283-.543.217.543-.217Zm2.791 5.626.501-.301-.501.301Zm.134.223-.468.351-.018-.024-.016-.026.502-.301Zm1.755 2.34.468-.351 1.043 1.391-1.672-.477.161-.563Zm-4.095-1.17-.161.563-.012-.004-.012-.004.185-.555Zm-3.51-1.17-.185.555-.016-.005-.016-.007.217-.543Zm-2.925-1.17-.217.543-.006-.002-.007-.003.23-.538Zm-4.094-1.755-.231.538-.016-.007-.015-.007.262-.524Zm-3.51-1.755-.262.524-.014-.008-.014-.008.29-.508Zm-4.095-2.339-.29.507-.026-.014-.024-.017.34-.476Zm-4.095-2.925-.34.476-.017-.013-.017-.014.374-.449Zm-3.51-2.925-.374.449-.02-.017-.019-.018.413-.414Zm-2.924-2.925-.414.414-.023-.023-.02-.025.457-.366Zm-2.34-2.925-.457.366-.016-.02-.014-.021.487-.325Zm-2.34-3.51-.487.325-.02-.03-.016-.033.523-.262Zm-1.17-2.339v-.585h.361l.162.323-.523.262ZM283.54 46.811c0-25.084-16.872-45.226-37.469-45.226V.415c21.436 0 38.639 20.878 38.639 46.396h-1.17Zm0 60.47v-60.47h1.17v60.47h-1.17Zm-37.469 45.226c20.597 0 37.469-20.142 37.469-45.226h1.17c0 25.517-17.203 46.396-38.639 46.396v-1.17Zm-9.617 0h9.617v1.17h-9.617v-1.17Zm-.87 2.243.293-1.755 1.154.193-.293 1.755-1.154-.193Zm-.008.048.008-.048 1.154.193-.008.047-1.154-.192Zm-.585 7.068c0-2.368.196-4.732.585-7.068l1.154.192a41.8 41.8 0 0 0-.569 6.876h-1.17Zm0 1.762v-1.762h1.17v1.762h-1.17Zm.301 3.61a21.84 21.84 0 0 1-.301-3.61h1.17c0 1.144.095 2.287.285 3.416l-1.154.194Zm.983 3.507a17 17 0 0 1-.983-3.507l1.154-.194c.187 1.119.494 2.214.915 3.267l-1.086.434Zm.513 1.283-.513-1.283 1.086-.434.513 1.282-1.086.435Zm2.832 5.71a39.853 39.853 0 0 1-2.832-5.71l1.086-.435a38.83 38.83 0 0 0 2.749 5.543l-1.003.602Zm.134.223-.134-.223 1.003-.602.135.223-1.004.602Zm1.789 2.39-1.755-2.34.936-.702 1.755 2.34-.936.702Zm-3.466-2.083 4.095 1.17-.322 1.125-4.095-1.17.322-1.125Zm-3.486-1.163 3.51 1.17-.37 1.11-3.51-1.17.37-1.11Zm-2.892-1.158 2.924 1.17-.434 1.086-2.925-1.17.435-1.086Zm-4.082-1.749 4.095 1.755-.461 1.075-4.095-1.755.461-1.075Zm-3.479-1.741 3.51 1.755-.523 1.047-3.51-1.755.523-1.047Zm-4.066-2.324 4.095 2.34-.58 1.015-4.095-2.34.58-1.015Zm-4.045-2.893 4.095 2.925-.68.952-4.095-2.925.68-.952Zm-3.475-2.898 3.51 2.924-.749.899-3.51-2.925.749-.898Zm-2.886-2.89 2.925 2.925-.827.828-2.925-2.925.827-.828Zm-2.296-2.876 2.339 2.925-.913.731-2.34-2.925.914-.731Zm-2.31-3.469 2.339 3.51-.973.649-2.34-3.51.974-.649Zm-1.134-2.277 1.17 2.34-1.046.523-1.17-2.34 1.046-.523Zm-164.871-.323h164.348v1.17H39.055v-1.17Zm-37.47-45.226c0 25.084 16.873 45.226 37.47 45.226v1.17c-21.437 0-38.64-20.879-38.64-46.396h1.17Zm0-60.47v60.47H.416v-60.47h1.17Zm37.47-45.226c-20.597 0-37.47 20.142-37.47 45.226H.416C.416 21.293 17.619.415 39.056.415v1.17Zm207.016 0H39.055V.415h207.016v1.17Z" fill="#333" />
                                        </svg>
                                    </div>
                                    <div class="calc-form__result__img__text">
                                        <div class="calc-form__result__img__prompt" style="text-align:center">
                                            <?php
                                            if ($_REQUEST['shift'] == 'day' && $_REQUEST['city'] == 'Минск') {
                                                $totalSum = $data['PROPERTY_PRICE_VALUE'];
                                            } elseif ($_REQUEST['shift'] == 'night' && $_REQUEST['city'] == 'Минск') {
                                                $totalSum = $data['PROPERTY_PRICE_NIGHT_MINSK_VALUE'];
                                            } elseif ($_REQUEST['shift'] == 'day') {
                                                $totalSum = $data['PROPERTY_PRICE_REGION_VALUE'];
                                            } elseif ($_REQUEST['shift'] == 'night') {
                                                $totalSum = $data['PROPERTY_PRICE_NIGHT_REGION_VALUE'];
                                            }
                                            ?>
                                            <div class="calc-form__result__img__rate">
                                                <?php
                                                echo $totalSum  ?? $price;
                                                ?>
                                                руб/месяц.
                                            </div>
                                            <?php
                                            if ($_REQUEST['position'] == 'restaurant-worker' && $_REQUEST['shift'] == 'day') { ?>


                                                <span>Ты можешь зарабатывать <?= $totalSum ?> руб./месяц до вычета налогов при условии работы по программе полный рабочий день*</span>
                                                <span><a href="#faq" class='faq'>*С условием программы можно ознакомиться в разделе ответы на вопросы</a></span>

                                            <?php
                                            } else {
                                                echo 'Если захочешь работать на Программе работы с полным рабочим временем - твоя зарплата составит';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>
                            <div class="calc-form__result__img__man">
                                <picture>
                                    <source media="(max-width:1023.9px)" srcset="<?= SITE_TEMPLATE_PATH; ?>/front/dist/assets/img/calc-form/calc-form__5__new_md.png">
                                    <img src="<?= SITE_TEMPLATE_PATH; ?>/front/dist/assets/img/calc-form/calc-form__5__new.png" alt="image">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }
}
