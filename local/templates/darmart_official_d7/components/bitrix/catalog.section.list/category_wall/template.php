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
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'CONT' => 'bx_sitemap',
        'TITLE' => 'bx_sitemap_title',
        'LIST' => 'bx_sitemap_ul',
    ),
    'LINE' => array(
        'CONT' => 'bx_catalog_line',
        'TITLE' => 'bx_catalog_line_category_title',
        'LIST' => 'bx_catalog_line_ul',
        'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'
    ),
    'TEXT' => array(
        'CONT' => 'bx_catalog_text',
        'TITLE' => 'bx_catalog_text_category_title',
        'LIST' => 'bx_catalog_text_ul'
    ),
    'TILE' => array(
        'CONT' => 'bx_catalog_tile',
        'TITLE' => 'bx_catalog_tile_category_title',
        'LIST' => 'bx_catalog_tile_ul',
        'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'
    )
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

if (0 < $arResult["SECTIONS_COUNT"]):?>
<div class="category-card">
    <h3 class="section-title">Стена категорий</h3>
    <div class="row">

        <?php foreach ($arResult['SECTIONS'] as &$arSection):

            $imagePath = SITE_TEMPLATE_PATH . '/img/no_photo.png';

            if($arSection['PICTURE']){
                $imagePath = $arSection['PICTURE']['SRC'];
            }

            ?>
            <div class="col-md-4 col-sm-4">
                <div class="category-wall-box">
                    <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="image">
                        <img src="<?= $imagePath ?>" alt="<? echo $arSection['NAME']; ?>" title="<? echo $arSection['NAME']; ?>">
                    </a>
                    <div class="category-list">
                        <a class="title"
                           href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a>
                        <a class="show-more" href="<? echo $arSection['SECTION_PAGE_URL']; ?>">Смотреть все</a>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>
<?php endif; ?>

