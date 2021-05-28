<?php

namespace Rating1C\Darmart\Iblock;

use Rating1C\Darmart\App;
use Rating1C\Darmart\Subscriptions\Subscribe;
use Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class IblockEventHandler {
    public function sendOrderReturnNotice($fields){
        $userFullName = "{$fields['PROPERTY_VALUES'][87]} {$fields['PROPERTY_VALUES'][86]}";
        $userEmail = $fields['PROPERTY_VALUES'][88];
        $userPhone = $fields['PROPERTY_VALUES'][89];

        $orderId = $fields['PROPERTY_VALUES'][90];
        $orderDate = $fields['PROPERTY_VALUES'][91];

        $productName = $fields['PROPERTY_VALUES'][115];
        $productNumber = $fields['PROPERTY_VALUES'][116];

        $reason = \CIBlockPropertyEnum::GetList(
            [],
            ['PROPERTY_ID' => 93, 'ID' => $fields['PROPERTY_VALUES'][93]]
        )->Fetch();

        $isUnpacked = \CIBlockPropertyEnum::GetList(
            [],
            ['PROPERTY_ID' => 94, 'ID' => $fields['PROPERTY_VALUES'][94]]
        )->Fetch();;

        $description = $fields['PROPERTY_VALUES'][95];

        \CEvent::Send('SALE_NEW_ORDER_RETURN', 's1', [
            'USER_FULL_NAME' => $userFullName,
            'USER_EMAIL' => $userEmail,
            'USER_PHONE' => $userPhone,
            'ORDER_ID' => $orderId,
            'ORDER_DATE' => $orderDate,
            'PRODUCT_NAME' => $productName,
            'PRODUCT_NUMBER' => $productNumber,
            'REASON' => $reason,
            'IS_UNPACKED' => $isUnpacked,
            'DESCRIPTION' => $description
        ]);
    }
}
