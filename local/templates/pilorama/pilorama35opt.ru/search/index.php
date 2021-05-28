<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Поиск по сайту");
$APPLICATION->SetTitle("Поиск по сайту");
?><?$APPLICATION->IncludeComponent("bitrix:search.page", "corporation", Array(
	"AJAX_MODE" => "N",	
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",	
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "catalog",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "20",
		"RESTART" => "Y",
		"SHOW_WHEN" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array(
			0 => "iblock_vbf_corporation_catalog",
			1 => "iblock_vbf_corporation_content",
		),
		"arrFILTER_iblock_vbf_corporation_catalog" => array(
			0 => "all",
		),
		"arrFILTER_iblock_vbf_corporation_content" => array(
			0 => "2",
			1 => "3",
			2 => "4",
			3 => "7",
			4 => "8",
			5 => "9",
			6 => "10",
		),
		"arrWHERE" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>