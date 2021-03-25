<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<div class="bx-hdr-profile">
    <? if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'): ?>
        <div class="bx-basket-block">
            <i class="fa fa-user"></i>
            <? if ($USER->IsAuthorized()):
                $name = trim($USER->GetFullName());
                if (!$name)
                    $name = trim($USER->GetLogin());
                if (mb_strlen($name) > 15)
                    $name = mb_substr($name, 0, 12) . '...';
                ?>
                <a href="<?= $arParams['PATH_TO_PROFILE'] ?>"><?= htmlspecialcharsbx($name) ?></a>
                &nbsp;
                <a href="?logout=yes&<?= bitrix_sessid_get() ?>"><?= GetMessage('TSB1_LOGOUT') ?></a>
            <? else:
                $arParamsToDelete = array(
                    "login",
                    "login_form",
                    "logout",
                    "register",
                    "forgot_password",
                    "change_password",
                    "confirm_registration",
                    "confirm_code",
                    "confirm_user_id",
                    "logout_butt",
                    "auth_service_id",
                    "clear_cache",
                    "backurl",
                );

                $currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
            if ($arParams['AJAX'] == 'N')
            {
                ?>
                <script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
            }
            else {
                $currentUrl = '#CURRENT_URL#';
            }

            $pathToAuthorize = $arParams['PATH_TO_AUTHORIZE'];
            $pathToAuthorize .= (mb_stripos($pathToAuthorize, '?') === false ? '?' : '&');
            $pathToAuthorize .= 'login=yes&backurl=' . $currentUrl;
            ?>
                <a href="<?= $pathToAuthorize ?>">
                    <?= GetMessage('TSB1_LOGIN') ?>
                </a>
            <?
            if ($arParams['SHOW_REGISTRATION'] === 'Y')
            {
            $pathToRegister = $arParams['PATH_TO_REGISTER'];
            $pathToRegister .= (mb_stripos($pathToRegister, '?') === false ? '?' : '&');
            $pathToRegister .= 'register=yes&backurl=' . $currentUrl;
            ?>
                <a href="<?= $pathToRegister ?>">
                    <?= GetMessage('TSB1_REGISTER') ?>
                </a>
                <?
            }
                ?>
            <? endif ?>
        </div>
    <? endif ?>
    <div id="cart">
        <?
        if (!$arResult["DISABLE_USE_BASKET"])
        {
        ?>
        <button type="button" data-toggle="dropdown" class="btn-cart dropdown-toggle">
            <span class="pe-7s-cart"></span>
            <!--                <a href="--><?//= $arParams['PATH_TO_BASKET']
            ?><!--"></a>-->
            <div class="title"><?= GetMessage('TSB1_CART') ?></div>
            <?
            }

            if (!$compositeStub) {
                if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) {


                    if ($arParams['SHOW_TOTAL_PRICE'] == 'Y') {
                        ?>
                        <!--					<br --><?// if ($arParams['POSITION_FIXED'] == 'Y'):
                        ?><!--class="hidden-xs"--><?// endif;
                        ?><!--/>-->
                        <div id="cart-total">
                            <? echo $arResult['BASKET_COUNT_DESCRIPTION']; ?>: <br> <?= GetMessage('TSB1_TOTAL_PRICE') ?>
                            <strong><?= $arResult['TOTAL_PRICE'] ?></strong>
                        </div>
                        <?
                    }
                }
            }

            if ($arParams['SHOW_PERSONAL_LINK'] == 'N'):?>
                <div style="padding-top: 4px;">
                    <span class="icon_info"></span>
                    <a href="<?= $arParams['PATH_TO_PERSONAL'] ?>"><?= GetMessage('TSB1_PERSONAL') ?></a>
                </div>
            <? endif ?>

        </button>
        <ul class="dropdown-menu pull-right">
            <li>
<!--                --><?// $APPLICATION->IncludeComponent(
//                    "bitrix:sale.basket.basket",
//                    "top_basket",
//                    array(
//                        "AJAX_MODE" => "N",
//                        "AJAX_OPTION_ADDITIONAL" => "",
//                        "AJAX_OPTION_HISTORY" => "N",
//                        "AJAX_OPTION_JUMP" => "N",
//                        "AJAX_OPTION_STYLE" => "Y",
//                        "COLUMNS_LIST" => array(0 => "NAME", 1 => "DISCOUNT", 2 => "PRICE", 3 => "QUANTITY", 4 => "SUM", 5 => "PROPS", 6 => "DELETE", 7 => "DELAY",),
//                        "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
//                        "HIDE_COUPON" => "N",
//                        "OFFERS_PROPS" => array(0 => "SIZES_SHOES", 1 => "SIZES_CLOTHES", 2 => "COLOR_REF",),
//                        "PATH_TO_ORDER" => "/personal/order/make/",
//                        "PRICE_VAT_SHOW_VALUE" => "Y",
//                        "QUANTITY_FLOAT" => "N",
//                        "SET_TITLE" => "Y",
//                        "TEMPLATE_THEME" => "site"
//                    )
//                ); ?>
            </li>
        </ul>
    </div>
    </div>