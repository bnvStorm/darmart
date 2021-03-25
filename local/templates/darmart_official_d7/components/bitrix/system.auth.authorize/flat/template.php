<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

?>

<?php if($arParams['AUTH_RESULT']['TYPE'] === 'ERROR'): ?>
<div class="alert alert-danger">
    <i class="fa fa-exclamation-circle"></i>
    <?=$arParams['~AUTH_RESULT']['MESSAGE']?>
</div>
<?php endif; ?>


<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <h2 class="title-page"><?=Loc::getMessage('REG_TITLE')?></h2>
            <p><?=Loc::getMessage('REG_MESS')?></p>
            <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="btn main-btn"><?=Loc::getMessage('REG_BTN')?></a></div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <h2 class="title-page"><?=Loc::getMessage("AUTH_FORM_TITLE")?></h2>
            <form action="<?=$arResult["AUTH_URL"]?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="AUTH_FORM" value="Y" />
                <input type="hidden" name="TYPE" value="AUTH" />
                <?if ($arResult["BACKURL"] <> ''):?>
                    <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                <?endif?>
                <?foreach ($arResult["POST"] as $key => $value):?>
                    <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                <?endforeach?>
                <div class="form-group">
                    <label class="control-label" for="input-email"><?=Loc::getMessage("AUTH_LOGIN")?></label>
                    <input type="text"
                           name="USER_LOGIN"
                           value="<?=$arResult["LAST_LOGIN"]?>"
                           placeholder="<?=Loc::getMessage("AUTH_LOGIN")?>"
                           id="input-email"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label class="control-label" for="input-password"><?=Loc::getMessage("AUTH_PASSWORD")?></label>
                    <input type="password"
                           name="USER_PASSWORD"
                           value=""
                           placeholder="<?=Loc::getMessage("AUTH_PASSWORD")?>"
                           id="input-password"
                           class="form-control"
                           autocomplete>
                    <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></div>
                <input type="submit" value="<?=GetMessage("AUTH_AUTHORIZE")?>" class="btn main-btn">

                <?php if($arResult["CAPTCHA_CODE"]):?>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /></td>
                </tr>
                <tr>
                    <td class="bx-auth-label"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:</td>
                    <td><input class="bx-auth-input form-control" type="text" name="captcha_word" maxlength="50" value="" size="15" autocomplete="off" /></td>
                </tr>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
