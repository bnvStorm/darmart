<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?// if ($USER->IsAdmin()) {echo '<pre>'; var_dump($arResult); echo '</pre>'; } ?>


<?foreach($arResult["ITEMS"] as $arItem):?>
    <? if(is_array($arItem["PREVIEW_PICTURE"])):?>
        <div class="owl-item active" style="width: 720px;">
            <div class="item">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Кондиционеры"
                     class="img-responsive">
            </div>
        </div>
    <?endif;?>
<?endforeach;?>