<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//Подключим модуль информационные блоки
if (CModule::IncludeModule('iblock')) {
    if (isset($arResult['ITEM']['PREVIEW_PICTURE'])) {
        $item = $arResult['ITEM'];
        $renderImage = CFile::ResizeImageGet($item["PREVIEW_PICTURE"]['ID'], array("width" => 240, "height" => 240), BX_RESIZE_IMAGE_PROPORTIONAL, false);
        $arResult['NEW_SRC'] = $renderImage['src'];
    }
}

$component = $this->__component;
//Добавим в кеш полученный результат
$component->setResultCacheKeys(array('NEW_SRC'));