<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

// Подключаем модуль highloadblock
if (!\Bitrix\Main\Loader::includeModule('highloadblock')) {
    die('Модуль Highload-блоков не подключен');
}
// ID вашего Highload-блока
$hlblockId = 4; // Укажите ID вашего Highload-блока

// Получаем информацию о Highload-блоке
$hlblock = HL\HighloadBlockTable::getById($hlblockId)->fetch();

if (!$hlblock) {
    die('Highload-блок не найден');
}

// Получаем сущность для работы с Highload-блоком
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entityClass = $entity->getDataClass();

// Запрос к таблице Highload-блока
$rsData = $entityClass::getList([
    'select' => ['*'], // Выбираем все поля
    'filter' => [],    // Добавьте фильтры, если необходимо
    'order' => ['ID' => 'ASC'], // Указываем сортировку

]);

?>

    <!--    <ul class="breadcrumbs" data-aos="fade-right" data-aos-delay="0">-->
    <!--        <li><a href="index.html">Главная</a></li>-->
    <!--        <li><span>Доставка</span></li>-->
    <!--    </ul>-->
<?php
$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
    "START_FROM" => "0",
    "PATH" => "",
    "SITE_ID" => "-",
),
    false
); ?>
    <div class="top__wrap-2">
        <h1 class="top__title-2 top__title-2_v1" data-aos="fade-right" data-aos-delay="50"><strong>Доставка товаров</strong> для промышленного земледелия по всему Казахстану</h1>
    </div>
    <div class="delivery" id="delivery">
        <div class="box-1 delivery__box-1" data-aos="fade-right" data-aos-delay="100"><i><img src="<?= SITE_TEMPLATE_PATH ?>/img/delivery/icon-0.svg" width="41" height="41" alt=""></i>
            <p>Получите расчет сроков и стоимости доставки в любой город Казахстана с тарифом на каждую категорию посылок, ценами и сроками доставки</p>
        </div>
        <div class="delivery__wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="delivery__row-1">
                <div class="delivery__col-1-1">
                    <label class="form__label">Область</label>
                    <div class="form__box-select form__box-select_region">
                        <select class="form__select js-select-delivery-1" name="region">
                            <?php
                            while ($row = $rsData->fetch()) {
                                ?>
                                <option value="<?= $row['UF_ID'] ?>"><?= $row['UF_NAME'] ?></option>
                                <?php
                            }
                            ?>
                            <!--                            <option value="3">Актюбинская область</option>-->
                            <!--                            <option value="4">Алматинская область</option>-->
                            <!--                            <option value="5">Атырауская область</option>-->
                            <!--                            <option value="6">Восточно-Казахстанская область</option>-->
                            <!--                            <option value="7">Жамбыльская область</option>-->
                            <!--                            <option value="8">Западно-Казахстанская область</option>-->
                            <!--                            <option value="9">Карагандинская область</option>-->
                            <!--                            <option value="10">Костанайская область</option>-->
                            <!--                            <option value="11">Кызылординская область</option>-->
                            <!--                            <option value="12">Мангистауская область</option>-->
                            <!--                            <option value="13">Павлодарская область</option>-->
                            <!--                            <option value="14">Северо-Казахстанская область</option>-->
                            <!--                            <option value="15">Туркестанская область</option>-->
                            <!--                            <option value="16">Абайская область</option>-->
                            <!--                            <option value="17">Жетысуская область</option>-->
                            <!--                            <option value="18">Улытауская область</option>-->
                        </select>
                    </div>
                </div>
                <div class="delivery__col-1-1">
                    <label class="form__label">Город</label>
                    <div class="form__box-select form__box-select_city">
                        <select class="form__select js-select-delivery-2" name="city">
                            <option value="0">Астана</option>
                            <option value="1">Алматы</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="delivery__block js-delivery-wrapper">
                <!--Астана-->
                <div class="delivery__items js-delivery-item" data-id="0">
                    <div class="delivery__item">
                        <div class="delivery__col-2-0">
                            <div class="delivery__logo"><img src="<?= SITE_TEMPLATE_PATH ?>/img/delivery/logo-1.png" width="150" height="18" alt=""></div>
                            <span class="delivery__name">Астана</span>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">до 14 кг:</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>7-10 рабочих дней</p>
                                    </li>
                                    <li>
                                        <p>1200 - 3000 тенге</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Доставка осуществляется до отделения казпочты. Оплата доставки принимается вместе с оплатой за заказ.</p>
                                </div>
                            </div>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">от 14 до 200 кг</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>7-10 рабочих дней</p>
                                    </li>
                                    <li>
                                        <p>Средняя стоимость за 1 кг до 137 тенге</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Доставка осуществляется до отделения казпочты либо до сортировочного центра. Оплата доставки принимается вместе с оплатой за заказ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivery__item">
                        <div class="delivery__col-2-0">
                            <div class="delivery__logo"><img src="<?= SITE_TEMPLATE_PATH ?>/img/delivery/logo-2.png" width="210" height="69" alt=""></div>
                            <span class="delivery__name">Астана</span>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">до 5 кг:</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>5-10 рабочих дней</p>
                                    </li>
                                    <li>
                                        <p>3200 тенге</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Доставка осуществляется до склада Транспортной компании: г. Нур-Султан, пр. Аль-Фараби, д. 89, либо до адреса по желанию покупателя (добавляется к стоимости доставки)</p>
                                </div>
                            </div>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">от 5 до 500 кг</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>5-10 рабочих дней</p>
                                    </li>
                                    <li>
                                        <p>Стоимость доставки просчитывается индивидуально</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Доставка осуществляется до склада Транспортной компании: г. Нур-Султан, пр. Аль-Фараби, д. 89, либо до адреса по желанию покупателя (добавляется к стоимости доставки)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivery__item">
                        <div class="delivery__col-2-0">
                            <div class="delivery__logo"><img src="<?= SITE_TEMPLATE_PATH ?>/img/delivery/logo-3.png" width="150" height="34" alt=""></div>
                            <span class="delivery__name">Астана</span>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">до 10 кг:</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>2 суток</p>
                                    </li>
                                    <li>
                                        <p>2000 - 3000 тенге</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Доставка осуществляется 2 раза в неделю через проводника поезда</p>
                                </div>
                            </div>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">От 5 до 100 кг</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>2 суток</p>
                                    </li>
                                    <li>
                                        <p>Стоимость доставки просчитывается индивидуально</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Доставка осуществляется 2 раза в неделю через проводника поезда</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivery__item">
                        <div class="delivery__col-2-0"><span class="delivery__name">Астана. Доставка большегрузным транспортом</span></div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">до 10 кг:</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>2 суток</p>
                                    </li>
                                    <li>
                                        <p>1000 - 2000 тенге</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Прибытие на Шанхай</p>
                                </div>
                            </div>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">От 10 до 1000 кг</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>2 суток</p>
                                    </li>
                                    <li>
                                        <p>Стоимость доставки просчитывается индивидуально</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Прибытие на Шанхай</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="delivery__item">
                        <div class="delivery__col-2-0"><span class="delivery__name">Астана. Доставка груза автобусом</span></div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">до 10 кг:</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>2 суток</p>
                                    </li>
                                    <li>
                                        <p>2000 - 3000 тенге</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Прибытие на автовокзал Шанхай</p>
                                </div>
                            </div>
                        </div>
                        <div class="delivery__col-2-1">
                            <div class="delivery__box"><span class="delivery__label">От 10 до 300 кг</span>
                                <ul class="delivery__list">
                                    <li>
                                        <p>2 суток</p>
                                    </li>
                                    <li>
                                        <p>Стоимость доставки просчитывается индивидуально</p>
                                    </li>
                                </ul>
                                <div class="delivery__txt">
                                    <p>Прибытие на автовокзал Шанхай</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery__bottom">
                <div class="delivery__btns"><a class="btn2 btn2_big" href="#modal-delivery-special" data-fancybox-modal><span>Особенности доставки</span></a></div>
                <div class="delivery__sub">Стоимость и сроки доставки указаны приблизительно и&nbsp;могут варьироваться в зависимости от грузоперевозчиков, веса, габаритов и адреса доставки</div>
            </div>
        </div>
    </div>
    </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>