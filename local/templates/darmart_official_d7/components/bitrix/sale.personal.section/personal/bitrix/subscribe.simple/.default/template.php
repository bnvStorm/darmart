<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

use Bitrix\Main\Localization\Loc;
?>

<?php if(count($arResult["ERRORS"]) > 0): ?>
	<?php foreach($arResult["ERRORS"] as $strError): ?>
		<p class="errortext"><?echo $strError?></p>
	<?php endforeach ?>
<?php elseif(count($arResult["RUBRICS"]) <= 0): ?>
	<p class="errortext"><?echo Loc::getMessage("CT_BSS_NO_RUBRICS_FOUND")?></p>
<?php else: ?>
    <?if($arResult["MESSAGE"]):?>
        <div class="alert alert-success"><i class="fa fa-check-circle"></i><?=Loc::getMessage('UPDATE_SUCCESS')?></div>
    <?endif?>

    <form action="<?= $arResult["FORM_ACTION"]?>" method="post" enctype="multipart/form-data">
        <?echo bitrix_sessid_post();?>
        <div class="form-group">
            <label class="control-label"><?=Loc::getMessage('SUBSCRIBE')?>:</label>
            <label class="radio-inline">
                <input type="radio" name="newsletter" value="1" <?if($arResult["RUBRICS"][0]['CHECKED']) echo "checked";?>>
                Да
            </label>
            <label class="radio-inline">
                <input type="radio" name="newsletter" value="0" <?if(!$arResult["RUBRICS"][0]['CHECKED']) echo "checked";?>>
                Нет
            </label>
        </div>

        <input class="rubric-checkbox" style="display: none;" type="checkbox" name="RUB_ID[]" value="1" <?if($arResult["RUBRICS"][0]['CHECKED']) echo "checked";?>>
        <input name="FORMAT" value="html" id="FORMAT_html" type="hidden">

        <div class="buttons-overflow clearfix">
            <div class="pull-left"><a href="/personal/" class="btn"><?=Loc::getMessage('BACK')?></a></div>
            <div class="pull-right">
                <input type="submit" name="Update" value="<?=Loc::getMessage('SUBMIT')?>" class="btn main-btn">
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function(){
            $('input[type=radio]').click(function(e){

                if(e.target.value == 1)
                    $('.rubric-checkbox').prop('checked', true);
                else
                    $('.rubric-checkbox').prop('checked', false);

            });
        });
    </script>
<?endif?>

