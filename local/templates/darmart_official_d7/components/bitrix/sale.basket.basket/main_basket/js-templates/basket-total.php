<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">

    <?
    if ($arParams['HIDE_COUPON'] !== 'Y') {
        ?>
        <div class="panel-group" id="accordion">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#collapse-coupon" class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#accordion" aria-expanded="false">
                        <?= Loc::getMessage('SBB_COUPON_ENTER') ?>
                        <i class="fa fa-angle-down"></i></a></h4>
            </div>
            <div id="collapse-coupon" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div class="input-group group-inpt">
                        <input type="text" class="form-control" id="" placeholder="" data-entity="basket-coupon-input">

                        <span class="input-group-btn">
                                <input type="button" value="Применить купон" id="button-coupon"
                                       data-loading-text="Загрузка..." class="btn main-btn"
                                       data-entity="basket-coupon-input">
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <?
    }
    ?>


    <!--		<div class="basket-checkout-section">-->
    <!--			<div class="basket-checkout-section-inner--><? //=(($arParams['HIDE_COUPON'] == 'Y') ? ' justify-content-between' : '')?><!--">-->
    <!--				<div class="basket-checkout-block basket-checkout-block-total">-->
    <!--					<div class="basket-checkout-block-total-inner">-->
    <!--						<div class="basket-checkout-block-total-title"></div>-->
    <!--						<div class="basket-checkout-block-total-description">-->
    <!--							{{#WEIGHT_FORMATED}}-->
    <!--								--><? //=Loc::getMessage('SBB_WEIGHT')?><!--: {{{WEIGHT_FORMATED}}}-->
    <!--								{{#SHOW_VAT}}<br>{{/SHOW_VAT}}-->
    <!--							{{/WEIGHT_FORMATED}}-->
    <!--							{{#SHOW_VAT}}-->
    <!--								--><? //=Loc::getMessage('SBB_VAT')?><!--: {{{VAT_SUM_FORMATED}}}-->
    <!--							{{/SHOW_VAT}}-->
    <!--						</div>-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->

    <?
    if ($arParams['HIDE_COUPON'] !== 'Y') {
        ?>
        {{#COUPON_LIST}}
        <div class="basket-checkout-container" data-entity="basket-checkout-aligner">
            <div class="basket-coupon-alert-section">
                <div class="basket-coupon-alert-inner">

                    <div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<strong>{{COUPON}}</strong> - <?= Loc::getMessage('SBB_COUPON') ?> {{JS_CHECK_CODE}}
							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
						</span>
                        <span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?= Loc::getMessage('SBB_DELETE') ?>
						</span>
                    </div>

                </div>
            </div>
        </div>
        {{/COUPON_LIST}}
        <?
    }
    ?>

    <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
            <table class="table main-table">
                <tbody>
                {{#DISCOUNT_PRICE_FORMATED}}
                <tr>
                    <td class="text-right"><strong><?= Loc::getMessage('SBB_TOTAL2') ?>:</strong></td>
                    <td class="text-right">

                        <div class="basket-coupon-block-total-price-old">
                            {{{PRICE_WITHOUT_DISCOUNT_FORMATED}}}
                        </div>

                    </td>
                </tr>
                {{/DISCOUNT_PRICE_FORMATED}}
                <tr>
                    <td class="text-right"><strong><?= Loc::getMessage('SBB_TOTAL') ?>:</strong></td>
                    <td class="text-right">
                        <div class="basket-coupon-block-total-price-current" data-entity="basket-total-price">
                            {{{PRICE_FORMATED}}}
                        </div>
                        {{#DISCOUNT_PRICE_FORMATED}}
                        <div class="basket-coupon-block-total-price-difference">
                            <?= Loc::getMessage('SBB_BASKET_ITEM_ECONOMY') ?>
                            <span style="white-space: nowrap;">{{{DISCOUNT_PRICE_FORMATED}}}</span>
                        </div>
                        {{/DISCOUNT_PRICE_FORMATED}}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="buttons-overflow clearfix">
        <div class="pull-left"><a href="<?= SITE_DIR ?>" class="btn">Продолжить покупки</a></div>
        <div class="pull-right">
            <button class="btn main-btn basket-btn-checkout{{#DISABLE_CHECKOUT}} disabled{{/DISABLE_CHECKOUT}}"
                    data-entity="basket-checkout-button">
                <?= Loc::getMessage('SBB_ORDER') ?>
            </button>
        </div>
    </div>

</script>
