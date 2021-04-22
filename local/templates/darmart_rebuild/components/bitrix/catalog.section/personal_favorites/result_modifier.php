<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

global $USER;

$favorite = \Rating1C\Darmart\App::getInstance()->favorite();

$favoriteIds = $favorite->getProductsIds($USER->GetID());

if(!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS'])){
    foreach ($arResult['ITEMS'] as $key => $item){
        if(!empty($item['OFFERS'])){
            foreach ($item['OFFERS'] as $offerKey => $offer){
                if(in_array($offer['ID'], $favoriteIds)){
                    $newItem = $offer;
                    $newItem['PARENT_PRODUCT'] = $item;
                    $newItem['IS_OFFER'] = true;
                    $arResult['ITEMS'][] = $newItem;
                }
            }
        }
    }


    foreach ($arResult['ITEMS'] as $key => $item) {
        $imageId = is_null($item['PREVIEW_PICTURE']) ? $item['DETAIL_PICTURE']['ID'] : $item['PREVIEW_PICTURE']['ID'];

        if(is_null($imageId)){
            if(!is_null($item['PARENT_PRODUCT']['PREVIEW_PICTURE']))
                $imageId = $item['PARENT_PRODUCT']['PREVIEW_PICTURE']['ID'];
            else if(!is_null($item['PARENT_PRODUCT']['DETAIL_PICTURE']))
            $imageId = $item['PARENT_PRODUCT']['DETAIL_PICTURE']['ID'];
        }

        if($item['IS_OFFER'])
            $arResult['ITEMS'][$key]['DETAIL_PAGE_URL'] = $item['PARENT_PRODUCT']['DETAIL_PAGE_URL'] . '?offer_id=' . $item['ID'];

        $resized = CFile::ResizeImageGet(
            CFile::GetFileArray($imageId),
            array("width" => 47, "height" => 47),
            BX_RESIZE_IMAGE_PROPORTIONAL ,
            true
        );

        if(!$resized){
            $resized = CFile::ResizeImageFile(
                $sourceFile = $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/img/no_photo.png',
                $destinationFile = $_SERVER['DOCUMENT_ROOT'] . "/upload/no_photo.png",
                $arSize = array('width'=>47,'height'=>47),
                $resizeType = BX_RESIZE_IMAGE_PROPORTIONAL,
            );

            if($resized){
                $resized = [];
                $resized['src'] = "/upload/no_photo.png";
            }

        }

        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['RESIZED'] = $resized;
    }
}
