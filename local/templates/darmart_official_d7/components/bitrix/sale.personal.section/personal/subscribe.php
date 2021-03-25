<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

if ($arParams['SHOW_SUBSCRIBE_PAGE'] !== 'Y')
{
	LocalRedirect($arParams['SEF_FOLDER']);
}

global $USER;
if ($arParams['USE_PRIVATE_PAGE_TO_AUTH'] === 'Y' && !$USER->IsAuthorized())
{
	LocalRedirect($arResult['PATH_TO_AUTH_PAGE']);
}

if ($arParams["MAIN_CHAIN_NAME"] <> '')
{
	$APPLICATION->AddChainItem(htmlspecialcharsbx($arParams["MAIN_CHAIN_NAME"]), $arResult['SEF_FOLDER']);
}
$APPLICATION->AddChainItem(Loc::getMessage("SPS_CHAIN_SUBSCRIBE_NEW"));
?>

<div id="content" class="col-sm-9">
    <div class="card">
        <h1 class="title-page"><?=Loc::getMessage('NEWS_SUBSCRIBE_TITLE')?></h1>
        <?php /*$APPLICATION->IncludeComponent(
            'bitrix:catalog.product.subscribe.list',
            "bootstrap_v4",
            array(
                'SET_TITLE' => $arParams['SET_TITLE'],
                'DETAIL_URL' => $arParams['SUBSCRIBE_DETAIL_URL']
            ),
            $component
        );*/
        ?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:subscribe.simple",
            "",
            Array(
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_TIME" => "3600",
                "CACHE_TYPE" => "A",
                "SET_TITLE" => "Y",
                "SHOW_HIDDEN" => "N"
            ),
            $component
        );?><br>
    </div>
</div>

