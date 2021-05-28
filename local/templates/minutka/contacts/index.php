<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
?><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1e559b84a9f54c53fca2c546c484ffdb2f20373b941fcc092ae4fcd8982a14ec&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
<?$APPLICATION->IncludeComponent("bitrix:map.google.view", "map", array(
	"API_KEY" => "AIzaSyChie5dYe_qbOqb8yzUi1zsL3mbLm6RocU",
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => serialize(array("google_lat"=>55.76,"google_lon"=>37.64,"google_scale"=>10,"PLACEMARKS"=>array(array("TEXT"=>"<div class='clearfix map'><div class='map-logo'><img src='".SITE_DIR."include/img/logo.png' alt=''></div><div class='map-text'><p>Окская область, город Город, проезд Ленина, 1-б</p><p class='map-tel'>телефон: <a href='tel:+74990000000'>+7 (499) 000-00-00</a></p></div></div>","LON"=>37.626953735352,"LAT"=>55.753431523935),),)),
		"MAP_WIDTH" => "1250",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(
			0 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"COMPONENT_TEMPLATE" => "map"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
    <div class="l-contact-header"><?$APPLICATION->IncludeFile(SITE_DIR."include/content/contact_header.php",Array(),Array("MODE"=>"html"));?></div>

    <div class="l-contact-info">
        <ul>
            <li class="icon-map-placeholder"><?$APPLICATION->IncludeFile(SITE_DIR."include/content/contact_address.php",Array(),Array("MODE"=>"html"));?></li>
            <li class="icon-phone"><?$APPLICATION->IncludeFile(SITE_DIR."include/content/contact_phone.php",Array(),Array("MODE"=>"html"));?></li>
            <li class="icon-mobile-phone"><?$APPLICATION->IncludeFile(SITE_DIR."include/content/contact_mobile.php",Array(),Array("MODE"=>"html"));?></li>
            <li class="icon-email"><?$APPLICATION->IncludeFile(SITE_DIR."include/content/contact_email.php",Array(),Array("MODE"=>"html"));?></li>
        </ul>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
    <div class="l-contact-header"><?$APPLICATION->IncludeFile(SITE_DIR."include/content/contact_quest.php",Array(),Array("MODE"=>"html"));?></div>

    <div class="l-contact-form">
        <?$APPLICATION->IncludeComponent(
	"mibok:iblock.element.add", 
	"consent_contact_form", 
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALLOW_DELETE" => "N",
		"ALLOW_EDIT" => "N",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Веб-форма на странице контактов",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Текст вашего сообщения",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "s1_hotel",
		"LEVEL_LAST" => "N",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"NAV_ON_PAGE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "1",
            1 => "2",
			2 => "NAME",
			3 => "PREVIEW_TEXT",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "1",
            1 => "2",
			2 => "PREVIEW_TEXT",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "INACTIVE",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "Благодарим за ваше обращение!",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "contact_form",
		"EVENT_MESSAGE_ID" => array(
			0 => "32",
		),
        "USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "N",
		"USER_CONSENT_IS_LOADED" => "N"
	),
	false
);?>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>