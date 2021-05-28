<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("contacts-form-block");?>
<?CModule::IncludeModule('vebfabrika.corporation');
$arFrontParametrs = CCorporation::GetFrontParametrsValues(SITE_ID);
$captcha = (in_array($arFrontParametrs['USE_CAPTCHA_FORM'], array('HIDDEN', 'IMAGE')) ? $arFrontParametrs['USE_CAPTCHA_FORM'] : 'NONE');
$processing = ($arFrontParametrs['DISPLAY_PROCESSING_NOTE'] === 'Y' ? 'Y' : 'N');
$processing_checked = ($arFrontParametrs['PROCESSING_NOTE_CHECKED'] === 'Y' ? 'Y' : 'N');?>
<?$APPLICATION->IncludeComponent(
	"vebfabrika:forms",
	"pages",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "100000",
		"CACHE_TYPE" => "A",
		"CLOSE_BUTTON_CLASS" => "btn btn-default refresh-page",
		"CLOSE_BUTTON_NAME" => "Обновить страницу",
		"DISPLAY_CLOSE_BUTTON" => "Y",
		"DISPLAY_PROCESSING_NOTE" => $processing,
		"PROCESSING_NOTE_CHECKED" => $processing_checked,
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "vbf_corporation_form",
		"IS_PLACEHOLDER" => "N",
		"SEND_BUTTON_CLASS" => "btn color send",
		"SEND_BUTTON_NAME" => "Отправить",
		"SUCCESS_MESSAGE" => "<p>Спасибо! Ваше сообщение отправлено!</p>",
		"USE_CAPTCHA" => $captcha
	)
);?>
<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("contacts-form-block", "");?>