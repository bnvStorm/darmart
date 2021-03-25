<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
?>

<?php if (!empty($arParams["~AUTH_RESULT"])):
    $text = str_replace(array("<br>", "<br />"), "\n", $arParams["~AUTH_RESULT"]["MESSAGE"]);
    ?>
    <div class="alert <?= ($arParams["~AUTH_RESULT"]["TYPE"] == "OK" ? "alert-success" : "alert-danger") ?>">
        <i class="fa fa-exclamation-circle"></i>
        <?= nl2br(htmlspecialcharsbx($text)) ?>
    </div>
<? endif ?>

<div class="card">
    <h1 class="title-page"><?= Loc::getMessage('FORGOT_PASSWORD_TITLE') ?></h1>
    <p><?= Loc::getMessage('AUTH_FORGOT_PASSWORD_2') ?></p>
    <form action="<?= $arResult["AUTH_URL"] ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="AUTH_FORM" value="Y">
        <input type="hidden" name="TYPE" value="SEND_PWD">

        <fieldset>
            <h2 class="title-page"><?= Loc::getMessage('FORGOT_PASSWORD_EMAIL_TITLE') ?></h2>
            <div class="form-group required">
                <label class="control-label" for="input-email"><?= Loc::getMessage('FORGOT_PASSWORD_EMAIL') ?></label>
                <input type="email" name="USER_EMAIL" value="<?= $arResult["USER_LOGIN"] ?>" placeholder="<?= Loc::getMessage('FORGOT_PASSWORD_EMAIL') ?>"
                       id="input-email" class="form-control">
                <input type="hidden" name="USER_LOGIN"/>
            </div>
        </fieldset>
        <? if ($arResult["USE_CAPTCHA"]): ?>
            <input type="hidden" name="captcha_sid" value="<?= $arResult["CAPTCHA_CODE"] ?>"/>

            <div class="bx-authform-formgroup-container">
                <div class="bx-authform-label-container"><? echo GetMessage("system_auth_captcha") ?></div>
                <div class="bx-captcha"><img
                            src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["CAPTCHA_CODE"] ?>" width="180"
                            height="40" alt="CAPTCHA"/></div>
                <div class="bx-authform-input-container">
                    <input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off"/>
                </div>
            </div>

        <? endif ?>
        <div class="buttons-overflow clearfix">
            <div class="pull-left">
                <a href="/personal/" class="btn"><?= Loc::getMessage('BACK_BTN') ?></a>
            </div>
            <div class="pull-right">
                <input type="submit" value="<?= Loc::getMessage('SUBMIT_BTN') ?>" class="btn main-btn">
            </div>
        </div>

    </form>
</div>

<script type="text/javascript">
    document.bform.onsubmit = function () {
        document.bform.USER_LOGIN.value = document.bform.USER_EMAIL.value;
    };
    document.bform.USER_EMAIL.focus();
</script>
