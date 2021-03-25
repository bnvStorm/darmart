<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;

?>

<div class="card">
    <h1 class="title-page">Учетная запись</h1>
	<?php
	ShowError($arResult["strProfileError"]);

	if ($arResult['DATA_SAVED'] == 'Y'):?>
        <div class="alert alert-success"><i class="fa fa-check-circle"></i><?=Loc::getMessage('UPDATE_SUCCESS')?></div>
    <?php endif; ?>
	<form method="post" name="form1" action="<?=POST_FORM_ACTION_URI?>" enctype="multipart/form-data" role="form">
        <?=bitrix_sessid_post();?>

        <div class="form-group required">
            <label class="control-label" for="input-firstname"><?=Loc::getMessage('NAME')?></label>
            <input type="text"
                   name="NAME"
                   value="<?=$arResult["arUser"]["NAME"]?>"
                   placeholder="<?=Loc::getMessage('NAME')?>"
                   id="input-firstname"
                   class="form-control">
        </div>

        <div class="form-group required">
            <label class="control-label" for="input-lastname"><?=Loc::getMessage('LAST_NAME')?></label>
            <input type="text"
                   name="LAST_NAME"
                   value="<?=$arResult["arUser"]["LAST_NAME"]?>"
                   placeholder="><?=Loc::getMessage('LAST_NAME')?>"
                   id="input-lastname"
                   class="form-control">
        </div>

        <div class="form-group required">
            <label class="control-label" for="input-email"><?=Loc::getMessage('EMAIL')?></label>
            <input type="email"
                   name="EMAIL"
                   value="<?=$arResult["arUser"]["EMAIL"]?>"
                   placeholder="<?=Loc::getMessage('EMAIL')?>"
                   id="input-email"
                   class="form-control">
        </div>

        <div class="form-group required">
            <label class="control-label" for="input-telephone"><?=Loc::getMessage('PERSONAL_PHONE')?></label>
            <input type="tel"
                   name="PERSONAL_PHONE"
                   value="<?=$arResult["arUser"]["PERSONAL_PHONE"]?>"
                   placeholder="<?=Loc::getMessage('PERSONAL_PHONE')?>"
                   id="input-telephone"
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
	<?
	$disabledSocServices = isset($arParams['DISABLE_SOCSERV_AUTH']) && $arParams['DISABLE_SOCSERV_AUTH'] === 'Y';

	if (!$disabledSocServices)
	{
		?>
		<div class="col-sm-12 main-profile-social-block">
			<?
			if ($arResult["SOCSERV_ENABLED"])
			{
				$APPLICATION->IncludeComponent(
					"bitrix:socserv.auth.split",
					".default",
					[
						"SHOW_PROFILES" => "Y",
						"ALLOW_DELETE" => "Y",
					],
					false
				);
			}
			?>
		</div>
		<?
	}
	?>
</div>
