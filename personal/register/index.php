<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"personal_registration", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
			3 => "PERSONAL_PHONE",
			4 => "PERSONAL_STREET",
			5 => "PERSONAL_CITY",
			6 => "PERSONAL_STATE",
			7 => "PERSONAL_COUNTRY",
		),
		"SET_TITLE" => "N",
		"SHOW_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
			3 => "PERSONAL_PHONE",
			4 => "PERSONAL_STREET",
			5 => "PERSONAL_CITY",
			6 => "PERSONAL_STATE",
			7 => "PERSONAL_ZIP",
			8 => "PERSONAL_COUNTRY",
			9 => "PERSONAL_NOTES",
			10 => "WORK_COMPANY",
		),
		"SUCCESS_PAGE" => "/personal/",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "N",
		"COMPONENT_TEMPLATE" => "personal_registration",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N"
	),
	false
);?>