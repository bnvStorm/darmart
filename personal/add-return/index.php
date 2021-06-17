<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Возврат товара");
?>
<div id="content" class="col-sm-9">
    <div class="card">
        <?$APPLICATION->IncludeComponent(
	"darmart:main.feedback", 
	"add_return", 
	array(
		"EMAIL_TO" => "sale@127.0.0.2",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "add_return"
	),
	false
);?>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "profile_right_menu",
    array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "right",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "right",
        "USE_EXT" => "N",
        "COMPONENT_TEMPLATE" => "profile_right_menu"
    ),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>