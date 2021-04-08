<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="col-md-4">
        <div class="banner-box">
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="banner-text" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="name">
                    <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                        <? echo $arItem["NAME"] ?>
                    <? endif; ?>
                </div>
                <div class="title">
                    <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                        <? echo $arItem["PREVIEW_TEXT"]; ?>
                    <? endif; ?>
                </div>
                <a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>">Смотреть все</a>
            </div>
            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                 title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
        </div>
    </div>
<? endforeach; ?>


