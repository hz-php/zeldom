<?php

/**
 * - Класс сущности Торговых предлождений 
 */

namespace Itprofit\Bitrix\Entities;

use CIBlockElement;

class EntityTradeOffer extends Entity
{
    const IBLOCK_CODE = 'TRADEOFFER';

    /**
     * - Получаем все торговые предолежения товара по Id
     * @return self[]
     */
    static function getTradeOfferByIdProducts(int $id): array
    {
        $idTradeOffer = self::getIdTrandeOfferByProductId($id);

        $arSelect = ["ID", 'PROPERTY_TRADE_OFFER', 'NAME', 'PROPERTY_LABEL', 'PROPERTY_TRADE_OFFER.CODE'];
        $arFilter = ["IBLOCK_CODE" => self::IBLOCK_CODE, "ACTIVE" => "Y", 'ID' => $idTradeOffer];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);

        while ($ob = $res->Fetch()) {
            $allOfferProducts[] = self::getByBxData($ob);
        }

        return $allOfferProducts ?? [];
    }

    /**
     * - Получаем Id торгового предложение по id товара
     */
    static function getIdTrandeOfferByProductId(int $id): int
    {
        $arSelect = ["ID", "NAME", '*', 'PROPERTY_TRADE_OFFER.NAME'];
        $arFilter = ["IBLOCK_CODE" => self::IBLOCK_CODE, "ACTIVE" => "Y", 'PROPERTY_TRADE_OFFER' => $id];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        if ($ob = $res->GetNextElement()) {
            $idTradeOffer = $ob->GetFields()['ID'];
        }

        return $idTradeOffer ?? 0;
    }



        /**
     * - Получаем все торговые предолежения Мобильного ресторна товара по Id
     * @return self[]
     */
    static function getTradeOfferByIdProductsMobileRest(int $id): array
    {
        $idTradeOffer = self::getIdTrandeOfferByProductIdMobileRest($id);

        $arSelect = ["ID", 'PROPERTY_TRADE_OFFER_MOBILE', 'NAME', 'PROPERTY_LABEL_MOBILE', 'PROPERTY_TRADE_OFFER_MOBILE.CODE'];
        $arFilter = ["IBLOCK_CODE" => self::IBLOCK_CODE, "ACTIVE" => "Y", 'ID' => $idTradeOffer];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);

        while ($ob = $res->Fetch()) {
            $allOfferProducts[] = self::getByBxData($ob);
        }

        return $allOfferProducts ?? [];
    }

    /**
     * - Получаем Id торгового предложение  Мобильного ресторна по id товара
     */
    static function getIdTrandeOfferByProductIdMobileRest(int $id): int
    {
        $arSelect = ["ID", "NAME", '*', 'PROPERTY_TRADE_OFFER_MOBILE.NAME'];
        $arFilter = ["IBLOCK_CODE" => self::IBLOCK_CODE, "ACTIVE" => "Y", 'PROPERTY_TRADE_OFFER_MOBILE' => $id];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        if ($ob = $res->GetNextElement()) {
            $idTradeOffer = $ob->GetFields()['ID'];
        }

        return $idTradeOffer ?? 0;
    }
  
}
