<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оптовым клиентам");
?><h1 class="title-page">Оптовым клиентам</h1>
<p>
</p>
<p style="text-align: center;">
 <strong>Добро пожаловать в раздел Оптовым покупателям!</strong>
</p>
<p style="text-align: center;">
	 &nbsp;С радостью заявляем что мы являясь официальным дистрибьютором готовы предложить Вам самые эффективные цены на всю технику
</p>
<p style="text-align: center;">
	 Вы можете приобрести у нас технику по оптовым ценам оставив заявку
</p>
<p style="text-align: center;">
	 В ближайшее время с Вами обязательно свяжутся
</p>
 <!--<p style="text-align: center;">
 <button class="btn sendform sendform2" data-toggle="modal" data-target="#order" value="Оставить заявку"> Оставить заявку</button>
</p>-->
<p style="text-align: center;">
</p>
<style>
form h3{
display:none;
}
</style>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"contact_us",
	Array(
		"COMPONENT_TEMPLATE" => "contact_us",
		"EMAIL_TO" => "sale@127.0.0.2",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>