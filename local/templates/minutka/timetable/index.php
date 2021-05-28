<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бронирование номеров");
?>   
<?$APPLICATION->IncludeComponent(
	"mibok:timetable", 
	".default", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_ALL_VALUE" => array(
			0 => "PROPERTY_HALL",
			1 => "PROPERTY_CLASS",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_ROOM_TYPE",
		),
		"FILTER_MAIN_HEADER" => "0",
        "EVENT_MESSAGE_ID" => "33",
		"FILTER_NAME" => "arrMibokTt",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "s1_hotel",
		"IBLOCK_ID_RECORD" => "1",
		"IBLOCK_TYPE_RECORD" => "s1_hotel",
		"LIST_SETTINGS_MODAL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
		),
		"LIST_SETTINGS_MODAL_NAME" => "PROPERTY_TYPE_SPORT",
		"LIST_SETTINGS_MODAL_PROPERTY_CODE" => array(
			0 => "PROPERTY_HALL",
			1 => "PROPERTY_CLASS",
			2 => "PROPERTY_HOTEL_ROOM",
			3 => "",
		),
		"LIST_SETTINGS_NAME" => "PROPERTY_HOTEL_ROOM",
		"LIST_SETTINGS_PROP1" => "PROPERTY_CLASS",
		"LIST_SETTINGS_PROP2" => "PROPERTY_PRICE",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"SET_TITLE" => "Y",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"PROPERTY_CODES_RECORD" => array(
			0 => "1",
            1 => "2",
            2 => "NAME",
            3 => "DETAIL_TEXT",
		),
		"PROPERTY_CODES_RECORD_REQUIRED" => array(
			0 => "1",
            1 => "2",
		),
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/timetable/",
        "USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "N",
		"USER_CONSENT_IS_LOADED" => "N"
	),
	false
);?>
    
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>