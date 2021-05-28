<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><div class="detail">
	 <?$APPLICATION->IncludeFile(SITE_DIR."include/about_text.php", array(), array(
										"MODE" => "html",
										"NAME" => "About Home",
										)
									);
									?><br>
	<br>
	<img width="307" alt="mg_1446.jpg" src="/upload/medialibrary/9cb/9cbfee997b133e11ccab1909a6bd6ca7.jpg" height="205" title="mg_1446.jpg">&nbsp;<img width="307" alt="mg_1479-3.jpg" src="/upload/medialibrary/37a/37ab657c63f09f8f8d5dcc5f55c03b31.jpg" height="205" title="mg_1479-3.jpg"><br>
	<br>
	<img width="307" alt="mg_1525.jpg" src="/upload/medialibrary/9e9/9e9c9b626c5ed3b84951e154dd3ee1cf.jpg" height="205" title="mg_1525.jpg">&nbsp;<img width="307" alt="mg_1599.jpg" src="/upload/medialibrary/c70/c70cd17a3e3a69dbb9ebad6b8c8f2cd0.jpg" height="205" title="mg_1599.jpg"><br>
	<div class="why board_top">
		<h2>Почему выбирают нас</h2>
		<ul>
			<li class="icon_1"> Гарантия на товары и услуги </li>
			<li class="icon_2"> Низкие цены и широкий ассортимент </li>
			<li class="icon_3"> Большой опыт работы </li>
			<li class="icon_4"> Индивидуальный подход к каждому </li>
		</ul>
	</div>
	<div class="progress">
		<h2>Наши достижения</h2>
		<ul>
			<li>
			142
			<p>
				В среднем сделок<br>
				за месяц
			</p>
 </li>
			<li>
			47
			<p>
				Предоставляемых<br>
				услуг
			</p>
 </li>
			<li>
			10
			<p>
				Лет надежной<br>
				работы
			</p>
 </li>
			<li>
			12
			<p>
				Регионов работы
			</p>
 </li>
		</ul>
	</div>
	 <?$APPLICATION->IncludeFile(SITE_DIR."include/form_detail.php", array(), array(
		"MODE" => "php",
		"NAME" => "Form",
		)
	);
	?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>