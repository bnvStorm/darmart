<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<aside id="column-right" class="col-sm-3 hidden-xs">
    <div class="list-group">
    <?php foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue; ?>
        <a href="<?=$arItem["LINK"]?>" class="list-group-item"><?=$arItem["TEXT"]?></a>
    <?php endforeach?>
    </div>
</aside>
<?php endif?>
