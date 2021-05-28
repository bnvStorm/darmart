<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="cols">
	<div class="col col_1">
		<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts_desc.php", array(), array(
			"MODE" => "html",
			"NAME" => "Текст",
			)
		);
		?>
	</div>
	<div class="col col_2">
		<ul>
			<li>
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<span>Адрес </span>
				<p><?$APPLICATION->IncludeFile(SITE_DIR."include/site-adress.php", array(), array(
					"MODE" => "php",
					"NAME" => "Адресс",
					)
				);
				?></p>
			</li>
			<li>
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<span>E-mail</span>
				<p><?$APPLICATION->IncludeFile(SITE_DIR."include/site-email.php", array(), array(
					"MODE" => "php",
					"NAME" => "Email",
					)
				);
				?></p>
			</li>
			<li>
				<i class="fa fa-phone" aria-hidden="true"></i>                                
				<span>Телефон</span>
				<p><?$APPLICATION->IncludeFile(SITE_DIR."include/site-phone.php", array(), array(
					"MODE" => "php",
					"NAME" => "Телефон",
					)
				);
				?></p>
			</li>
			<li>
				<i class="fa fa-clock-o" aria-hidden="true"></i>
				<span>Режим работы</span>
				<p><?$APPLICATION->IncludeFile(SITE_DIR."include/site-schedule.php", array(), array(
					"MODE" => "php",
					"NAME" => "График работы",
					)
				);
				?></p>
			</li>
		</ul>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	"contacts", 
	array(
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "TYPECONTROL",
			2 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:59.48307592457793;s:10:\"yandex_lon\";d:40.07824358615529;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:40.0790321556057;s:3:\"LAT\";d:59.48219425485161;s:4:\"TEXT\";s:75:\"г. Сокол, ул. Красноармейская, дом. 52 Б###RN###\";}}}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "contacts",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => "contacts",
		"API_KEY" => ""
	),
	false
);?>
<?$APPLICATION->IncludeFile(SITE_DIR."include/form_detail.php", array(), array(
	"MODE" => "php",
	"NAME" => "Form",
	)
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>