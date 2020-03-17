<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $photo){
    $fileSmall = CFile::ResizeImageGet($photo, array('width'=>200, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
    $fileBig = CFile::ResizeImageGet($photo, array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
    $arResult["MOD_PHOTO"][] = [
        "SMALL"=>$fileSmall['src'],
        "BIG"=>$fileBig['src']
    ];
}

