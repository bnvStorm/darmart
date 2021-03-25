<?
define ("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (isset($_RQUEST["backurl"]) && strlen($_RQUEST["backurl"])>0)
    LocalRedirect($backurl);
$APPLICATION->SetTitle("Авторизация");
?><div class="auth_succes">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/darmart_official_d7/inc/header/logo.php"
	)
);?>
	<p>
		Вы зарегистрированы и успешно авторизовались!
	</p>
	<p>
		<a href="<?=SITE_DIR?>">Вернуться на главную страницу</a>
	</p>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>