<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogProductsViewedComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if (isset($arResult['ITEM'])) {
    $item = $arResult['ITEM'];
    $areaId = $arResult['AREA_ID'];
    $itemIds = array(
        'ID' => $areaId,
        'PICT' => $areaId . '_pict',
        'SECOND_PICT' => $areaId . '_secondpict',
        'PICT_SLIDER' => $areaId . '_pict_slider',
        'STICKER_ID' => $areaId . '_sticker',
        'SECOND_STICKER_ID' => $areaId . '_secondsticker',
        'QUANTITY' => $areaId . '_quantity',
        'QUANTITY_DOWN' => $areaId . '_quant_down',
        'QUANTITY_UP' => $areaId . '_quant_up',
        'QUANTITY_MEASURE' => $areaId . '_quant_measure',
        'QUANTITY_LIMIT' => $areaId . '_quant_limit',
        'BUY_LINK' => $areaId . '_buy_link',
        'BASKET_ACTIONS' => $areaId . '_basket_actions',
        'NOT_AVAILABLE_MESS' => $areaId . '_not_avail',
        'SUBSCRIBE_LINK' => $areaId . '_subscribe',
        'COMPARE_LINK' => $areaId . '_compare_link',
        'PRICE' => $areaId . '_price',
        'PRICE_OLD' => $areaId . '_price_old',
        'PRICE_TOTAL' => $areaId . '_price_total',
        'DSC_PERC' => $areaId . '_dsc_perc',
        'SECOND_DSC_PERC' => $areaId . '_second_dsc_perc',
        'PROP_DIV' => $areaId . '_sku_tree',
        'PROP' => $areaId . '_prop_',
        'DISPLAY_PROP_DIV' => $areaId . '_sku_prop',
        'BASKET_PROP_DIV' => $areaId . '_basket_prop',
    );
    $obName = 'ob' . preg_replace("/[^a-zA-Z0-9_]/", "x", $areaId);
    $isBig = isset($arResult['BIG']) && $arResult['BIG'] === 'Y';

    $productTitle = isset($item['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']) && $item['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] != ''
        ? $item['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
        : $item['NAME'];

    $imgTitle = isset($item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']) && $item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'] != ''
        ? $item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
        : $item['NAME'];

    $skuProps = array();

    $haveOffers = !empty($item['OFFERS']);
    if ($haveOffers) {
        $actualItem = isset($item['OFFERS'][$item['OFFERS_SELECTED']])
            ? $item['OFFERS'][$item['OFFERS_SELECTED']]
            : reset($item['OFFERS']);
    } else {
        $actualItem = $item;
    }

    if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
        $price = $item['ITEM_START_PRICE'];
        $minOffer = $item['OFFERS'][$item['ITEM_START_PRICE_SELECTED']];
        $measureRatio = $minOffer['ITEM_MEASURE_RATIOS'][$minOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
        $morePhoto = $item['MORE_PHOTO'];
    } else {
        $price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
        $measureRatio = $price['MIN_QUANTITY'];
        $morePhoto = $actualItem['MORE_PHOTO'];
    }

    $showSlider = is_array($morePhoto) && count($morePhoto) > 1;
    $showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($item['CATALOG_SUBSCRIBE'] === 'Y' || $haveOffers);

    $discountPositionClass = isset($arResult['BIG_DISCOUNT_PERCENT']) && $arResult['BIG_DISCOUNT_PERCENT'] === 'Y'
        ? 'product-item-label-big'
        : 'product-item-label-small';
    $discountPositionClass .= $arParams['DISCOUNT_POSITION_CLASS'];

    $labelPositionClass = isset($arResult['BIG_LABEL']) && $arResult['BIG_LABEL'] === 'Y'
        ? 'product-item-label-big'
        : 'product-item-label-small';
    $labelPositionClass .= $arParams['LABEL_POSITION_CLASS'];

    $buttonSizeClass = isset($arResult['BIG_BUTTONS']) && $arResult['BIG_BUTTONS'] === 'Y' ? 'btn-md' : 'btn-sm';
    $itemHasDetailUrl = isset($item['DETAIL_PAGE_URL']) && $item['DETAIL_PAGE_URL'] != '';
    ?>

<!--    <div class="row" id="--><?//= $areaId ?><!--" data-entity="item">-->
        <?
        $documentRoot = Main\Application::getDocumentRoot();
        $templatePath = mb_strtolower($arResult['TYPE']) . '/template.php';
        $file = new Main\IO\File($documentRoot . $templateFolder . '/' . $templatePath);
        if ($file->isExists()) {
//			include($file->getPath());
            ?>
            <div class="product-thumb transition" id="<?= $areaId ?>" data-entity="item">

                <div class="image">
                    <? if ($itemHasDetailUrl): ?>
                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $imgTitle ?>" data-entity="image-wrapper">
                        <? if (isset($arResult['NEW_SRC'])): ?>
                            <img alt="<?= $item["NAME"] ?>" src="<?= $arResult['NEW_SRC'] ?>" title="<?=$imgTitle?>" class="img-responsive"/>
                        <? else: ?>
                            <img alt="<?= $item["NAME"] ?>" src="<?= SITE_TEMPLATE_PATH . '/img/no_photo.png' ?>" title="<?=$imgTitle?>" class="img-responsive"/>
                        <? endif; ?>
<!--                        <img src="--><?//=$item['PREVIEW_PICTURE']['SRC']?><!--" alt="--><?//=$imgTitle?><!--" title="--><?//=$imgTitle?><!--" class="img-responsive">-->
	                <? endif; ?>
		             <input type="hidden" class="product-item-image-slider-slide-container slide" id="<?= $itemIds['PICT_SLIDER'] ?>">
		             <input type="hidden" class="product-item-image-original" id="<?= $itemIds['PICT'] ?>">
		                <?
                            if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y') {
                        ?>
                     <div class="product-item-label-ring <?= $discountPositionClass ?>" id="<?= $itemIds['DSC_PERC'] ?>"
				<?= ($price['PERCENT'] > 0 ? '' : 'style="display: none;"') ?>>
				<span><?= -$price['PERCENT'] ?>%</span>
			</div>
                     <?
                             }
                         if ($item['LABEL']) {
            ?>
            <div class="product-item-label-text <?= $labelPositionClass ?>" id="<?= $itemIds['STICKER_ID'] ?>">
				<?
                if (!empty($item['LABEL_ARRAY_VALUE'])) {
                    foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value) {
                        ?>
                        <div<?= (!isset($item['LABEL_PROP_MOBILE'][$code]) ? ' class="hidden-xs"' : '') ?>>
							<span title="<?= $value ?>"><?= $value ?></span>
						</div>
                        <?
                    }
                }
                ?>
			</div>
            <?
        }
                        ?>
                        <? if ($itemHasDetailUrl): ?>
                    </a>
                <? endif; ?>
                </div>
            <?
            if (
                $arParams['DISPLAY_COMPARE']
                && (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
            ) {
            ?>
                <div class="quiqview-continer">
                    <div class="quiqview-btns">
                        <button class="icon-btn add-fav-btn"
                                type="button"
                                data-product-id="<?= $item['ID'] ?>"
                                data-toggle="tooltip"
                                data-original-title="В закладки">
                            <span class="pe-7s-like"></span>
                        </button>
                        <button id="<?= $itemIds['COMPARE_LINK'] ?>"
                                class="icon-btn"
                                type="button"
                                data-toggle="tooltip"
                                data-original-title="В сравнение">
                            <span class="pe-7s-repeat"></span>
                        </button>

                        <?/*
                        <label id="<?= $itemIds['COMPARE_LINK'] ?>" style="display:block;">
                            <input type="checkbox" data-entity="compare-checkbox" style="display: none;">
                            <a class="icon-btn" href=""><span class="pe-7s-repeat"></span></a>
                        </label>
                        */?>

                    </div>
                </div>
                <?
                }
                ?>
                <div class="caption">
                <div class="rating">
                    <?
                    $APPLICATION->IncludeComponent(
                        'bitrix:iblock.vote',
                        'stars',
                        array(
                            'CUSTOM_SITE_ID' => isset($arParams['CUSTOM_SITE_ID']) ? $arParams['CUSTOM_SITE_ID'] : null,
                            'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                            'ELEMENT_ID' => $arResult['ITEM']['ID'],
                            'ELEMENT_CODE' => '',
                            'MAX_VOTE' => '5',
                            'VOTE_NAMES' => array('1', '2', '3', '4', '5'),
                            'SET_STATUS_404' => 'N',
                            'DISPLAY_AS_RATING' => $arParams['VOTE_DISPLAY_AS_RATING'],
                            'CACHE_TYPE' => $arParams['CACHE_TYPE'],
                            'CACHE_TIME' => $arParams['CACHE_TIME']
                        ),
                        $component,
                        array('HIDE_ICONS' => 'Y')
                    );
                    ?>

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
<!--                        <span class="price-tax">Без налога: 68 500 тг</span>-->
                    <input type="hidden" id="<?= $itemIds['PROP_DIV'] ?>">
                    </p>
                    <div class="product-item-info-container product-item-hidden"
                         data-entity="quantity-block">
                            <div class="product-item-amount-field-container">
                                                    <span class="product-item-amount-field-btn-minus no-select"
                                                          id="<?= $itemIds['QUANTITY_DOWN'] ?>"></span>
                                <input class="product-item-amount-field"
                                       id="<?= $itemIds['QUANTITY'] ?>" type="number"
                                       name="<?= $arParams['PRODUCT_QUANTITY_VARIABLE'] ?>"
                                       value="<?= $measureRatio ?>">
                                <span class="product-item-amount-field-btn-plus no-select"
                                      id="<?= $itemIds['QUANTITY_UP'] ?>"></span>
                                <span class="product-item-amount-description-container">
											<span id="<?= $itemIds['QUANTITY_MEASURE'] ?>"><?= $actualItem['ITEM_MEASURE']['TITLE'] ?></span>
											<span id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
										</span>
                            </div>
                    </div>
                    <div class="button-group">
                            <?
                            if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                                    ?>
                                    <a class="btn main-btn <?= $buttonSizeClass ?>"
                                       id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                                       rel="nofollow"
                                        <?= ($actualItem['CAN_BUY'] ? 'style="display: none;"' : '') ?>>
                                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                                    </a>
                                    <div id="<?= $itemIds['BASKET_ACTIONS'] ?>" <?= ($actualItem['CAN_BUY'] ? '' : 'style="display: none;"') ?>>
                                        <a class="btn main-btn <?= $buttonSizeClass ?>"
                                           id="<?= $itemIds['BUY_LINK'] ?>"
                                           href="javascript:void(0)" rel="nofollow">
                                            <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                                        </a>
                                    </div>
                                <?
                            }
                            ?>
                    </div>
                <?
                if (!empty($arParams['PRODUCT_BLOCKS_ORDER'])) {
                    foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName) {
                        switch ($blockName) {

                            case 'quantityLimit':
                                if ($arParams['SHOW_MAX_QUANTITY'] !== 'N') {
                                    if ($haveOffers) {
                                        if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                                            ?>
                                            <div class="product-item-info-container product-item-hidden"
                                                 id="<?= $itemIds['QUANTITY_LIMIT'] ?>"
                                                 style="display: none;" data-entity="quantity-limit-block">
                                                <div class="product-item-info-container-title">
                                                    <?= $arParams['MESS_SHOW_MAX_QUANTITY'] ?>:
                                                    <span class="product-item-quantity"
                                                          data-entity="quantity-limit-value"></span>
                                                </div>
                                            </div>
                                            <?
                                        }
                                    } else {
                                        if (
                                            $measureRatio
                                            && (float)$actualItem['CATALOG_QUANTITY'] > 0
                                            && $actualItem['CATALOG_QUANTITY_TRACE'] === 'Y'
                                            && $actualItem['CATALOG_CAN_BUY_ZERO'] === 'N'
                                        ) {
                                            ?>
                                            <div class="product-item-info-container product-item-hidden"
                                                 id="<?= $itemIds['QUANTITY_LIMIT'] ?>">
                                                <div class="product-item-info-container-title">
                                                    <?= $arParams['MESS_SHOW_MAX_QUANTITY'] ?>:
                                                    <span class="product-item-quantity">
											<?
                                            if ($arParams['SHOW_MAX_QUANTITY'] === 'M') {
                                                if ((float)$actualItem['CATALOG_QUANTITY'] / $measureRatio >= $arParams['RELATIVE_QUANTITY_FACTOR']) {
                                                    echo $arParams['MESS_RELATIVE_QUANTITY_MANY'];
                                                } else {
                                                    echo $arParams['MESS_RELATIVE_QUANTITY_FEW'];
                                                }
                                            } else {
                                                echo $actualItem['CATALOG_QUANTITY'] . ' ' . $actualItem['ITEM_MEASURE']['TITLE'];
                                            }
                                            ?>
										</span>
                                                </div>
                                            </div>
                                            <?
                                        }
                                    }
                                }

                                break;

                        }
                    }
                }

                    ?>
            </div>
            </div>
            <?
        }

        if (!$haveOffers) {
            $jsParams = array(
                'PRODUCT_TYPE' => $item['PRODUCT']['TYPE'],
                'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
                'SHOW_ADD_BASKET_BTN' => false,
                'SHOW_BUY_BTN' => true,
                'SHOW_ABSENT' => true,
                'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
                'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
                'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
                'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
                'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
                'BIG_DATA' => $item['BIG_DATA'],
                'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
                'VIEW_MODE' => $arResult['TYPE'],
                'USE_SUBSCRIBE' => $showSubscribe,
                'PRODUCT' => array(
                    'ID' => $item['ID'],
                    'NAME' => $productTitle,
                    'DETAIL_PAGE_URL' => $item['DETAIL_PAGE_URL'],
                    'PICT' => $item['SECOND_PICT'] ? $item['PREVIEW_PICTURE_SECOND'] : $item['PREVIEW_PICTURE'],
                    'CAN_BUY' => $item['CAN_BUY'],
                    'CHECK_QUANTITY' => $item['CHECK_QUANTITY'],
                    'MAX_QUANTITY' => $item['CATALOG_QUANTITY'],
                    'STEP_QUANTITY' => $item['ITEM_MEASURE_RATIOS'][$item['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
                    'QUANTITY_FLOAT' => is_float($item['ITEM_MEASURE_RATIOS'][$item['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
                    'ITEM_PRICE_MODE' => $item['ITEM_PRICE_MODE'],
                    'ITEM_PRICES' => $item['ITEM_PRICES'],
                    'ITEM_PRICE_SELECTED' => $item['ITEM_PRICE_SELECTED'],
                    'ITEM_QUANTITY_RANGES' => $item['ITEM_QUANTITY_RANGES'],
                    'ITEM_QUANTITY_RANGE_SELECTED' => $item['ITEM_QUANTITY_RANGE_SELECTED'],
                    'ITEM_MEASURE_RATIOS' => $item['ITEM_MEASURE_RATIOS'],
                    'ITEM_MEASURE_RATIO_SELECTED' => $item['ITEM_MEASURE_RATIO_SELECTED'],
                    'MORE_PHOTO' => $item['MORE_PHOTO'],
                    'MORE_PHOTO_COUNT' => $item['MORE_PHOTO_COUNT']
                ),
                'BASKET' => array(
                    'ADD_PROPS' => $arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y',
                    'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
                    'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
                    'EMPTY_PROPS' => empty($item['PRODUCT_PROPERTIES']),
                    'BASKET_URL' => $arParams['~BASKET_URL'],
                    'ADD_URL_TEMPLATE' => $arParams['~ADD_URL_TEMPLATE'],
                    'BUY_URL_TEMPLATE' => $arParams['~BUY_URL_TEMPLATE']
                ),
                'VISUAL' => array(
                    'ID' => $itemIds['ID'],
                    'PICT_ID' => $item['SECOND_PICT'] ? $itemIds['SECOND_PICT'] : $itemIds['PICT'],
                    'PICT_SLIDER_ID' => $itemIds['PICT_SLIDER'],
                    'QUANTITY_ID' => $itemIds['QUANTITY'],
                    'QUANTITY_UP_ID' => $itemIds['QUANTITY_UP'],
                    'QUANTITY_DOWN_ID' => $itemIds['QUANTITY_DOWN'],
                    'PRICE_ID' => $itemIds['PRICE'],
                    'PRICE_OLD_ID' => $itemIds['PRICE_OLD'],
                    'PRICE_TOTAL_ID' => $itemIds['PRICE_TOTAL'],
                    'BUY_ID' => $itemIds['BUY_LINK'],
                    'BASKET_PROP_DIV' => $itemIds['BASKET_PROP_DIV'],
                    'BASKET_ACTIONS_ID' => $itemIds['BASKET_ACTIONS'],
                    'NOT_AVAILABLE_MESS' => $itemIds['NOT_AVAILABLE_MESS'],
                    'COMPARE_LINK_ID' => $itemIds['COMPARE_LINK'],
                    'SUBSCRIBE_ID' => $itemIds['SUBSCRIBE_LINK']
                )
            );
        } else {
            $jsParams = array(
                'PRODUCT_TYPE' => $item['PRODUCT']['TYPE'],
                'SHOW_QUANTITY' => false,
                'SHOW_ADD_BASKET_BTN' => false,
                'SHOW_BUY_BTN' => true,
                'SHOW_ABSENT' => true,
                'SHOW_SKU_PROPS' => false,
                'SECOND_PICT' => $item['SECOND_PICT'],
                'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
                'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
                'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
                'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
                'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
                'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
                'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
                'BIG_DATA' => $item['BIG_DATA'],
                'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
                'VIEW_MODE' => $arResult['TYPE'],
                'USE_SUBSCRIBE' => $showSubscribe,
                'DEFAULT_PICTURE' => array(
                    'PICTURE' => $item['PRODUCT_PREVIEW'],
                    'PICTURE_SECOND' => $item['PRODUCT_PREVIEW_SECOND']
                ),
                'VISUAL' => array(
                    'ID' => $itemIds['ID'],
                    'PICT_ID' => $itemIds['PICT'],
                    'SECOND_PICT_ID' => $itemIds['SECOND_PICT'],
                    'PICT_SLIDER_ID' => $itemIds['PICT_SLIDER'],
                    'QUANTITY_ID' => $itemIds['QUANTITY'],
                    'QUANTITY_UP_ID' => $itemIds['QUANTITY_UP'],
                    'QUANTITY_DOWN_ID' => $itemIds['QUANTITY_DOWN'],
                    'QUANTITY_MEASURE' => $itemIds['QUANTITY_MEASURE'],
                    'QUANTITY_LIMIT' => $itemIds['QUANTITY_LIMIT'],
                    'PRICE_ID' => $itemIds['PRICE'],
                    'PRICE_OLD_ID' => $itemIds['PRICE_OLD'],
                    'PRICE_TOTAL_ID' => $itemIds['PRICE_TOTAL'],
                    'TREE_ID' => $itemIds['PROP_DIV'],
                    'TREE_ITEM_ID' => $itemIds['PROP'],
                    'BUY_ID' => $itemIds['BUY_LINK'],
                    'DSC_PERC' => $itemIds['DSC_PERC'],
                    'SECOND_DSC_PERC' => $itemIds['SECOND_DSC_PERC'],
                    'DISPLAY_PROP_DIV' => $itemIds['DISPLAY_PROP_DIV'],
                    'BASKET_ACTIONS_ID' => $itemIds['BASKET_ACTIONS'],
                    'NOT_AVAILABLE_MESS' => $itemIds['NOT_AVAILABLE_MESS'],
                    'COMPARE_LINK_ID' => $itemIds['COMPARE_LINK'],
                    'SUBSCRIBE_ID' => $itemIds['SUBSCRIBE_LINK']
                ),
                'BASKET' => array(
                    'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
                    'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
                    'SKU_PROPS' => $item['OFFERS_PROP_CODES'],
                    'BASKET_URL' => $arParams['~BASKET_URL'],
                    'ADD_URL_TEMPLATE' => $arParams['~ADD_URL_TEMPLATE'],
                    'BUY_URL_TEMPLATE' => $arParams['~BUY_URL_TEMPLATE']
                ),
                'PRODUCT' => array(
                    'ID' => $item['ID'],
                    'NAME' => $productTitle,
                    'DETAIL_PAGE_URL' => $item['DETAIL_PAGE_URL'],
                    'MORE_PHOTO' => $item['MORE_PHOTO'],
                    'MORE_PHOTO_COUNT' => $item['MORE_PHOTO_COUNT']
                ),
                'OFFERS' => array(),
                'OFFER_SELECTED' => 0,
                'TREE_PROPS' => array()
            );

            if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && !empty($item['OFFERS_PROP'])) {
                $jsParams['SHOW_QUANTITY'] = $arParams['USE_PRODUCT_QUANTITY'];
                $jsParams['SHOW_SKU_PROPS'] = $item['OFFERS_PROPS_DISPLAY'];
                $jsParams['OFFERS'] = $item['JS_OFFERS'];
                $jsParams['OFFER_SELECTED'] = $item['OFFERS_SELECTED'];
                $jsParams['TREE_PROPS'] = $skuProps;
            }
        }

        if ($arParams['DISPLAY_COMPARE']) {
            $jsParams['COMPARE'] = array(
                'COMPARE_URL_TEMPLATE' => $arParams['~COMPARE_URL_TEMPLATE'],
                'COMPARE_DELETE_URL_TEMPLATE' => $arParams['~COMPARE_DELETE_URL_TEMPLATE'],
                'COMPARE_PATH' => $arParams['COMPARE_PATH']
            );
        }

        if ($item['BIG_DATA']) {
            $jsParams['PRODUCT']['RCM_ID'] = $item['RCM_ID'];
        }

        $jsParams['PRODUCT_DISPLAY_MODE'] = $arParams['PRODUCT_DISPLAY_MODE'];
        $jsParams['USE_ENHANCED_ECOMMERCE'] = $arParams['USE_ENHANCED_ECOMMERCE'];
        $jsParams['DATA_LAYER_NAME'] = $arParams['DATA_LAYER_NAME'];
        $jsParams['BRAND_PROPERTY'] = !empty($item['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
            ? $item['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
            : null;

        $templateData = array(
            'JS_OBJ' => $obName,
            'ITEM' => array(
                'ID' => $item['ID'],
                'IBLOCK_ID' => $item['IBLOCK_ID'],
                'OFFERS_SELECTED' => $item['OFFERS_SELECTED'],
                'JS_OFFERS' => $item['JS_OFFERS']
            )
        );
        ?>
        <script>
            var <?=$obName?> = new JCCatalogItem(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
        </script>
<!--    </div>-->
    <?
    unset($item, $actualItem, $minOffer, $itemIds, $jsParams);
}
