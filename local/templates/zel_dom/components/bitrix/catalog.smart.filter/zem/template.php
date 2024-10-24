<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/colors.css',
	'TEMPLATE_CLASS' => 'bx-'.$arParams['TEMPLATE_THEME']
);

if (isset($templateData['TEMPLATE_THEME']))
{
	$this->addExternalCss($templateData['TEMPLATE_THEME']);
}
//$this->addExternalCss("/bitrix/css/main/bootstrap.css");
//$this->addExternalCss("/bitrix/css/main/font-awesome.css");
?>
<div class="catalog__filters" data-aos="fade-right" data-aos-delay="100">
    <div class="filters" id="filters"><a class="filters__mobile-collapse" id="filters-mobile-collapse" href="#">
            Показать Фильтры<svg width="10" height="5" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/dropdown-1.svg#q"></use></svg></a>
        <div class="filters__wrapper" id="filters-mobile-wrapper">
            <div class="filters__head"><span class="filters__title">Фильтры</span>
                <button class="filters__clear btn3" type="button">Сбросить все<i class="btn3__icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 10L2 2M10 2L2 10" stroke-width="1.5" stroke-linecap="round" /></svg></i></button>
            </div>
            <div class="filters__box filters__box_first"><span class="filters__header"><span>Семена овощей</span></span>
                <div class="filters__checkboxes">
                    <label class="filters__checkbox">
                        <input type="checkbox" name="type-0[]" value="Семена томатов"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Семена томатов<i>46</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="type-0[]" value="Семена огурца"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Семена огурца<i>12</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="type-0[]" value="Семена арбуза"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Семена арбуза<i>120</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="type-0[]" value="Семена дыни"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Семена дыни<i>39</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="type-0[]" value="Семена лука"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Семена лука<i>39</i></span>
                    </label>
                </div>
            </div>
            <div class="filters__prices"><span class="filters__header">Цена (₸)</span>
                <div class="filters__prices-box"><span class="filters__prices-s">от</span>
                    <input class="filters__prices-inp" id="filters-prices-min" type="text" name="price-min" inputmode="numeric" placeholder="0" value="220">
                </div>
                <div class="filters__prices-box"><span class="filters__prices-s">до</span>
                    <input class="filters__prices-inp" id="filters-prices-max" type="text" name="price-max" inputmode="numeric" placeholder="100000" value="1000000">
                </div>
                <div class="filters__prices-scale">
                    <div class="scale-slider" id="filters-prices-scale" data-min="220" data-max="1000000"></div>
                </div>
            </div>
            <div class="filters__brands"><span class="filters__header">Производитель</span>
                <div class="filters__search">
                    <input class="filters__search-inp" type="text" name="brand" placeholder="Поиск">
                    <button class="filters__search-btn" type="button"><svg width="30" height="30" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/zoom.svg#q"></use></svg></button>
                </div>
                <div class="filters__checkboxes">
                    <label class="filters__checkbox">
                        <input type="checkbox" name="brand[]" value="Apollo seeds"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Apollo seeds<i>46</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="brand[]" value="Avalon"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Avalon<i>12</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="brand[]" value="Bejo"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Bejo<i>120</i></span>
                    </label>
                    <label class="filters__checkbox">
                        <input type="checkbox" name="brand[]" value="Clause"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Clause<i>39</i></span>
                    </label>
                    <div class="filters__checkboxes-hide" id="filters-brands-wrapper">
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Apollo seeds"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Apollo seeds<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Avalon"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Avalon<i>12</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Bejo"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Bejo<i>120</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Clause"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Clause<i>39</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Apollo seeds"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Apollo seeds<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Avalon"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Avalon<i>12</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Bejo"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Bejo<i>120</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Clause"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Clause<i>39</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Apollo seeds"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Apollo seeds<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Avalon"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Avalon<i>12</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Bejo"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Bejo<i>120</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="brand[]" value="Clause"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Clause<i>39</i></span>
                        </label>
                    </div>
                </div><a class="filters__more" id="filters-brands-collapse" href="#"><span>Показать все</span><svg width="10" height="5" xmlns="http://www.w3.org/2000/svg"><use xlink:href="img/svg/dropdown-1.svg#q"></use></svg></a>
            </div>
            <div class="filters__box js-filters-collapse"><span class="filters__header filters__box-label js-filters-collapse-link"><span>Гибрид / Сорт</span></span>
                <div class="filters__box-wrap js-filters-collapse-wrap">
                    <div class="filters__checkboxes">
                        <label class="filters__radio">
                            <input type="radio" name="type-1" value="Гибридный"><span class="filters__radio-check"></span><span class="filters__radio-txt">Гибридный<i>950</i></span>
                        </label>
                        <label class="filters__radio">
                            <input type="radio" name="type-1" value="Сортовой"><span class="filters__radio-check"></span><span class="filters__radio-txt">Сортовой<i>46</i></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="filters__box js-filters-collapse"><span class="filters__header filters__box-label js-filters-collapse-link"><span>Срок созревания</span></span>
                <div class="filters__box-wrap js-filters-collapse-wrap">
                    <div class="filters__checkboxes">
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-2[]" value="Ультраранние сорта"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Ультраранние сорта<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-2[]" value="Раннеспелые сорта"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Раннеспелые сорта<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-2[]" value="Среднеранние сорта"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Среднеранние сорта<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-2[]" value="Среднеспелые сорта"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Среднеспелые сорта<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-2[]" value="Среднепоздние сорта"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Среднепоздние сорта<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-2[]" value="Позднеспелые сорта"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Позднеспелые сорта<i>354</i></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="filters__box js-filters-collapse"><span class="filters__header filters__box-label js-filters-collapse-link"><span>Вес плода</span></span>
                <div class="filters__box-wrap js-filters-collapse-wrap">
                    <div class="filters__checkboxes">
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-3[]" value="Небольшой (7 — 10 кг)"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Небольшой (7 — 10 кг)<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-3[]" value="Средний (11 — 14 кг)"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Средний (11 — 14 кг)<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-3[]" value="Крупный (15 кг и выше)"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Крупный (15 кг и выше)<i>950</i></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="filters__box js-filters-collapse"><span class="filters__header filters__box-label js-filters-collapse-link"><span>Форма плода</span></span>
                <div class="filters__box-wrap js-filters-collapse-wrap">
                    <div class="filters__checkboxes">
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-4[]" value="Тыквина"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Тыквина<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-4[]" value="Шаровидный"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Шаровидный<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-4[]" value="Овальный"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Овальный<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-4[]" value="Уплощенный"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Уплощенный<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-4[]" value="Цилиндрический"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Цилиндрический<i>950</i></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="filters__box js-filters-collapse"><span class="filters__header filters__box-label js-filters-collapse-link"><span>Окраска</span></span>
                <div class="filters__box-wrap js-filters-collapse-wrap">
                    <div class="filters__checkboxes">
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-5[]" value="Желтая"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Желтая<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-5[]" value="Красная"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Красная<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-5[]" value="Оранжевая"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">Оранжевая<i>950</i></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="filters__box js-filters-collapse"><span class="filters__header filters__box-label js-filters-collapse-link"><span>Фасовка, грамм</span></span>
                <div class="filters__box-wrap js-filters-collapse-wrap">
                    <div class="filters__checkboxes">
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-6[]" value="100 гр"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">100 гр<i>950</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-6[]" value="500 гр"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">500 гр<i>46</i></span>
                        </label>
                        <label class="filters__checkbox">
                            <input type="checkbox" name="type-6[]" value="1 кг"><span class="filters__checkbox-check"></span><span class="filters__checkbox-txt">1 кг<i>950</i></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog__support mobile-hidden">
        <div class="catalog__support-icon"><img src="img/svg/support-service.svg" width="45" height="45" alt=""></div>
        <div class="catalog__support-head"><i><img src="img/catalog/photo.png" width="136" height="180" alt=""></i>
            <div><strong>Закутний Владислав</strong><small>менеджер интернет-<wbr>магазина «Земледел»</small></div>
        </div>
        <div class="catalog__support-txt">Вы можете купить промышленные семена овощей в интернет-магазине «Земледел», <strong>оформив заказ на сайте, либо позвонив или написав менеджеру.</strong></div>
        <div class="catalog__support-footer"><a class="catalog__support-phone" href="tel:+77772089955">+7 (777) <strong>208-99-55</strong></a>
            <div class="catalog__support-socials">
                <ul class="socials">
                    <li><a class="socials__link" href="https://wa.me/77772089955" target="_blank" rel="noopener noreferrer"><img src="img/svg/whatsapp-2.svg" width="57" height="57" alt="WhatsApp"></a></li>
                    <li><a class="socials__link" href="https://t.me/+77772089955" target="_blank" rel="noopener noreferrer"><img src="img/svg/telegram-2.svg" width="57" height="57" alt="Telegram"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bx-filter <?=$templateData["TEMPLATE_CLASS"]?> <?if ($arParams["FILTER_VIEW_MODE"] == "HORIZONTAL") echo "bx-filter-horizontal"?>" style="display: none">
	<div class="bx-filter-section container-fluid">
		<div class="row"><div class="<?if ($arParams["FILTER_VIEW_MODE"] == "HORIZONTAL"):?>col-sm-6 col-md-4<?else:?>col-lg-12<?endif?> bx-filter-title"><?echo GetMessage("CT_BCSF_FILTER_TITLE")?></div></div>
		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;?>
			<div class="row">
				<?foreach($arResult["ITEMS"] as $key=>$arItem)//prices
				{
					$key = $arItem["ENCODED_ID"];
					if(isset($arItem["PRICE"])):
						if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
							continue;

						$precision = 0;
						$step_num = 4;
						$step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / $step_num;
						$prices = array();
						if (Bitrix\Main\Loader::includeModule("currency"))
						{
							for ($i = 0; $i < $step_num; $i++)
							{
								$prices[$i] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MIN"]["VALUE"] + $step*$i, $arItem["VALUES"]["MIN"]["CURRENCY"], false);
							}
							$prices[$step_num] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MAX"]["VALUE"], $arItem["VALUES"]["MAX"]["CURRENCY"], false);
						}
						else
						{
							$precision = $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0;
							for ($i = 0; $i < $step_num; $i++)
							{
								$prices[$i] = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step*$i, $precision, ".", "");
							}
							$prices[$step_num] = number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "");
						}
						?>
						<div class="<?if ($arParams["FILTER_VIEW_MODE"] == "HORIZONTAL"):?>col-sm-6 col-md-4<?else:?>col-lg-12<?endif?> bx-filter-parameters-box bx-active">
							<span class="bx-filter-container-modef"></span>
							<div class="bx-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)"><span><?=$arItem["NAME"]?> <i data-role="prop_angle" class="fa fa-angle-<?if (isset($arItem["DISPLAY_EXPANDED"]) && $arItem["DISPLAY_EXPANDED"] == "Y"):?>up<?else:?>down<?endif?>"></i></span></div>
							<div class="bx-filter-block" data-role="bx_filter_block">
								<div class="row bx-filter-parameters-box-container">
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_FROM")?></i>
										<div class="bx-filter-input-container">
											<input
												class="min-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_TO")?></i>
										<div class="bx-filter-input-container">
											<input
												class="max-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>

									<div class="col-xs-10 col-xs-offset-1 bx-ui-slider-track-container">
										<div class="bx-ui-slider-track" id="drag_track_<?=$key?>">
											<?for($i = 0; $i <= $step_num; $i++):?>
											<div class="bx-ui-slider-part p<?=$i+1?>"><span><?=$prices[$i]?></span></div>
											<?endfor;?>

											<div class="bx-ui-slider-pricebar-vd" style="left: 0;right: 0;" id="colorUnavailableActive_<?=$key?>"></div>
											<div class="bx-ui-slider-pricebar-vn" style="left: 0;right: 0;" id="colorAvailableInactive_<?=$key?>"></div>
											<div class="bx-ui-slider-pricebar-v"  style="left: 0;right: 0;" id="colorAvailableActive_<?=$key?>"></div>
											<div class="bx-ui-slider-range" id="drag_tracker_<?=$key?>"  style="left: 0%; right: 0%;">
												<a class="bx-ui-slider-handle left"  style="left:0;" href="javascript:void(0)" id="left_slider_<?=$key?>"></a>
												<a class="bx-ui-slider-handle right" style="right:0;" href="javascript:void(0)" id="right_slider_<?=$key?>"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?
						$arJsParams = array(
							"leftSlider" => 'left_slider_'.$key,
							"rightSlider" => 'right_slider_'.$key,
							"tracker" => "drag_tracker_".$key,
							"trackerWrap" => "drag_track_".$key,
							"minInputId" => $arItem["VALUES"]["MIN"]["CONTROL_ID"],
							"maxInputId" => $arItem["VALUES"]["MAX"]["CONTROL_ID"],
							"minPrice" => $arItem["VALUES"]["MIN"]["VALUE"],
							"maxPrice" => $arItem["VALUES"]["MAX"]["VALUE"],
							"curMinPrice" => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
							"curMaxPrice" => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
							"fltMinPrice" => intval($arItem["VALUES"]["MIN"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MIN"]["FILTERED_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"] ,
							"fltMaxPrice" => intval($arItem["VALUES"]["MAX"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MAX"]["FILTERED_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"],
							"precision" => $precision,
							"colorUnavailableActive" => 'colorUnavailableActive_'.$key,
							"colorAvailableActive" => 'colorAvailableActive_'.$key,
							"colorAvailableInactive" => 'colorAvailableInactive_'.$key,
						);
						?>
						<script>
							BX.ready(function(){
								window['trackBar<?=$key?>'] = new BX.Iblock.SmartFilter(<?=CUtil::PhpToJSObject($arJsParams)?>);
							});
						</script>
					<?endif;
				}

				//not prices
				foreach($arResult["ITEMS"] as $key=>$arItem)
				{
					if(
						empty($arItem["VALUES"])
						|| isset($arItem["PRICE"])
					)
						continue;

					if (
						$arItem["DISPLAY_TYPE"] === SectionPropertyTable::NUMBERS_WITH_SLIDER
						&& ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
					)
						continue;
					?>
					<div class="<?if ($arParams["FILTER_VIEW_MODE"] == "HORIZONTAL"):?>col-sm-6 col-md-4<?else:?>col-lg-12<?endif?> bx-filter-parameters-box <?if ($arItem["DISPLAY_EXPANDED"]== "Y"):?>bx-active<?endif?>">
						<span class="bx-filter-container-modef"></span>
						<div class="bx-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)">
							<span class="bx-filter-parameters-box-hint"><?=$arItem["NAME"]?>
								<?if ($arItem["FILTER_HINT"] <> ""):?>
									<i id="item_title_hint_<?echo $arItem["ID"]?>" class="fa fa-question-circle"></i>
									<script>
										new top.BX.CHint({
											parent: top.BX("item_title_hint_<?echo $arItem["ID"]?>"),
											show_timeout: 10,
											hide_timeout: 200,
											dx: 2,
											preventHide: true,
											min_width: 250,
											hint: '<?= CUtil::JSEscape($arItem["FILTER_HINT"])?>'
										});
									</script>
								<?endif?>
								<i data-role="prop_angle" class="fa fa-angle-<?if ($arItem["DISPLAY_EXPANDED"]== "Y"):?>up<?else:?>down<?endif?>"></i>
							</span>
						</div>

						<div class="bx-filter-block" data-role="bx_filter_block">
							<div class="row bx-filter-parameters-box-container">
							<?
							$arCur = current($arItem["VALUES"]);
							switch ($arItem["DISPLAY_TYPE"])
							{
								case SectionPropertyTable::NUMBERS_WITH_SLIDER://NUMBERS_WITH_SLIDER
									?>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_FROM")?></i>
										<div class="bx-filter-input-container">
											<input
												class="min-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_TO")?></i>
										<div class="bx-filter-input-container">
											<input
												class="max-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
											/>
										</div>
									</div>

									<div class="col-xs-10 col-xs-offset-1 bx-ui-slider-track-container">
										<div class="bx-ui-slider-track" id="drag_track_<?=$key?>">
											<?
											$precision = $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0;
											$step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / 4;
											$value1 = number_format($arItem["VALUES"]["MIN"]["VALUE"], $precision, ".", "");
											$value2 = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step, $precision, ".", "");
											$value3 = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step * 2, $precision, ".", "");
											$value4 = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step * 3, $precision, ".", "");
											$value5 = number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "");
											?>
											<div class="bx-ui-slider-part p1"><span><?=$value1?></span></div>
											<div class="bx-ui-slider-part p2"><span><?=$value2?></span></div>
											<div class="bx-ui-slider-part p3"><span><?=$value3?></span></div>
											<div class="bx-ui-slider-part p4"><span><?=$value4?></span></div>
											<div class="bx-ui-slider-part p5"><span><?=$value5?></span></div>

											<div class="bx-ui-slider-pricebar-vd" style="left: 0;right: 0;" id="colorUnavailableActive_<?=$key?>"></div>
											<div class="bx-ui-slider-pricebar-vn" style="left: 0;right: 0;" id="colorAvailableInactive_<?=$key?>"></div>
											<div class="bx-ui-slider-pricebar-v"  style="left: 0;right: 0;" id="colorAvailableActive_<?=$key?>"></div>
											<div class="bx-ui-slider-range" 	id="drag_tracker_<?=$key?>"  style="left: 0;right: 0;">
												<a class="bx-ui-slider-handle left"  style="left:0;" href="javascript:void(0)" id="left_slider_<?=$key?>"></a>
												<a class="bx-ui-slider-handle right" style="right:0;" href="javascript:void(0)" id="right_slider_<?=$key?>"></a>
											</div>
										</div>
									</div>
									<?
									$arJsParams = array(
										"leftSlider" => 'left_slider_'.$key,
										"rightSlider" => 'right_slider_'.$key,
										"tracker" => "drag_tracker_".$key,
										"trackerWrap" => "drag_track_".$key,
										"minInputId" => $arItem["VALUES"]["MIN"]["CONTROL_ID"],
										"maxInputId" => $arItem["VALUES"]["MAX"]["CONTROL_ID"],
										"minPrice" => $arItem["VALUES"]["MIN"]["VALUE"],
										"maxPrice" => $arItem["VALUES"]["MAX"]["VALUE"],
										"curMinPrice" => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
										"curMaxPrice" => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
										"fltMinPrice" => intval($arItem["VALUES"]["MIN"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MIN"]["FILTERED_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"] ,
										"fltMaxPrice" => intval($arItem["VALUES"]["MAX"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MAX"]["FILTERED_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"],
										"precision" => $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0,
										"colorUnavailableActive" => 'colorUnavailableActive_'.$key,
										"colorAvailableActive" => 'colorAvailableActive_'.$key,
										"colorAvailableInactive" => 'colorAvailableInactive_'.$key,
									);
									?>
									<script>
										BX.ready(function(){
											window['trackBar<?=$key?>'] = new BX.Iblock.SmartFilter(<?=CUtil::PhpToJSObject($arJsParams)?>);
										});
									</script>
									<?
									break;
								case SectionPropertyTable::NUMBERS://NUMBERS
									?>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_FROM")?></i>
										<div class="bx-filter-input-container">
											<input
												class="min-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
												/>
										</div>
									</div>
									<div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
										<i class="bx-ft-sub"><?=GetMessage("CT_BCSF_FILTER_TO")?></i>
										<div class="bx-filter-input-container">
											<input
												class="max-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
												/>
										</div>
									</div>
									<?
									break;
								case SectionPropertyTable::CHECKBOXES_WITH_PICTURES://CHECKBOXES_WITH_PICTURES
									?>
									<div class="col-xs-12">
										<div class="bx-filter-param-btn-inline">
										<?foreach ($arItem["VALUES"] as $val => $ar):?>
											<input
												style="display: none"
												type="checkbox"
												name="<?=$ar["CONTROL_NAME"]?>"
												id="<?=$ar["CONTROL_ID"]?>"
												value="<?=$ar["HTML_VALUE"]?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
											/>
											<?
											$class = "";
											if ($ar["CHECKED"])
												$class.= " bx-active";
											if ($ar["DISABLED"])
												$class.= " disabled";
											?>
											<label for="<?=$ar["CONTROL_ID"]?>" data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label <?=$class?>" onclick="smartFilter.keyup(BX('<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')); BX.toggleClass(this, 'bx-active');">
												<span class="bx-filter-param-btn bx-color-sl">
													<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
													<span class="bx-filter-btn-color-icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
													<?endif?>
												</span>
											</label>
										<?endforeach?>
										</div>
									</div>
									<?
									break;
								case SectionPropertyTable::CHECKBOXES_WITH_PICTURES_AND_LABELS://CHECKBOXES_WITH_PICTURES_AND_LABELS
									?>
									<div class="col-xs-12">
										<div class="bx-filter-param-btn-block">
										<?foreach ($arItem["VALUES"] as $val => $ar):?>
											<input
												style="display: none"
												type="checkbox"
												name="<?=$ar["CONTROL_NAME"]?>"
												id="<?=$ar["CONTROL_ID"]?>"
												value="<?=$ar["HTML_VALUE"]?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
											/>
											<?
											$class = "";
											if ($ar["CHECKED"])
												$class.= " bx-active";
											if ($ar["DISABLED"])
												$class.= " disabled";
											?>
											<label for="<?=$ar["CONTROL_ID"]?>" data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label<?=$class?>" onclick="smartFilter.keyup(BX('<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')); BX.toggleClass(this, 'bx-active');">
												<span class="bx-filter-param-btn bx-color-sl">
													<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
														<span class="bx-filter-btn-color-icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
													<?endif?>
												</span>
												<span class="bx-filter-param-text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
												if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
													?> (<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
												endif;?></span>
											</label>
										<?endforeach?>
										</div>
									</div>
									<?
									break;
								case SectionPropertyTable::DROPDOWN://DROPDOWN
									$checkedItemExist = false;
									?>
									<div class="col-xs-12">
										<div class="bx-filter-select-container">
											<div class="bx-filter-select-block" onclick="smartFilter.showDropDownPopup(this, '<?=CUtil::JSEscape($key)?>')">
												<div class="bx-filter-select-text" data-role="currentOption">
													<?
													foreach ($arItem["VALUES"] as $val => $ar)
													{
														if ($ar["CHECKED"])
														{
															echo $ar["VALUE"];
															$checkedItemExist = true;
														}
													}
													if (!$checkedItemExist)
													{
														echo GetMessage("CT_BCSF_FILTER_ALL");
													}
													?>
												</div>
												<div class="bx-filter-select-arrow"></div>
												<input
													style="display: none"
													type="radio"
													name="<?=$arCur["CONTROL_NAME_ALT"]?>"
													id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
													value=""
												/>
												<?foreach ($arItem["VALUES"] as $val => $ar):?>
													<input
														style="display: none"
														type="radio"
														name="<?=$ar["CONTROL_NAME_ALT"]?>"
														id="<?=$ar["CONTROL_ID"]?>"
														value="<? echo $ar["HTML_VALUE_ALT"] ?>"
														<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
													/>
												<?endforeach?>
												<div class="bx-filter-select-popup" data-role="dropdownContent" style="display: none;">
													<ul>
														<li>
															<label for="<?="all_".$arCur["CONTROL_ID"]?>" class="bx-filter-param-label" data-role="label_<?="all_".$arCur["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape("all_".$arCur["CONTROL_ID"])?>')">
																<? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
															</label>
														</li>
													<?
													foreach ($arItem["VALUES"] as $val => $ar):
														$class = "";
														if ($ar["CHECKED"])
															$class.= " selected";
														if ($ar["DISABLED"])
															$class.= " disabled";
													?>
														<li>
															<label for="<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label<?=$class?>" data-role="label_<?=$ar["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')"><?=$ar["VALUE"]?></label>
														</li>
													<?endforeach?>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<?
									break;
								case SectionPropertyTable::DROPDOWN_WITH_PICTURES_AND_LABELS://DROPDOWN_WITH_PICTURES_AND_LABELS
									?>
									<div class="col-xs-12">
										<div class="bx-filter-select-container">
											<div class="bx-filter-select-block" onclick="smartFilter.showDropDownPopup(this, '<?=CUtil::JSEscape($key)?>')">
												<div class="bx-filter-select-text fix" data-role="currentOption">
													<?
													$checkedItemExist = false;
													foreach ($arItem["VALUES"] as $val => $ar):
														if ($ar["CHECKED"])
														{
														?>
															<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
																<span class="bx-filter-btn-color-icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
															<?endif?>
															<span class="bx-filter-param-text">
																<?=$ar["VALUE"]?>
															</span>
														<?
															$checkedItemExist = true;
														}
													endforeach;
													if (!$checkedItemExist)
													{
														?><span class="bx-filter-btn-color-icon all"></span> <?
														echo GetMessage("CT_BCSF_FILTER_ALL");
													}
													?>
												</div>
												<div class="bx-filter-select-arrow"></div>
												<input
													style="display: none"
													type="radio"
													name="<?=$arCur["CONTROL_NAME_ALT"]?>"
													id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
													value=""
												/>
												<?foreach ($arItem["VALUES"] as $val => $ar):?>
													<input
														style="display: none"
														type="radio"
														name="<?=$ar["CONTROL_NAME_ALT"]?>"
														id="<?=$ar["CONTROL_ID"]?>"
														value="<?=$ar["HTML_VALUE_ALT"]?>"
														<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
													/>
												<?endforeach?>
												<div class="bx-filter-select-popup" data-role="dropdownContent" style="display: none">
													<ul>
														<li style="border-bottom: 1px solid #e5e5e5;padding-bottom: 5px;margin-bottom: 5px;">
															<label for="<?="all_".$arCur["CONTROL_ID"]?>" class="bx-filter-param-label" data-role="label_<?="all_".$arCur["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape("all_".$arCur["CONTROL_ID"])?>')">
																<span class="bx-filter-btn-color-icon all"></span>
																<? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
															</label>
														</li>
													<?
													foreach ($arItem["VALUES"] as $val => $ar):
														$class = "";
														if ($ar["CHECKED"])
															$class.= " selected";
														if ($ar["DISABLED"])
															$class.= " disabled";
													?>
														<li>
															<label for="<?=$ar["CONTROL_ID"]?>" data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label<?=$class?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')">
																<?if (isset($ar["FILE"]) && !empty($ar["FILE"]["SRC"])):?>
																	<span class="bx-filter-btn-color-icon" style="background-image:url('<?=$ar["FILE"]["SRC"]?>');"></span>
																<?endif?>
																<span class="bx-filter-param-text">
																	<?=$ar["VALUE"]?>
																</span>
															</label>
														</li>
													<?endforeach?>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<?
									break;
								case SectionPropertyTable::RADIO_BUTTONS://RADIO_BUTTONS
									?>
									<div class="col-xs-12">
										<div class="radio">
											<label class="bx-filter-param-label" for="<? echo "all_".$arCur["CONTROL_ID"] ?>">
												<span class="bx-filter-input-checkbox">
													<input
														type="radio"
														value=""
														name="<? echo $arCur["CONTROL_NAME_ALT"] ?>"
														id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
														onclick="smartFilter.click(this)"
													/>
													<span class="bx-filter-param-text"><? echo GetMessage("CT_BCSF_FILTER_ALL"); ?></span>
												</span>
											</label>
										</div>
										<?foreach($arItem["VALUES"] as $val => $ar):?>
											<div class="radio">
												<label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label" for="<? echo $ar["CONTROL_ID"] ?>">
													<span class="bx-filter-input-checkbox <? echo $ar["DISABLED"] ? 'disabled': '' ?>">
														<input
															type="radio"
															value="<? echo $ar["HTML_VALUE_ALT"] ?>"
															name="<? echo $ar["CONTROL_NAME_ALT"] ?>"
															id="<? echo $ar["CONTROL_ID"] ?>"
															<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
															onclick="smartFilter.click(this)"
														/>
														<span class="bx-filter-param-text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
														if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
															?>&nbsp;(<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
														endif;?></span>
													</span>
												</label>
											</div>
										<?endforeach;?>
									</div>
									<?
									break;
								case SectionPropertyTable::CALENDAR://CALENDAR
									?>
									<div class="col-xs-12">
										<div class="bx-filter-parameters-box-container-block"><div class="bx-filter-input-container bx-filter-calendar-container">
											<?$APPLICATION->IncludeComponent(
												'bitrix:main.calendar',
												'',
												array(
													'FORM_NAME' => $arResult["FILTER_NAME"]."_form",
													'SHOW_INPUT' => 'Y',
													'INPUT_ADDITIONAL_ATTR' => 'class="calendar" placeholder="'.FormatDate("SHORT", $arItem["VALUES"]["MIN"]["VALUE"]).'" onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
													'INPUT_NAME' => $arItem["VALUES"]["MIN"]["CONTROL_NAME"],
													'INPUT_VALUE' => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
													'SHOW_TIME' => 'N',
													'HIDE_TIMEBAR' => 'Y',
												),
												null,
												array('HIDE_ICONS' => 'Y')
											);?>
										</div></div>
										<div class="bx-filter-parameters-box-container-block"><div class="bx-filter-input-container bx-filter-calendar-container">
											<?$APPLICATION->IncludeComponent(
												'bitrix:main.calendar',
												'',
												array(
													'FORM_NAME' => $arResult["FILTER_NAME"]."_form",
													'SHOW_INPUT' => 'Y',
													'INPUT_ADDITIONAL_ATTR' => 'class="calendar" placeholder="'.FormatDate("SHORT", $arItem["VALUES"]["MAX"]["VALUE"]).'" onkeyup="smartFilter.keyup(this)" onchange="smartFilter.keyup(this)"',
													'INPUT_NAME' => $arItem["VALUES"]["MAX"]["CONTROL_NAME"],
													'INPUT_VALUE' => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
													'SHOW_TIME' => 'N',
													'HIDE_TIMEBAR' => 'Y',
												),
												null,
												array('HIDE_ICONS' => 'Y')
											);?>
										</div></div>
									</div>
									<?
									break;
								default://CHECKBOXES
									?>
									<div class="col-xs-12">
										<?foreach($arItem["VALUES"] as $val => $ar):?>
											<div class="checkbox">
												<label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label <? echo $ar["DISABLED"] ? 'disabled': '' ?>" for="<? echo $ar["CONTROL_ID"] ?>">
													<span class="bx-filter-input-checkbox">
														<input
															type="checkbox"
															value="<? echo $ar["HTML_VALUE"] ?>"
															name="<? echo $ar["CONTROL_NAME"] ?>"
															id="<? echo $ar["CONTROL_ID"] ?>"
															<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
															onclick="smartFilter.click(this)"
														/>
														<span class="bx-filter-param-text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
														if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
															?>&nbsp;(<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
														endif;?></span>
													</span>
												</label>
											</div>
										<?endforeach;?>
									</div>
							<?
							}
							?>
							</div>
							<div style="clear: both"></div>
						</div>
					</div>
				<?
				}
				?>
			</div><!--//row-->
			<div class="row">
				<div class="col-xs-12 bx-filter-button-box">
					<div class="bx-filter-block">
						<div class="bx-filter-parameters-box-container">
							<input
								class="btn btn-themes"
								type="submit"
								id="set_filter"
								name="set_filter"
								value="<?=GetMessage("CT_BCSF_SET_FILTER")?>"
							/>
							<input
								class="btn btn-link"
								type="submit"
								id="del_filter"
								name="del_filter"
								value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
							/>
							<div class="bx-filter-popup-result <?if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
								<?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.(int)($arResult["ELEMENT_COUNT"] ?? 0).'</span>'));?>
								<span class="arrow"></span>
								<br/>
								<a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clb"></div>
		</form>
	</div>
</div>
<script>
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>