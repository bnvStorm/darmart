<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Связаться с нами");
$APPLICATION->SetTitle("Связаться с нами");
?>      <h1 class="title-page">Связаться с нами</h1>


    <div class="row">
        <div class="col-md-6">
            <h3>Наш адрес</h3>
            <div class="row">
                <div class="col-lg-6">
                    <strong>Время работы</strong><br>
                    с 10.00 до 20.00<br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6"><strong>DARMART | Интернет магазин бытовой техники</strong><br>
                    <address>
                        г.Шымкент, Енбекшинский район, Каратюбинское шоссе, здание 2А
                    </address>
                </div>
                <div class="col-lg-6"><strong>Телефон</strong><br>
                    <a href="tel:8 701 067 99 94">8 701 067 99 94</a><br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="https://maps.google.com/maps?q=54.718681%2C20.499113&amp;hl=ru-ru&amp;t=m&amp;z=15"
                       target="_blank" class="btn main-btn">Посмотреть на Google карте</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"contact_us", 
	array(
		"EMAIL_TO" => "sale@127.0.0.2",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "contact_us"
	),
	false
);?>

        </div>
    </div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>