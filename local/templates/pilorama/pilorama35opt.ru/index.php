<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("keywords", "Производство и реализация мебельного щита оптом");
$APPLICATION->SetPageProperty("description", "Производство и реализация мебельного щита оптом");
$APPLICATION->SetTitle("Производство и реализация мебельного щита оптом");
?> 
<?if($indexTeaserView):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"tizer_home", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
			),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "vbf_corporation_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "FAICON",
			1 => "",
			),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "tizer_home"
		),
	false
	);
	?>
	<?endif;?>  



<?if($indexCatalogView):?>
		<div class="divide">
			<span class="title_block">Каталог товаров</span>
			
				<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"catalog_home", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arFilterCat",
		"USE_FILTER" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "vbf_corporation_catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "15",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "UF_PRICE",
			1 => "OLD_PRICE",
			2 => "UF_STATUS",
			3 => "PLASHKA",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "catalog_home",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);
					?>
							
							
			<?/*$APPLICATION->IncludeComponent(
				"bitrix:catalog.section.list", 
				"home_list", 
				array(
					"ADD_SECTIONS_CHAIN" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"COUNT_ELEMENTS" => "Y",
					"IBLOCK_ID" => "11",
					"IBLOCK_TYPE" => "vbf_corporation_catalog",
					"SECTION_CODE" => "",
					"SECTION_FIELDS" => array(
						0 => "",
						1 => "",
						),
					"SECTION_ID" => $_REQUEST["SECTION_ID"],
					"SECTION_URL" => "",
					"SECTION_USER_FIELDS" => array(
						0 => "",
						1 => "",
						),
					"SHOW_PARENT_NAME" => "Y",
					"TOP_DEPTH" => "2",
					"VIEW_MODE" => "LINE",
					"COMPONENT_TEMPLATE" => "home_list"
					),
				false
				);
				*/?>
			</div>
			<?endif;?>  
			<?/*if($indexSpecialView):?>
			<div class="compilation">
				<div class="tabs">

					<?$APPLICATION->IncludeFile(SITE_DIR."include/index_catalog_block.php", array(), array(
						"MODE" => "php",
						"NAME" => "Catalog blocks",
						)
					);
					?>    
					<div class="tabs_content active">
						<? 
						$arFilterCat = array("PROPERTY_PLASHKA_VALUE"=>'Акция'); 
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list", 
							"catalog_home", 
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
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
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(
									0 => "",
									1 => "",
									),
								"FILTER_NAME" => "arFilterCat",
								"USE_FILTER" => "Y",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "11",
								"IBLOCK_TYPE" => "vbf_corporation_catalog",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "N",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "5",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array(
									0 => "PRICE",
									1 => "OLD_PRICE",
									2 => "STATUS",
									3 => "PLASHKA",
									4 => "",
									),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_BY2" => "SORT",
								"SORT_ORDER1" => "DESC",
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N",
								"COMPONENT_TEMPLATE" => "catalog_home"
								),
							false
							);
							?> 
						</div>
						<div class="tabs_content">
							<? 
							$arFilterCat = array("PROPERTY_PLASHKA_VALUE"=>'Хит продаж'); 
							?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list", 
								"catalog_home", 
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
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
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "N",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "",
										1 => "",
										),
									"FILTER_NAME" => "arFilterCat",
									"USE_FILTER" => "Y",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "11",
									"IBLOCK_TYPE" => "vbf_corporation_catalog",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "5",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
										0 => "PRICE",
										1 => "OLD_PRICE",
										2 => "STATUS",
										3 => "PLASHKA",
										4 => "",
										),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N",
									"COMPONENT_TEMPLATE" => "catalog_home"
									),
								false
							);
							?> 
						</div>

						<div class="tabs_content">
							<? 
							$arFilterCat = array("PROPERTY_PLASHKA_VALUE"=>'Рекомендуем'); 
							?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list", 
								"catalog_home", 
								array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
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
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "N",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "",
										1 => "",
										),
									"FILTER_NAME" => "arFilterCat",
									"USE_FILTER" => "Y",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "11",
									"IBLOCK_TYPE" => "vbf_corporation_catalog",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "5",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
										0 => "PRICE",
										1 => "OLD_PRICE",
										2 => "STATUS",
										3 => "PLASHKA",
										4 => "",
										),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ACTIVE_FROM",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "DESC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N",
									"COMPONENT_TEMPLATE" => "catalog_home"
									),
								false
							);
							?> 
						</div>         
					</div>
				</div>
			<?endif;*/?>  





    
	<?if($indexServicesView):?>
	<? 
	$arFilterServ = array("!PROPERTY_HOME_VIEW"=>false); 
	?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"services_home", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
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
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
				),
			"FILTER_NAME" => "arFilterServ",
			"USE_FILTER" => "Y",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "10",
			"IBLOCK_TYPE" => "vbf_corporation_content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "4",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "HOME_VIEW",
				1 => "",
				),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "services_home"
			),
		false
		);
		?>
		<?endif;?>  

		<?if($indexForms):?>
			<div class="consultation clearfix">
				<div class="left">
					<span>Нужна консультация?</span>
					<p>Проконсультируем по предоставляемым услугам, расскажем о нашем производстве и покажем реализационную продукцию.</p>
				</div>
				<div class="right">
					<a class="btn color fancybox" href="javascript:void(0)" data-event="jqm" data-param-id="20" data-name="question">Задать вопрос</a>
				</div>
			</div>
		<?endif;?>

		
						<div class="clearfix">
							<div class="col_half_1 <?=($indexNews == "Y" ? '' : 'full')?>">
								<div class="about">
									<h2 class="title_block">О компании</h2>
									<?$APPLICATION->IncludeFile(SITE_DIR."include/about_home.php", array(), array(
										"MODE" => "html",
										"NAME" => "About Home",
										)
									);
									?>
									<a class="btn color" href="<?=SITE_DIR?>company/">Подробнее</a>
								</div>
							</div>

							<?if($indexNews):?>
								<div class="col_half_2">
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list", 
										"news_home", 
										array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_SECTIONS_CHAIN" => "N",
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
											"DISPLAY_BOTTOM_PAGER" => "N",
											"DISPLAY_DATE" => "N",
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => "N",
											"DISPLAY_PREVIEW_TEXT" => "N",
											"DISPLAY_TOP_PAGER" => "N",
											"FIELD_CODE" => array(
												0 => "",
												1 => "",
												),
											"FILTER_NAME" => "",
											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
											"IBLOCK_ID" => "12",
											"IBLOCK_TYPE" => "vbf_corporation_content",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"INCLUDE_SUBSECTIONS" => "N",
											"MESSAGE_404" => "",
											"NEWS_COUNT" => "2",
											"PARENT_SECTION" => "",
											"PARENT_SECTION_CODE" => "",
											"PREVIEW_TRUNCATE_LEN" => "",
											"PROPERTY_CODE" => array(
												0 => "",
												1 => "",
												),
											"SET_BROWSER_TITLE" => "N",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "N",
											"SET_META_KEYWORDS" => "N",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "N",
											"SHOW_404" => "N",
											"SORT_BY1" => "SORT",
											"SORT_BY2" => "SORT",
											"SORT_ORDER1" => "ASC",
											"SORT_ORDER2" => "ASC",
											"STRICT_SECTION_CHECK" => "N",
											"COMPONENT_TEMPLATE" => "news_home"
											),
										false
										);
										?>
									</div>
								<?endif;?>
							</div>
							<?
							require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
							?>