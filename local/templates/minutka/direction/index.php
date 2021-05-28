<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Направления");
?><?$APPLICATION->IncludeComponent("bitrix:news", "type_direction_v2", Array(
	"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",	
		"AJAX_OPTION_ADDITIONAL" => "",	
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",	
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",	
		"CACHE_GROUPS" => "Y",	
		"CACHE_TIME" => "36000000",	
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	
		"DETAIL_FIELD_CODE" => array(	
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",	
		"DETAIL_PAGER_TEMPLATE" => "",	
		"DETAIL_PAGER_TITLE" => "Страница",	
		"DETAIL_PROPERTY_CODE" => array(	
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",	
		"DISPLAY_NAME" => "Y",	
		"DISPLAY_PICTURE" => "Y",	
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",	
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
		"IBLOCK_ID" => "6",	
		"IBLOCK_TYPE" => "s1_hotel",	
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	
		"LIST_FIELD_CODE" => array(	
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",	
		"META_DESCRIPTION" => "-",	
		"META_KEYWORDS" => "-",	
		"NEWS_COUNT" => "20",	
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",	
		"PAGER_SHOW_ALWAYS" => "N",	
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",	
		"SEF_FOLDER" => "/direction/",
		"SEF_MODE" => "Y",	
		"SEF_URL_TEMPLATES" => array(
			"detail" => "#ELEMENT_CODE#/",
			"news" => "",
			"section" => "",
		),
		"SET_LAST_MODIFIED" => "N",	
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",	
		"SHOW_404" => "N",	
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",	
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",	
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
        "USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "N",
		"USER_CONSENT_IS_LOADED" => "N",
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>