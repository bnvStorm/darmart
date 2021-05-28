<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
CModule::IncludeModule('vebfabrika.corporation');
$id = (isset($_REQUEST["id"]) ? $_REQUEST["id"] : false);
$arFrontParametrs = CCorporation::GetFrontParametrsValues(SITE_ID);
$captcha = (in_array($arFrontParametrs['USE_CAPTCHA_FORM'], array('HIDDEN', 'IMAGE')) ? $arFrontParametrs['USE_CAPTCHA_FORM'] : 'NONE');
$processing = ($arFrontParametrs['DISPLAY_PROCESSING_NOTE'] === 'Y' ? 'Y' : 'N');
$processing_checked = ($arFrontParametrs['PROCESSING_NOTE_CHECKED'] === 'Y' ? 'Y' : 'N');
$isCallBack = $id == CCache::$arIBlocks[SITE_ID]["vbf_corporation_forms"]["vbf_crp_callback"][0];
$successMessage = ($isCallBack ? "<p><i class='fa fa-check-circle-o' aria-hidden='true'></i>Мы перезвоним вам в ближайшее время.<br/>Спасибо за ваше обращение!</p>" : "<p><i class='fa fa-check-circle-o' aria-hidden='true'></i>Спасибо! Ваше сообщение отправлено!</p>");
?>
<span class="jqmClose top-close fa fa-close"></span>
<?if($id):?>
	<?$APPLICATION->IncludeComponent(
		"vebfabrika:forms", "popup",
		Array(
			"IBLOCK_TYPE" => "vbf_corporation_form",
			"IBLOCK_ID" => $id,
			"USE_CAPTCHA" => $captcha,
			"DISPLAY_PROCESSING_NOTE" => $processing,
			"PROCESSING_NOTE_CHECKED" => $processing_checked,
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "100000",
			"AJAX_OPTION_ADDITIONAL" => "",
			"SUCCESS_MESSAGE" => $successMessage,
			"SEND_BUTTON_NAME" => "Отправить",
			"SEND_BUTTON_CLASS" => "btn color send",
			"DISPLAY_CLOSE_BUTTON" => "Y",
			"POPUP" => "Y",
			"CLOSE_BUTTON_NAME" => "Закрыть",
			"CLOSE_BUTTON_CLASS" => "jqmClose btn btn-default bottom-close"
		)
	);?>
<?endif;?>