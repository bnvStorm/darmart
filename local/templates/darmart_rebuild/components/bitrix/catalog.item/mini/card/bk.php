<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>

<div class="product-thumb transition">
    <div class="image">
        <a href="<?=$item['DETAIL_PAGE_URL']?>">
            <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$imgTitle?>" title="<?=$imgTitle?>" class="img-responsive">
        </a>
    </div>
    <div class="quiqview-continer">
        <div class="quiqview-btns">
            <a class="icon-btn" href="<?=$arElement['COMPARE_URL']?>"><span class="pe-7s-repeat"></span></a>

        </div>
    </div>
    <div class="caption">
        <div class="rating">
            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
        </div>
        <? if ($itemHasDetailUrl): ?>
        <h3><a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>">
                <? endif; ?>
                <?=$productTitle?>
                <? if ($itemHasDetailUrl): ?>
            </a></h3>
    <? endif; ?>
        <div class="description">
            <?  if (!empty($item['DISPLAY_PROPERTIES']))
            {
                ?>
                <dl class="product-item-properties">
                    <?
                    foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
                    {
                        ?>
                        <dt<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
                            <?=$displayProperty['NAME']?>
                        </dt>
                        <dd<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
                            <?=(is_array($displayProperty['DISPLAY_VALUE'])
                                ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                : $displayProperty['DISPLAY_VALUE'])?>
                        </dd>
                        <?
                    }
                    ?>
                </dl>
                <?
            }?>
        </div>
        <p class="price" id="<?=$itemIds['PRICE']?>">
            <?
            if (!empty($price))
            {
                if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers)
                {
                    echo Loc::getMessage(
                        'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                        array(
                            '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                            '#VALUE#' => $measureRatio,
                            '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                        )
                    );
                }
                else
                {
                    echo $price['PRINT_RATIO_PRICE'];
                }
            }
            ?>
            <span class="price-tax">Без налога: 68 500 тг</span>
        </p>
        <div class="button-group">
            <button class="btn main-btn" type="button" onclick="cart.add('105');">В корзину</button>
        </div>

    </div>
</div>