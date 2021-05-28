<?php
$arUrlRewrite=array (
  17 => 
  array (
    'CONDITION' => '#^={"/catalog/".$arResult["URL_TEMPLATES"]["smart_filter"]}\\??(.*)#',
    'RULE' => '&$1',
    'ID' => 'bitrix:catalog.smart.filter',
    'PATH' => '/bitrix/templates/corporation/components/bitrix/catalog/catalog/section.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/company/partners/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/partners/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/info/stock/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/info/stock/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/info/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/info/news/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/projects/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/articles/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
