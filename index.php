<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Купить бытовую технику Artel в Шымкенте можно в нашем интернет магазине artelshop.kz  Здесь вашему вниманию представлены бытовые техники Artel и не только...");
$APPLICATION->SetPageProperty("keywords", "DARMART | Интернет магазин");
$APPLICATION->SetPageProperty("title", "DARMART Интернет-магазин бытовой техники");
$APPLICATION->SetTitle("DARMART Интернет-магазин бытовой техники");
?><div id="slideshow0" class="owl-carousel owl-loaded owl-drag" style="opacity: 1;">
	<div class="owl-stage-outer">
		<div class="owl-stage">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.compare.list",
	"",
	Array(
		"ACTION_VARIABLE" => "action",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"COMPARE_URL" => "/catalog/compare/",
		"DETAIL_URL" => "",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"NAME" => "CATALOG_COMPARE_LIST",
		"POSITION" => "top left",
		"POSITION_FIXED" => "N",
		"PRODUCT_ID_VARIABLE" => "id"
	)
);?><br>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?><br>
 <br>
		</div>
	</div>
	 <!--	<div class="owl-nav disabled">--> <!-- <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button> <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>--> <!--	</div>-->
</div>
 <script type="text/javascript">
    $('#slideshow0').owlCarousel({
        items: 1,
        autoPlay: true,
        autoplayTimeout: 5000,
        singleItem: true,
        navigation: true,
        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
        pagination: true
    });
    </script>
<div>
	<div class="banner-block-home">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banners", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "banners",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
		</div>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.top", 
	"topproducts", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_PATH" => "/catalog/compare/",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "topproducts",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "",
		"DISPLAY_COMPARE" => "Y",
		"ELEMENT_COUNT" => "9",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"LABEL_PROP" => array(
		),
		"LABEL_PROP_MOBILE" => array(
			0 => "NEWPRODUCT",
		),
		"LABEL_PROP_POSITION" => "top-left",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"OFFERS_LIMIT" => "5",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
			0 => "Типовое Розничное соглашение",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"PROPERTY_CODE_MOBILE" => array(
		),
		"ROTATE_TIMER" => "30",
		"SECTION_URL" => "",
		"SEF_MODE" => "Y",
		"SEF_RULE" => "",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PAGINATION" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"VIEW_MODE" => "SECTION",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PRODUCT_DISPLAY_MODE" => "N"
	),
	false
);?>
 <!--<div class="card">
	<h3 class="section-title">Последние</h3>
	<div id="latest-carousel" class="owl-carousel custom-nav owl-loaded owl-drag">
		<div class="owl-stage-outer">
			<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1385px;">-->
<?//$APPLICATION->IncludeComponent(
//	"bitrix:catalog.products.viewed",
//	"pvprod",
//	Array(
//		"ACTION_VARIABLE" => "action_cpv",
//		"ADDITIONAL_PICT_PROP_12" => "-",
//		"ADDITIONAL_PICT_PROP_2" => "-",
//		"ADDITIONAL_PICT_PROP_3" => "-",
//		"ADD_PROPERTIES_TO_BASKET" => "Y",
//		"ADD_TO_BASKET_ACTION" => "ADD",
//		"BASKET_URL" => "/personal/basket.php",
//		"CACHE_GROUPS" => "Y",
//		"CACHE_TIME" => "3600",
//		"CACHE_TYPE" => "A",
//		"COMPARE_NAME" => "CATALOG_COMPARE_LIST2",
//		"COMPARE_PATH" => "/catalog/compare/",
//		"COMPONENT_TEMPLATE" => "pvprod",
//		"CONVERT_CURRENCY" => "N",
//		"DEPTH" => "2",
//		"DISPLAY_COMPARE" => "Y",
//		"ENLARGE_PRODUCT" => "STRICT",
//		"HIDE_NOT_AVAILABLE" => "N",
//		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
//		"IBLOCK_ID" => "2",
//		"IBLOCK_MODE" => "multi",
//		"IBLOCK_TYPE" => "catalog",
//		"LABEL_PROP_12" => array(),
//		"LABEL_PROP_2" => array(),
//		"LABEL_PROP_MOBILE_12" => array(),
//		"LABEL_PROP_MOBILE_2" => array(),
//		"LABEL_PROP_POSITION" => "top-left",
//		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
//		"MESS_BTN_BUY" => "Купить",
//		"MESS_BTN_COMPARE" => "Сравнить",
//		"MESS_BTN_DETAIL" => "Подробнее",
//		"MESS_BTN_SUBSCRIBE" => "Подписаться",
//		"MESS_NOT_AVAILABLE" => "Нет в наличии",
//		"PAGE_ELEMENT_COUNT" => "9",
//		"PARTIAL_PRODUCT_PROPERTIES" => "N",
//		"PRICE_CODE" => array(0=>"BASE",),
//		"PRICE_VAT_INCLUDE" => "Y",
//		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
//		"PRODUCT_ID_VARIABLE" => "id",
//		"PRODUCT_PROPS_VARIABLE" => "prop",
//		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
//		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
//		"PRODUCT_SUBSCRIPTION" => "Y",
//		"SECTION_CODE" => "",
//		"SECTION_ELEMENT_CODE" => "",
//		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
//		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
//		"SHOW_CLOSE_POPUP" => "N",
//		"SHOW_DISCOUNT_PERCENT" => "N",
//		"SHOW_FROM_SECTION" => "N",
//		"SHOW_MAX_QUANTITY" => "N",
//		"SHOW_OLD_PRICE" => "N",
//		"SHOW_PRICE_COUNT" => "1",
//		"SHOW_PRODUCTS_12" => "N",
//		"SHOW_PRODUCTS_2" => "Y",
//		"SHOW_SLIDER" => "Y",
//		"SLIDER_INTERVAL" => "3000",
//		"SLIDER_PROGRESS" => "N",
//		"TEMPLATE_THEME" => "blue",
//		"USE_ENHANCED_ECOMMERCE" => "N",
//		"USE_PRICE_COUNT" => "N",
//		"USE_PRODUCT_QUANTITY" => "N"
//	)
//);?><!-- -->
    <!--			</div>
		</div>
		<div class="owl-dots disabled">
		</div>
	</div>
</div>--> <!--<div class="category-card">
	<h3 class="section-title">Стена категорий</h3>
	<div class="row">-->
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"category_wall", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "category_wall",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	),
	false
);?> <!--	</div>
</div>--><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>