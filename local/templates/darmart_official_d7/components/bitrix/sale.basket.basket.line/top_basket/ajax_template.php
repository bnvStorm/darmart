<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->IncludeLangFile('template.php');

$cartId = $arParams['cartId'];

require(realpath(dirname(__FILE__)) . '/top_template.php');

if ($arParams["SHOW_PRODUCTS"] == "Y" && ($arResult['NUM_PRODUCTS'] > 0 || !empty($arResult['CATEGORIES']['DELAY']))) {
    ?>
    <ul class="dropdown-menu pull-right">
        <li>
            <div data-role="basket-item-list" class="bx-basket-item-list">


                <div id="<?= $cartId ?>products" class="bx-basket-item-list-container">
                    <? foreach ($arResult["CATEGORIES"] as $category => $items):
                        if (empty($items))
                            continue;
                        ?>

                        <? foreach ($items as $v):?>
                        <div class="bx-basket-item-list-item">
                            <div class="bx-basket-item-list-item-img">
                                <? if ($arParams["SHOW_IMAGE"] == "Y" && $v["PICTURE_SRC"]):?>
                                    <? if ($v["DETAIL_PAGE_URL"]):?>
                                        <a href="<?= $v["DETAIL_PAGE_URL"] ?>"><img src="<?= $v["PICTURE_SRC"] ?>"
                                                                                    alt="<?= $v["NAME"] ?>"></a>
                                    <? else:?>
                                        <img src="<?= $v["PICTURE_SRC"] ?>" alt="<?= $v["NAME"] ?>"/>
                                    <? endif ?>
                                <? endif ?>


                            </div>
                            <div class="basket-txt">
                                <div class="bx-basket-item-list-item-name">
                                    <? if ($v["DETAIL_PAGE_URL"]):?>
                                        <a href="<?= $v["DETAIL_PAGE_URL"] ?>"><?= $v["NAME"] ?></a>
                                    <? else:?>
                                        <?= $v["NAME"] ?>
                                    <? endif ?>
                                </div>
                                <? if (true):/*$category != "SUBSCRIBE") TODO */
                                    ?>
                                    <div class="bx-basket-item-list-item-price-block">
                                        <? if ($arParams["SHOW_PRICE"] == "Y"):?>
                                            <div class="bx-basket-item-list-item-price">
                                                <strong><?= $v["PRICE_FMT"] ?></strong></div>
                                            <? if ($v["FULL_PRICE"] != $v["PRICE_FMT"]):?>
                                                <div class="bx-basket-item-list-item-price-old"><?= $v["FULL_PRICE"] ?></div>
                                            <? endif ?>
                                        <? endif ?>
                                        <? if ($arParams["SHOW_SUMMARY"] == "Y"):?>
                                            <div class="bx-basket-item-list-item-price-summ">
                                                <strong><?= $v["QUANTITY"] ?></strong> <?= $v["MEASURE_NAME"] ?> <?= GetMessage("TSB1_SUM") ?>
                                                <strong><?= $v["SUM"] ?></strong>
                                            </div>
                                        <? endif ?>
                                    </div>
                                <? endif ?>
                            </div>

                            <button type="button" onclick="<?= $cartId ?>.removeItemFromCart(<?= $v['ID'] ?>)" title="<?= GetMessage("TSB1_DELETE") ?>" class="btn-del-cart">
                                <span class="pe-7s-close"></span>
                            </button>
                        </div>
                    <? endforeach ?>
                    <? endforeach ?>
                </div>
            </div>
        </li>
        <li>
            <p class="text-right">
                <a class="btn pull-left" href="/personal/cart/">Открыть корзину</a>
                <? if ($arParams["PATH_TO_ORDER"] && $arResult["CATEGORIES"]["READY"]):?>
                    <a href="<?= $arParams["PATH_TO_ORDER"] ?>"
                       class="btn main-btn pull-right"><?= GetMessage("TSB1_2ORDER") ?></a>
                <? endif ?>
            </p>
        </li>
    </ul>
    <script>
        BX.ready(function () {
            <?=$cartId?>.fixCart();
        });
    </script>
    <?
}