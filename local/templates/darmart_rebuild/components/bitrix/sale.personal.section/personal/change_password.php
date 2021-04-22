<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="content" class="col-sm-9">
    <?php $APPLICATION->IncludeComponent(
        "bitrix:main.profile",
        "change_password",
        Array(
            "SET_TITLE" =>$arParams["SET_TITLE"],
            "AJAX_MODE" => $arParams['AJAX_MODE_PRIVATE'],
            "SEND_INFO" => $arParams["SEND_INFO_PRIVATE"],
            "CHECK_RIGHTS" => $arParams['CHECK_RIGHTS_PRIVATE'],
            "EDITABLE_EXTERNAL_AUTH_ID" => $arParams['EDITABLE_EXTERNAL_AUTH_ID'],
            "DISABLE_SOCSERV_AUTH" => $arParams['DISABLE_SOCSERV_AUTH']
        ),
        $component
    );?>
</div>
