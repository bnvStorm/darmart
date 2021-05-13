<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arTemplateParameters = [
    "SHOW_FAVORITES_PAGE" => array(
        "NAME" => Loc::getMessage("SHOW_FAVORITES_PAGE"),
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "N",
        "PARENT" => "BASE",
    ),
    "SHOW_CHANGE_PASSWORD_PAGE" => array(
        "NAME" => Loc::getMessage("SHOW_CHANGE_PASSWORD_PAGE"),
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "N",
        "PARENT" => "BASE",
    ),
    "PATH_TO_FAVORITES" => array(
        "NAME" => Loc::getMessage("PATH_TO_FAVORITES"),
        "TYPE" => "STRING",
        "MULTIPLE" => "N",
        "DEFAULT" => "/personal/favorites/",
        "PARENT" => "URL_TEMPLATES",
    ),
    "SEF_URL_TEMPLATES_change_password" => array(
        "NAME" => Loc::getMessage('CHANGE_PASSWORD_URL'),
        "TYPE" => "STRING",
        "MULTIPLE" => "N",
        "DEFAULT" => "change_password/",
        "PARENT" => "SEF_MODE",
    ),
    "SEF_URL_TEMPLATES_favorites" => array(
        "NAME" => Loc::getMessage('FAVORITES_URL'),
        "TYPE" => "STRING",
        "MULTIPLE" => "N",
        "DEFAULT" => "favorites/",
        "PARENT" => "SEF_MODE",
    ),
    "SEF_URL_TEMPLATES_return_order" => array(
        "NAME" => "Страница возврата товара",
        "TYPE" => "STRING",
        "MULTIPLE" => "N",
        "DEFAULT" => "return_order/",
        "PARENT" => "SEF_MODE",
    ),
];
