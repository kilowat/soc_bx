<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as &$arItem){
    $arItem["MOD_ITEM"] = [];
    $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
    $arItem["MOD_ITEM"]["SHOW_PICTURE"] = $file["src"];
}