<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?><div id="slideshow0" class="owl-carousel owl-loaded owl-drag" style="opacity: 1;">
	<div class="owl-stage-outer">
		<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3600px;">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
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
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
		"PROPERTY_CODE" => array("LINK",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br>
		</div>
	</div>
	<div class="owl-nav disabled">
 <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button> <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
	</div>
	 <!--                <div class="owl-dots">--> <!--                    <button role="button" class="owl-dot active"><span></span></button>--> <!--                    <button role="button" class="owl-dot"><span></span></button>--> <!--                    <button role="button" class="owl-dot"><span></span></button>--> <!--                    <button role="button" class="owl-dot"><span></span></button>--> <!--                    <button role="button" class="owl-dot"><span></span></button>--> <!--                </div>-->
</div>
 <script type="text/javascript"><!--
    $('#slideshow0').owlCarousel({
        items: 1,
        autoPlay: true,
        autoplayTimeout: 5000,
        singleItem: true,
        navigation: true,
        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
        pagination: true
    });
    --></script>
<div>
	<div class="banner-block-home">
		<div class="row">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banners", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
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
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
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
<div class="card">
	<h3 class="section-title">Последние</h3>
	<div id="latest-carousel" class="owl-carousel custom-nav owl-loaded owl-drag">
		<div class="owl-stage-outer">
			<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1385px;">
				 <!--                <div class="owl-item active" style="width: 247px; margin-right: 30px;">--> <!--                    <div class="product-layout">--> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.products.viewed",
	"pvprod",
	Array(
		"ACTION_VARIABLE" => "action_cpv",
		"ADDITIONAL_PICT_PROP_2" => "-",
		"ADDITIONAL_PICT_PROP_3" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_PATH" => "/catalog/compare/",
		"COMPONENT_TEMPLATE" => "pvprod",
		"CONVERT_CURRENCY" => "N",
		"DEPTH" => "2",
		"DISPLAY_COMPARE" => "Y",
		"ENLARGE_PRODUCT" => "STRICT",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "2",
		"IBLOCK_MODE" => "single",
		"IBLOCK_TYPE" => "catalog",
		"LABEL_PROP_2" => array(),
		"LABEL_PROP_MOBILE_2" => "",
		"LABEL_PROP_POSITION" => "top-left",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGE_ELEMENT_COUNT" => "9",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(0=>"BASE",),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_PRODUCTS_2" => "N",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?> <!--                        <div class="product-thumb transition">--> <!--                            <div class="image">--> <!--                                <a href="http://darmart.kz/index.php?route=product/product&product_id=250"> <img alt="R-WH-1.5-80 Водонагреватель Royal (эмаль)" src="https://darmart.kz/image/cache/catalog/pylesosy/artel-art-wh-2-0-80-white-3900776-1%281%29-250x250.jpg" title="R-WH-1.5-80 Водонагреватель Royal (эмаль)" class="img-responsive"> </a>--> <!--                            </div>--> <!--                            <div class="quiqview-continer">--> <!--                                <div class="quiqview-btns">--> <!--                                    <button class="icon-btn" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('250');" data-original-title="В закладки"><span class="pe-7s-like"></span></button> <button class="icon-btn" type="button" data-toggle="tooltip" title="" onclick="compare.add('250');" data-original-title="В сравнение"><span class="pe-7s-repeat"></span></button>--> <!--                                </div>--> <!--                            </div>--> <!--                            <div class="caption">--> <!--                                <div class="rating">--> <!--                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>--> <!--                                </div>--> <!--                                <h3><a href="http://darmart.kz/index.php?route=product/product&product_id=250">R-WH-1.5-80 Водонагреватель Royal (эмаль)</a></h3>--> <!--                                <p class="price">--> <!--                                    46 990 тг <span class="price-tax">Без налога: 46 990 тг</span>--> <!--                                </p>--> <!--                                <div class="button-group">--> <!--                                    <button class="btn main-btn" type="button" onclick="cart.add('250');">В корзину </button>--> <!--                                </div>--> <!--                            </div>--> <!--                        </div>--> <!--                    </div>--> <!--                </div>-->
			</div>
		</div>
		 <!--        <div class="owl-nav">--> <!--            <button type="button" role="presentation" class="owl-prev disabled"><span class="pe-7s-angle-left"></span></button> --> <!--            <button type="button" role="presentation" class="owl-next"><span class="pe-7s-angle-right"></span> </button>--> <!--        </div>-->
		<div class="owl-dots disabled">
		</div>
	</div>
</div>
 <script>
    $('#latest-carousel').owlCarousel({
        loop: false,
        nav: true,
        navText: ["<span class='pe-7s-angle-left'></span", "<span class='pe-7s-angle-right'></span"],
        dots: false,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    })
</script>
<div class="category-card">
	<h3 class="section-title">Стена категорий</h3>
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"category_wall",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "category_wall",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"PICTURE",1=>"DETAIL_PICTURE",2=>"",),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.products.viewed",
	".default",
	Array(
		"ACTION_VARIABLE" => "action_cpv",
		"ADDITIONAL_PICT_PROP_2" => "-",
		"ADDITIONAL_PICT_PROP_3" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"CONVERT_CURRENCY" => "N",
		"DEPTH" => "2",
		"DISPLAY_COMPARE" => "N",
		"ENLARGE_PRODUCT" => "STRICT",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_MODE" => "single",
		"IBLOCK_TYPE" => "catalog",
		"LABEL_PROP_2" => "",
		"LABEL_PROP_POSITION" => "top-left",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"PAGE_ELEMENT_COUNT" => "9",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(0=>"BASE",),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>