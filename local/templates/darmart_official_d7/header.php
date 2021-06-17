<?
/** @var CMain $APPLICATION */

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
$assets_manager = Asset::getInstance();
//$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.3.1.min.js');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/jquery-2.1.1.min.js');

$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');

$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/fa4/css/font-awesome.min.css');

$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/slick.min.js');

$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/lightbox.min.css');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/lightbox.min.js');

$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');

$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/moment.js');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/ru-ru.js');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap-datetimepicker.min.js');
$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-datetimepicker.min.css');

$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/stylesheet.css');
$assets_manager->addCss(SITE_TEMPLATE_PATH . '/css/addons.css');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/common.js');
$assets_manager->addJs(SITE_TEMPLATE_PATH . '/js/slider-settings.js');

$assets_manager->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
$assets_manager->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
$assets_manager->addString('<link rel="preconnect" href="https://fonts.gstatic.com">');
$assets_manager->addString('<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">');
$assets_manager->addString('<link rel="shortcut icon" type="image/x-icon" href="/favic.png" />');

/*\CJSCore::RegisterExt('moment', [
    'js' => SITE_TEMPLATE_PATH . '/js/moment.js',
    'rel' => [],
]);

\CJSCore::RegisterExt('datetimepicker', [
    'js' => SITE_TEMPLATE_PATH . '/js/bootstrap-datetimepicker.min.js',
    'css' => SITE_TEMPLATE_PATH . '/css/bootstrap-datetimepicker.min.css',
    'rel' => ['moment', 'ruru'],
]);

\CJSCore::RegisterExt('ruru', [
    'js' => SITE_TEMPLATE_PATH . '/js/ru-ru.js',
    'rel' => [],
]);

CUtil::InitJSCore(['moment', 'datetimepicker', 'ruru']);*/

?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>

    <?php $APPLICATION->ShowHead(false); ?>
    <title><?php $APPLICATION->ShowTitle(false); ?></title>
    <?$APPLICATION->ShowViewContent('microdata');?>
    <?$APPLICATION->ShowViewContent('mycontent');?>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '369974667803114');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=2838276739778858&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172651624-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-172651624-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5T78VJ4');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="common-home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T78VJ4"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b15792518/crm/site_button/loader_2_rcejem.js');
</script>

<? $APPLICATION->ShowPanel(); ?>
<nav id="top">
    <div class="container">
        <div id="top-links">
            <ul class="nav pull-left list-inline">
                <li>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/darmart_official_d7/inc/header/top_phone.php"
                        )
                    ); ?>
                <li>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/darmart_official_d7/inc/header/top_email.php"
                        )
                    ); ?>
                </li>
            </ul>
            <ul class="nav pull-right list-inline">
                <li></li>
                <li>
                    <form action="#" method="post"
                          enctype="multipart/form-data" id="form-language">
                        <div class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/ru-ru.png" alt="Русский" title="Русский">
                                Язык <span class="pe-7s-angle-down"></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="language-select btn-link-drop" type="button" name="ru-ru"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/img/ru-ru.png" alt="Русский"
                                                title="Русский">
                                        Русский
                                    </button>
                                </li>
                                <li>
                                    <button class="language-select btn-link-drop" type="button" name="kk-kz"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/img/kk-kz.png" alt="Қазақша"
                                                title="Қазақша">
                                        Қазақша
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </li>
                <li><a class="btn-link" href="/personal/favorites/" id="wishlist-total"
                       title="<?= Loc::getMessage('BOOKMARKS') ?>">
                        <?= Loc::getMessage('BOOKMARKS') ?></a></li>
                <li class="dropdown">
                    <a href="#" title="<?= Loc::getMessage('PERSONAL_AREA') ?>" class="btn-link dropdown-toggle"
                       data-toggle="dropdown">
                        <?= Loc::getMessage('PERSONAL_AREA') ?>
                        <span class="pe-7s-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "auth",
                            array(
                                "COMPONENT_TEMPLATE" => "auth",
                                "FORGOT_PASSWORD_URL" => "/personal/",
                                "PROFILE_URL" => "/personal/profile.php",
                                "REGISTER_URL" => "/personal/registration.php",
                                "SHOW_ERRORS" => "N"
                            ),
                            false
                        ); ?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/templates/darmart_official_d7/inc/header/counters.php"
        )
    ); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div id="logo">
                    <a href="<?= SITE_DIR ?>">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/templates/darmart_official_d7/inc/header/logo.php"
                            )
                        ); ?>
                    </a>
                </div>
            </div>

            <div class="col-sm-9">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "search",
                    array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N"
                    )
                ); ?>
                <div id="cart">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "top_basket",
                        array(
                            "HIDE_ON_BASKET_PAGES" => "N",
                            "PATH_TO_AUTHORIZE" => "",
                            "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",
                            "PATH_TO_ORDER" => SITE_DIR . "personal/order/make/",
                            "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                            "PATH_TO_PROFILE" => SITE_DIR . "personal/",
                            "PATH_TO_REGISTER" => SITE_DIR . "login/",
                            "POSITION_FIXED" => "N",
                            "SHOW_AUTHOR" => "N",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_PERSONAL_LINK" => "Y",
                            "SHOW_PRODUCTS" => "Y",
                            "SHOW_REGISTRATION" => "N",
                            "SHOW_TOTAL_PRICE" => "Y",
                            "COMPONENT_TEMPLATE" => "top_basket",
                            "SHOW_DELAY" => "Y",
                            "SHOW_NOTAVAIL" => "N",
                            "SHOW_IMAGE" => "Y",
                            "SHOW_PRICE" => "Y",
                            "SHOW_SUMMARY" => "Y",
                            "MAX_IMAGE_SIZE" => "70"
                        ),
                        false
                    ); ?>
                </div>
                <div class="online-help-box">
                    <span class="pe-7s-headphones"></span>
                    <div class="title">Нужна помощь?</div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/local/templates/darmart_official_d7/inc/header/help_phone.php"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu" class="navbar">
    <div class="container">

        <div class="navbar-header">
            <div id="mobile-cart"><span class="pe-7s-cart"></span><i></i></div>
            <div id="info-btn"><span class="pe-7s-info"></span></div>
            <div id="mobile-sidebar-btn" class="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navbar-brand">
                <a href="#">
                    <img src="/local/templates/darmart_official_d7/img/logo.png" title="DARMART|Интернет магазин бытовой техники" alt="DARMART" class="img-responsive"></a>
            </div>
        </div>

        <div class="sidebar" id="mobile-sidebar">
            <? $APPLICATION->IncludeComponent("bitrix:menu", "menu", array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            ); ?>
        </div>

    </div>
</nav>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12" style="min-height: 600px">
            <?php if ($APPLICATION->GetCurPage() !== SITE_DIR): ?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "bread",
                    array(
                        "COMPONENT_TEMPLATE" => "bread",
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    ),
                    false
                ); ?>
            <?php endif; ?>
            <?php
            $url = $APPLICATION->GetCurPage();
            $catalogurl = '/catalog/';
            $perurl = '/personal/';
            if ((SITE_DIR !== $url) && ((strpos($url, $catalogurl)) === false) && ((strpos($url, $perurl)) === false)): ?>
            <div class="card"  ;>
                <?php endif; ?>
