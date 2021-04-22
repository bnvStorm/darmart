<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!doctype html>
<html>
<head>
    <?
    $APPLICATION->ShowHead();

    use Bitrix\Main\Page\Asset;

    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.css');
    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins//fancybox/source/jquery.fancybox.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    //Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
    //Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"http://SITE.ru/","name":"Название - Описание","potentialAction":{"@type":"SearchAction","target":"http://SITE.ru/search/index.php","query-input":"required name=search_term_string"}}

    </script>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"Organization","url":"http://SITE.ru/","sameAs":[],"@id":"#organization","name":"Домен - Описание","logo":"http://SITE.ru/полный_путь_к_логотипу.png"}

    </script>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>


<div class="top_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                Город
            </div>
            <div class="col-lg-9">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "horizontal_multilevel",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "section",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="aside">
                <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vertical_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "section",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "catalog",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "vertical_multilevel"
	),
	false
); ?>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="section">

            