<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form",
	"order_return",
	array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "services",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "85",
			1 => "86",
			2 => "87",
			3 => "88",
			4 => "89",
			5 => "90",
			6 => "91",
			7 => "93",
			8 => "94",
			9 => "95",
			10 => "115",
			11 => "116",
			12 => "NAME",
            13 => "92"
		),
		"PROPERTY_CODES_REQUIRED" => array(
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Заявка на возврат отправлена",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "order_return"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
