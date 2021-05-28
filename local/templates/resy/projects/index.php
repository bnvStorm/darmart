<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РЕШЕНИЯ RESY");
?><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_RECURSIVE" => "N",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"projects",
	Array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "projects",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"NAME",1=>"DETAIL_TEXT",2=>"DETAIL_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "modern",
		"DETAIL_PAGER_TITLE" => "Новости",
		"DETAIL_PROPERTY_CODE" => array(0=>"SHOW_FRONT_PAGE",1=>"BANNER_SIZE",2=>"FORM_ORDER",3=>"DOCUMENTS_TITLE",4=>"GALLERY_TITLE",5=>"LINK_FAQ",6=>"LINK_REVIEWS",7=>"LINK_STAFF",8=>"LINK_PROJECTS",9=>"BANNER_VISIBLE",10=>"BANNER_BUTTON_TEXT",11=>"BANNER_TEXT_COLOR",12=>"BANNER_BG_COLOR",13=>"BANNER_TEXT",14=>"INFO_SITE",15=>"INFO_SCOPE",16=>"INFO_DATE",17=>"INFO_CLIENT",18=>"BANNER_TEXT_CODE",19=>"DOCUMENTS",20=>"MORE_PHOTO",21=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "marsd_bitcorp_s1",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"SHOW_FRONT_PAGE",1=>"BANNER_SIZE",2=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "3",
		"OTHER_ITEMS_TITLE" => "Другие новости",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "modern",
		"PAGER_TITLE" => "Проекты",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROJECTS_BLOCK_DESCRIPTION" => "",
		"PROJECTS_BLOCK_TITLE" => "Наши проекты",
		"PROJECTS_SHOW_DESCRIPTION" => "Y",
		"SEF_FOLDER" => "/projects/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_CODE#/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_OTHER_NEWS" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"YANDEX" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>