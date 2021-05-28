<?
	include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
	CHTTP::SetStatus("404 Not Found");
	@define("ERROR_404","Y");
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Страница не найдена");
?>
            <div class="error404">
                <h2>Ошибка <span>404</span></h2>
                <p>Страница не найдена. </p>
                <p>Неправильно набран адрес или <br>такой страницы не существует</p>
				<a class="btn color" href="<?=SITE_DIR?>">На главную</a>
            </div>

<style>
ul.breadcrumbs {
    display: none;
}
.sidebar {
    display: none;
}
.main {
    width: 100% !important;
}
</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>