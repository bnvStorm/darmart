<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;


if ($arParams["MAIN_CHAIN_NAME"] <> '')
{
	$APPLICATION->AddChainItem(htmlspecialcharsbx($arParams["MAIN_CHAIN_NAME"]), $arResult['SEF_FOLDER']);
}

$theme = Bitrix\Main\Config\Option::get("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);

$profilePages = [];
$ordersPages = [];
$subscribePages = [];

$availablePages = [];

/**
 * Profile pages
 */

if ($arParams['SHOW_PRIVATE_PAGE'] === 'Y')
{
    $profilePages[] = array(
        "path" => $arResult['PATH_TO_PRIVATE'],
        "name" => Loc::getMessage("SPS_PERSONAL_PAGE_NAME"),
        "icon" => '<i class="pe-7s-edit"></i>'
    );
}

if ($arParams['SHOW_CHANGE_PASSWORD_PAGE'] === 'Y')
{
    $profilePages[] = array(
        "path" => $arResult['PATH_TO_CHANGE_PASSWORD'],
        "name" => Loc::getMessage("CHANGE_PASSWORD_PAGE"),
        "icon" => '<i class="pe-7s-lock"></i>'
    );
}

if ($arParams['SHOW_FAVORITES_PAGE'] === 'Y')
{
    $profilePages[] = array(
        "path" => $arParams['PATH_TO_FAVORITES'],
        "name" => Loc::getMessage("FAVORITES_PAGE"),
        "icon" => '<i class="pe-7s-like"></i>'
    );
}

if ($arParams['SHOW_CONTACT_PAGE'] === 'Y')
{
    $profilePages[] = array(
        "path" => $arParams['PATH_TO_CONTACT'],
        "name" => Loc::getMessage("SPS_CONTACT_PAGE_NAME"),
        "icon" => '<i class="pe-7s-id"></i>'
    );
}

/**
 * Order pages
 */

if ($arParams['SHOW_ORDER_PAGE'] === 'Y')
{
    $ordersPages[] = array(
        "path" => $arResult['PATH_TO_ORDERS'],
        "name" => Loc::getMessage("SPS_ORDER_PAGE_NAME"),
        "icon" => '<i class="pe-7s-bookmarks"></i>'
    );
}

if ($arParams['SHOW_ORDER_PAGE'] === 'Y')
{

    $delimeter = ($arParams['SEF_MODE'] === 'Y') ? "?" : "&";
    $ordersPages[] = array(
        "path" => $arResult['PATH_TO_ORDERS'].$delimeter."filter_history=Y",
        "name" => Loc::getMessage("SPS_ORDER_PAGE_HISTORY"),
        "icon" => '<i class="pe-7s-note2"></i>'
    );
}

if ($arParams['SHOW_BASKET_PAGE'] === 'Y')
{
    $ordersPages[] = array(
        "path" => $arParams['PATH_TO_BASKET'],
        "name" => Loc::getMessage("SPS_BASKET_PAGE_NAME"),
        "icon" => '<i class="pe-7s-cart"></i>'
    );
}

/**
 * Subscribe pages
 */

if ($arParams['SHOW_SUBSCRIBE_PAGE'] === 'Y')
{
    $subscribePages[] = array(
        "path" => $arResult['PATH_TO_SUBSCRIBE'],
        "name" => Loc::getMessage("SPS_SUBSCRIBE_PAGE_NAME"),
        "icon" => '<i class="pe-7s-mail"></i>'
    );
}

/**
 * All pages
 */


if ($arParams['SHOW_ORDER_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_ORDERS'],
		"name" => Loc::getMessage("SPS_ORDER_PAGE_NAME"),
		"icon" => '<i class="pe-7s-bookmarks"></i>'
	);
}

if ($arParams['SHOW_ACCOUNT_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_ACCOUNT'],
		"name" => Loc::getMessage("SPS_ACCOUNT_PAGE_NAME"),
		"icon" => '<i class="pe-7s-cash"></i>'
	);
}

