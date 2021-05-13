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
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_name" class="control-label">
                        <?= GetMessage("MFT_NAME") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_lastname" class="control-label">
                        <?= GetMessage("MFT_LASTNAME") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("LASTNAME", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_lastname" value="<?= $arResult["LASTNAME"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_phone"
                           class="control-label"><?= GetMessage("MFT_PHONE") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_phone" value="<?= $arResult["PHONE"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_email"
                           class="control-label"><?= GetMessage("MFT_EMAIL") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_number" class="control-label">
                        <?= GetMessage("MFT_NUMBER") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NUMBER", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_number" value="<?= $arResult["NUMBER"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group required">
                    <label for="user_name" class="control-label">

                        <?= GetMessage("MFT_DATE") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("DATE", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?>
                    </label>
                    <input class="form-control" type="date" id="start" name="user_date" value="<?= $arResult["DATE"] ?>" min="2010-01-01" max="2218-12-31">
                </div>

            </div>
            <div class="col-lg-12">
            <h2 class="title-page"><?= GetMessage("MFT_INFO") ?></h2>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_order" class="control-label">
                        <?= GetMessage("MFT_NAME_ORDER") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME_ORDER", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_order" value="<?= $arResult["NAME_ORDER"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_model" class="control-label">
                        <?= GetMessage("MFT_MODEL") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MODEL", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_model" value="<?= $arResult["MODEL"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="user_quantity" class="control-label">
                        <?= GetMessage("MFT_QUANTITY") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("QUANTITY", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span><? endif ?></label>
                    <input class="form-control" type="text" name="user_quantity" value="<?= $arResult["QUANTITY"] ?>">
                </div>

            </div>
            <div class="col-lg-12">
            <div class="form-group required">
                <label class="control-label"><?= GetMessage("MFT_CAUSE") ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="return_reason_id" value="5">
                        <?= GetMessage("MFT_CAUSE_VARIANT1") ?></label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="return_reason_id" value="4">
                        <?= GetMessage("MFT_CAUSE_VARIANT2") ?></label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="return_reason_id" value="2">
                        <?= GetMessage("MFT_CAUSE_VARIANT3") ?></label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="return_reason_id" value="1">
                        <?= GetMessage("MFT_CAUSE_VARIANT4") ?></label>
                </div>
            </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group required">
                    <label for="MESSAGE" class="control-label">
                        <?= GetMessage("MFT_UNPACKED") ?>
                        <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("UNPACKED", $arParams["REQUIRED_FIELDS"])): ?>
                            <span class="mf-req">*</span>
                        <? endif ?>
                        <label class="radio-inline">
                            <input type="radio" name="user_unpacked" value="<?= $arResult["UNPACKED"] ?>">
                            <?= GetMessage("MFT_YES") ?></label>
                        <label class="radio-inline">
                            <input type="radio" name="user_unpacked" value="<?= $arResult["QUANTITY"] ?>" checked="checked">
                            <?= GetMessage("MFT_NO") ?></label>

                    </label>


                </div>
            </div>
            <div class="col-sm-12">
            <div class="form-group">
                <label class="control-label" for="input-comment"><?= GetMessage("MFT_MESSAGE") ?>:</label>
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