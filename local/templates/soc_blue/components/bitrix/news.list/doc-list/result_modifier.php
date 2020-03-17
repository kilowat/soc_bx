<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as &$arItem){
    if(!empty($arItem["PROPERTIES"]["DOC"]["VALUE"])){
        $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["DOC"]["VALUE"]);
        $tmpExArr = explode(".", $arFile["FILE_NAME"]);
        $ex = $tmpExArr[count($tmpExArr)-1];
        $arItem["DOC"] = [
            "EX"=> $ex,
            "SRC"=> $arFile["SRC"],
            "SIZE" => Helper::formatBytes($arFile["FILE_SIZE"]),
        ];
    }
}