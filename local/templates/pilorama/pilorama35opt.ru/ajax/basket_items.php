<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

\Bitrix\Main\Loader::incLudeModule('vebfabrika.corporation');

$arModuleOptions = CCorporation::GetFrontParametrsValues(SITE_ID);
$arBasketItems = CCorporation::processBascket();
?>
<div id="ajax_basket_items">
	<script>
	arBasketItems = <?=CUtil::PhpToJSObject($arBasketItems, false)?>;
	</script>
</div>

<?
if($arModuleOptions['ORDER_BASKET_VIEW'] == 'HEADER'){
	$APPLICATION->IncludeComponent(
		"vebfabrika:basket", 
		"top", 
		array(
			"COMPONENT_TEMPLATE" => "top",
		),
		false
	);
}elseif($arModuleOptions['ORDER_BASKET_VIEW'] == 'FLY'){
	$APPLICATION->IncludeComponent(
		"vebfabrika:basket", 
		"fly", 
		array(
			"COMPONENT_TEMPLATE" => "fly",
		),
		false
	);
}
?>