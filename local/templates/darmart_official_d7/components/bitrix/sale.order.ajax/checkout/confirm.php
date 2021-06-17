<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var $APPLICATION CMain
 */

if ($arParams["SET_TITLE"] == "Y")
{
	$APPLICATION->SetTitle(Loc::getMessage("SOA_ORDER_COMPLETE"));
}
?>

<? if (!empty($arResult["ORDER"])): ?>

    <h1><?= Loc::getMessage('ORDER_PAGE_SUCCESS_TITLE') ?></h1>
    <p><?= Loc::getMessage('ORDER_SUCCESS_TEXT1') ?></p>
    <p><?//= Loc::getMessage('ORDER_SUCCESS_TEXT4') ?></p>
    <p><?= Loc::getMessage('ORDER_SUCCESS_TEXT2') ?></p>
    <p><?= Loc::getMessage('ORDER_SUCCESS_TEXT3') ?></p>
<!--    <div class="buttons">-->
<!--        <div><a href="/" class="btn main-btn">--><?//= Loc::getMessage('CONTINUE_BTN2') ?><!--</a></div>-->
<!--    </div>-->

    <!-- -- -->

    <?
    if ($arResult["ORDER"]["IS_ALLOW_PAY"] === 'Y')
    {
        if (!empty($arResult["PAYMENT"]))
        {
            foreach ($arResult["PAYMENT"] as $payment)
            {
                if ($payment["PAID"] != 'Y')
                {
                    if (!empty($arResult['PAY_SYSTEM_LIST'])
                        && array_key_exists($payment["PAY_SYSTEM_ID"], $arResult['PAY_SYSTEM_LIST'])
                    )
                    {
                        $arPaySystem = $arResult['PAY_SYSTEM_LIST_BY_PAYMENT_ID'][$payment["ID"]];

                        if (empty($arPaySystem["ERROR"]))
                        {
                            ?>


                            <table class="sale_order_full_table">
                                <tr>
                                    <td class="ps_logo">
                                        <h2><?=Loc::getMessage("SOA_PAY") ?></h2>
                                        <?=CFile::ShowImage($arPaySystem["LOGOTIP"], 100, 100, "border=0\" style=\"width:100px\"", "", false) ?>
                                        <div class="paysystem_name"><?=$arPaySystem["NAME"] ?></div>
                                        <br/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <? if ($arPaySystem["ACTION_FILE"] <> '' && $arPaySystem["NEW_WINDOW"] == "Y" && $arPaySystem["IS_CASH"] != "Y"): ?>
                                            <?
                                            $orderAccountNumber = urlencode(urlencode($arResult["ORDER"]["ACCOUNT_NUMBER"]));
                                            $paymentAccountNumber = $payment["ACCOUNT_NUMBER"];
                                            ?>
                                            <script>
                                                window.open('<?=$arParams["PATH_TO_PAYMENT"]?>?ORDER_ID=<?=$orderAccountNumber?>&PAYMENT_ID=<?=$paymentAccountNumber?>');
                                            </script>
                                        <?=Loc::getMessage("SOA_PAY_LINK", array("#LINK#" => $arParams["PATH_TO_PAYMENT"]."?ORDER_ID=".$orderAccountNumber."&PAYMENT_ID=".$paymentAccountNumber))?>
                                        <? if (CSalePdf::isPdfAvailable() && $arPaySystem['IS_AFFORD_PDF']): ?>
                                        <br/>
                                            <?=Loc::getMessage("SOA_PAY_PDF", array("#LINK#" => $arParams["PATH_TO_PAYMENT"]."?ORDER_ID=".$orderAccountNumber."&pdf=1&DOWNLOAD=Y"))?>
                                        <? endif ?>
                                        <? else: ?>
                                            <?=$arPaySystem["BUFFERED_OUTPUT"]?>
                                        <? endif ?>
                                    </td>
                                </tr>
                            </table>

                            <?
                        }
                        else
                        {
                            ?>
                            <span style="color:red;"><?=Loc::getMessage("SOA_ORDER_PS_ERROR")?></span>
                            <?
                        }
                    }
                    else
                    {
                        ?>
                        <span style="color:red;"><?=Loc::getMessage("SOA_ORDER_PS_ERROR")?></span>
                        <?
                    }
                }
            }
        }
    }
    else
    {
        ?>
        <br /><strong><?=$arParams['MESS_PAY_SYSTEM_PAYABLE_ERROR']?></strong>
        <?
    }
    ?>
    <!-- -- -->
<? else: ?>


	<div class="row mb-2">
		<div class="col">
			<div class="alert alert-danger" role="alert"><strong><?=Loc::getMessage("SOA_ERROR_ORDER")?></strong><br />
				<?=Loc::getMessage("SOA_ERROR_ORDER_LOST", ["#ORDER_ID#" => htmlspecialcharsbx($arResult["ACCOUNT_NUMBER"])])?><br />
				<?=Loc::getMessage("SOA_ERROR_ORDER_LOST1")?></div>
		</div>
	</div>

<? endif ?>
<script type="text/javascript">
        fbq('track', 'Purchase', {value: <?=intval($arResult["ORDER"]["PRICE"])?>, currency: 'USD'});
</script>