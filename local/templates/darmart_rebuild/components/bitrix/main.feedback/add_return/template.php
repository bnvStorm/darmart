<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<!--<div class="mfeedback">-->
    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if ($arResult["OK_MESSAGE"] <> '') {
        ?>
        <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
    }
    ?>
    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
        <?= bitrix_sessid_post() ?>
        <h3>Форма связи</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group required">
                    <label for="user_name" class="control-label">
                        <?= GetMessage("MFT_NAME") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
                </div>

            </div>
            <div class="col-lg-6">
                <div class="form-group required">
                    <label for="user_email"
                           class="control-label"><?= GetMessage("MFT_EMAIL") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                </div>

            </div>

            <div class="col-sm-12">
                <div class="form-group required">
                    <label for="MESSAGE" class="control-label">
                        <?= GetMessage("MFT_MESSAGE") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?>
                    </label>
                    <textarea class="form-control" name="MESSAGE" rows="5" cols="40"><?= $arResult["MESSAGE"] ?></textarea>
                </div>
            </div>

        <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
            <div class="mf-captcha">
                <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
                <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40"
                     alt="CAPTCHA">
                <div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></div>
                <input type="text" name="captcha_word" size="30" maxlength="50" value="">
            </div>
        <? endif; ?>
        </div>
        <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
        <div class="buttons">
            <input class="btn main-btn" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
        </div>
    </form>
<!--</div>-->