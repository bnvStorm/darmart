<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Sale\Location\LocationTable;

if(preg_match('~(логин)~', $arResult['ERRORS'][0])){
    $error = substr(
        $arResult['ERRORS'][0],
        0,
        strpos($arResult['ERRORS'][0], 'Пользователь с логином')
    );

    $arResult['ERRORS'][0] = $error;
}

$countries = [
    83 => Loc::getMessage('COUNTRY_KAZAKHSTAN')//Kazakhstan
];


$locationCollection = LocationTable::getList([
    'filter' => [
        'PARENT_ID' => 3155,
        '=NAME.LANGUAGE_ID' => LANGUAGE_ID
    ],
    'select' => ['*', 'REGION_NAME' => 'NAME.NAME']
]);

$regions = [];
while ($row = $locationCollection->fetch()) {
    $regions[] = $row;
}


$mainDataFields = [
    'NAME',
    'LAST_NAME',
    'EMAIL',
    'PERSONAL_PHONE'
];

$addressDataFields = [
    'WORK_COMPANY',
    'PERSONAL_STREET',
    'PERSONAL_NOTES',
    'PERSONAL_CITY',
    'PERSONAL_ZIP',
    'PERSONAL_COUNTRY',
    'PERSONAL_STATE'
];

$sections = [
    'MAIN_DATA' => [],
    'ADDRESS_DATA' => []
];

foreach($arResult['SHOW_FIELDS'] as $fieldCode){
    $field = [
        'CODE' => $fieldCode,
        'REQUIRED' => false
    ];

    if(in_array($fieldCode, $arResult['REQUIRED_FIELDS']))
        $field['REQUIRED'] = true;

    if(in_array($fieldCode, $mainDataFields))
        $sections['MAIN_DATA'][] = $field;

    if(in_array($fieldCode, $addressDataFields))
        $sections['ADDRESS_DATA'][] = $field;
}

$arResult['AVAILABLE_COUNTRIES'] = $countries;
$arResult['AVAILABLE_REGIONS'] = $regions;
$arResult['SECTIONS'] = $sections;