if ($arParams['SHOW_ORDER_PAGE'] === 'Y')
{

	$delimeter = ($arParams['SEF_MODE'] === 'Y') ? "?" : "&";
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_ORDERS'].$delimeter."filter_history=Y",
		"name" => Loc::getMessage("SPS_ORDER_PAGE_HISTORY"),
		"icon" => '<i class="pe-7s-note2"></i>'
	);
}

if ($arParams['SHOW_PROFILE_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_PROFILE'],
		"name" => Loc::getMessage("SPS_PROFILE_PAGE_NAME"),
		"icon" => '<i class="pe-7s-edit"></i>'
	);
}

if ($arParams['SHOW_BASKET_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arParams['PATH_TO_BASKET'],
		"name" => Loc::getMessage("SPS_BASKET_PAGE_NAME"),
		"icon" => '<i class="pe-7s-cart"></i>'
	);
}

if ($arParams['SHOW_SUBSCRIBE_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_SUBSCRIBE'],
		"name" => Loc::getMessage("SPS_SUBSCRIBE_PAGE_NAME"),
		"icon" => '<i class="pe-7s-mail"></i>'
	);
}

if ($arParams['SHOW_CONTACT_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arParams['PATH_TO_CONTACT'],
		"name" => Loc::getMessage("SPS_CONTACT_PAGE_NAME"),
		"icon" => '<i class="pe-7s-id"></i>'
	);
}

/**
 * Custom pages
 */

$customPagesList = CUtil::JsObjectToPhp($arParams['~CUSTOM_PAGES']);
if ($customPagesList)
{
    foreach ($customPagesList as $page)
    {
        $profilePages[] = array(
            "path" => $page[0],
            "name" => $page[1],
            "icon" => (mb_strlen($page[2])) ? '<i class="'.htmlspecialcharsbx($page[2]).'"></i>' : ""
        );
    }
}

if (
    empty($profilePages) &&
    empty($ordersPages) &&
    empty($subscribePages)
):
	ShowError(Loc::getMessage("SPS_ERROR_NOT_CHOSEN_ELEMENT"));
else:?>
<div id="content" class="col-sm-9">
	<div class="card">

        <?php if(!empty($profilePages)): ?>
            <h2 class="title-page"><?=Loc::getMessage("TITLE_MAIN")?></h2>
            <div class="row">
            <?php foreach($profilePages as $page): ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="account-box" href="<?=htmlspecialcharsbx($page['path'])?>">
                    <span class="sale-personal-section-index-block-ico">
                        <?=$page['icon']?>
                    </span>
                        <h2 class="sale-personal-section-index-block-name">
                            <?=htmlspecialcharsbx($page['name'])?>
                        </h2>
                    </a>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if(!empty($ordersPages)): ?>
            <h2 class="title-page"><?=Loc::getMessage("TITLE_ORDERS")?></h2>
            <div class="row">
                <?php foreach($ordersPages as $page): ?>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <a class="account-box" href="<?=htmlspecialcharsbx($page['path'])?>">
                    <span class="sale-personal-section-index-block-ico">
                        <?=$page['icon']?>
                    </span>
                            <h2 class="sale-personal-section-index-block-name">
                                <?=htmlspecialcharsbx($page['name'])?>
                            </h2>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if(!empty($subscribePages)): ?>
            <h2 class="title-page"><?=Loc::getMessage("TITLE_SUBSCRIBE")?></h2>
            <div class="row">
                <?php foreach($subscribePages as $page): ?>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <a class="account-box" href="<?=htmlspecialcharsbx($page['path'])?>">
                    <span class="sale-personal-section-index-block-ico">
                        <?=$page['icon']?>
                    </span>
                            <h2 class="sale-personal-section-index-block-name">
                                <?=htmlspecialcharsbx($page['name'])?>
                            </h2>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</div>
<?php endif; ?>
