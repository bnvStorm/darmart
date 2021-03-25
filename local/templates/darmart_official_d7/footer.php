<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Loc::loadMessages(__FILE__);

?>
<?php
$url= $APPLICATION->GetCurPage();
$catalogurl   = '/catalog/';
if ((strpos($url, $catalogurl) !== false) or ($APPLICATION->GetCurPage() == SITE_DIR)):?>

<? else:  ?>
</div>
    <?php endif; ?>
</div>
</div>
</div>

<div class="footer-service">
    <div class="container">
        <div class="service-container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="pe-7s-car"></span>
                        <div class="title">Бесплатная доставка</div>
                        <div class="text">При заказе от 1000 тг.</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="pe-7s-comment"></span>
                        <div class="title">Онлайн поддержка</div>
                        <div class="text">Время работы: 24/7</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="pe-7s-piggy"></span>
                        <div class="title">Возвращаем деньги</div>
                        <div class="text">Если товар не понравился</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="pe-7s-gift"></span>
                        <div class="title">Постоянные скидки</div>
                        <div class="text">Они уже действуют</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/templates/darmart_official_d7/inc/footer/bottom_links.php"
                )
            );?>
        </div>
    </div>
    <div class="footer-powered">
        <div class="container">
            <div class="powered">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/templates/darmart_official_d7/inc/footer/copy_left.php"
                    )
                );?>
            </div>
            <div class="copyright">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/templates/darmart_official_d7/inc/footer/copy_right.php"
                    )
                );?>
            </div>
        </div>

    </div>
</footer>
<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
<div id="lightbox" class="lightbox" style="display: none;">
    <div class="lb-outerContainer">
        <div class="lb-container"><img class="lb-image"
                                       src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
            <div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div>
            <div class="lb-loader"><a class="lb-cancel"></a></div>
        </div>
    </div>
    <div class="lb-dataContainer">
        <div class="lb-data">
            <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
            <div class="lb-closeContainer"><a class="lb-close"></a></div>
        </div>
    </div>
</div>


</body>
</html>