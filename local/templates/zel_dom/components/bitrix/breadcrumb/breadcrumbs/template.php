<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
//$css = $APPLICATION->GetCSSArray();
//if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
//{
//	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
//}

$strReturn .= '<ul class="breadcrumbs" data-aos="fade-right" data-aos-delay="0">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
        if ($title == 'Главная страница') {
            $title = 'Главная';
        }
		$strReturn .= '
			 <li >
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" >
					<span itemprop="name" style="border-bottom: none;">'.$title.'</span>
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			  <li>
				'.$arrow.'
				<span>'.$title.'</span>
			</li>';
	}
}

$strReturn .= ' </ul>';

return $strReturn;
