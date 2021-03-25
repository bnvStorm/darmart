<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Карта сайта");
$APPLICATION->SetTitle("Карта сайта");
?><h1 class="title-page">Карта сайта</h1>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	".default",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COL_NUM" => "2",
		"COMPONENT_TEMPLATE" => ".default",
		"LEVEL" => "3",
		"SET_TITLE" => "Y",
		"SHOW_DESCRIPTION" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>