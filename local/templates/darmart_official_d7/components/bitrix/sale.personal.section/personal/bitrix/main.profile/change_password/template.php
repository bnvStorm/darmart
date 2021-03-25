<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;

?>

<div class="card">
    <h1 class="title-page"><?=Loc::getMessage('TITLE')?></h1>
	<?php
	ShowError($arResult["strProfileError"]);
	if ($arResult['DATA_SAVED'] == 'Y'):?>
        <div class="alert alert-success"><i class="fa fa-check-circle"></i><?=Loc::getMessage('UPDATE_SUCCESS')?></div>
	<?php endif; ?>

    <?php if ($arResult['CAN_EDIT_PASSWORD']): ?>
	<form method="post" name="form1" action="<?=$arResult["FORM_ACTION"]?>" enctype="multipart/form-data" role="form">
            <?=bitrix_sessid_post();?>

            <div class="form-group required">
                <label class="control-label" for="input-password"><?=Loc::getMessage('NEW_PASSWORD')?></label>
                <input type="password"
                       name="NEW_PASSWORD"
                       autocomplete="off"
                       id="input-password"
                       class="form-control">
            </div>

            <div class="form-group required">
                <label class="control-label" for="input-password-confirm"><?=Loc::getMessage('NEW_PASSWORD_CONFIRM')?></label>
                <input type="password"
                       name="NEW_PASSWORD_CONFIRM"
                       autocomplete="off"
                       id="input-password-confirm"
                       class="form-control">
            </div>

        <div class="buttons-overflow clearfix">
            <div class="pull-left">
                <a href="/personal/" class="btn"><?=Loc::getMessage('MAIN_RESET')?></a>
            </div>
            <div class="pull-right">
                <input type="submit" name="save" value="<?=(($arResult["ID"]>0) ? Loc::getMessage("MAIN_SAVE") : Loc::getMessage("MAIN_ADD"))?>" class="btn main-btn">
            </div>
        </div>

	</form>
    <?php else: ?>
        <?php ShowError(Loc::getMessage('PASSWORD_CHANGE_DISABLED_ERROR'));?>
    <?php endif; ?>
</div>
