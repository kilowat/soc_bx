<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


foreach($arResult["ITEMS"] as &$arItem){
    $arItem["MOD_ITEM"] = [];
    if(!empty($arItem["PREVIEW_PICTURE"])){
        $arItem["MOD_ITEM"]["SHOW_PICTURE"] = $arItem["PREVIEW_PICTURE"]["SRC"];
    }
    elseif(count($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) > 0){
        $file = CFile::ResizeImageGet($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"][0], array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
        $arItem["MOD_ITEM"]["SHOW_PICTURE"] = $file["src"];
    }else{
        //set default picture;
    }
}