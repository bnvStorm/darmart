<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="nav navbar-nav">
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "navTop",
            Array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "catalog",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array(0=>"",1=>"",),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "1",
                "VIEW_MODE" => "LINE"
            )
        );?>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>