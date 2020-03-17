<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as &$arItem){
    $arItem["MOD_ITEM"] = [];
    if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])){
        $arItem["MOD_ITEM"]["SHOW_PICTURE"] = $arItem["PREVIEW_PICTURE"]["SRC"];
    }
    elseif(!empty($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"])){
        $file = CFile::ResizeImageGet($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"][0], array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
        $arItem["MOD_ITEM"]["SHOW_PICTURE"] = $file["src"];
    }else{
        $arItem["MOD_ITEM"]["SHOW_PICTURE"] = CONSTANT::TPL_PATH."/img/nophoto_260x500.jpg";
    }
}