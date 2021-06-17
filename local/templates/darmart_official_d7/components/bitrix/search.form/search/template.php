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
$this->setFrameMode(true); ?>

<div class="search-form" id="search">
    <form action="<?= $arResult["FORM_ACTION"] ?>">

        <? if ($arParams["USE_SUGGEST"] === "Y"): ?><? $APPLICATION->IncludeComponent(
            "bitrix:search.suggest.input",
            "",
            array(
                "NAME" => "q",
                "VALUE" => "",
                "INPUT_SIZE" => 15,
                "DROPDOWN_SIZE" => 10,
            ),
            $component, array("HIDE_ICONS" => "Y")
        ); ?><? else: ?>
        <input  id="search_btn" class="form-control" type="text" name="q" value="" size="15" maxlength="50"
               placeholder="Поиск товара по каталогу"/><? endif; ?></td>

        <button name="s" type="button" value="<?= GetMessage("BSF_T_SEARCH_BUTTON"); ?>"><i class="fa fa-search"></i>
        </button>
        <!--		<input name="s" type="submit" value="--><? //=GetMessage("BSF_T_SEARCH_BUTTON");?><!--" />-->
        <script type="text/javascript">

            $(document).ready(function() {
                $('#search_btn').keydown(function(e) {
                    if(e.keyCode === 13) {
                        fbq('track', 'Search');
                    }
                });
            });
        </script>
    </form>
</div>