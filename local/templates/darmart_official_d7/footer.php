<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Loc::loadMessages(__FILE__);

?>
<?php
$url = $APPLICATION->GetCurPage();
$catalogurl = '/catalog/';
$perurl = '/personal/';
if ((SITE_DIR !== $url) && ((strpos($url, $catalogurl)) === false) && ((strpos($url, $perurl)) === false)): ?>
    </div>
    <?php endif; ?>

        </div>
    </div>
</div>

<!--quick fix -->
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
                        <div class="title">Быстрая доставка</div>
                        <div class="text">Уточняйте по телефону</div>
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

</body>
</html>
