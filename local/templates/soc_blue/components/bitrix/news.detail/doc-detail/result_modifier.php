<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


if(!empty($arResult["PROPERTIES"]["DOC"]["VALUE"])){
    $arFile = CFile::GetFileArray($arResult["PROPERTIES"]["DOC"]["VALUE"]);

    $tmpExArr = explode(".", $arFile["FILE_NAME"]);
    $ex = $tmpExArr[count($tmpExArr)-1];
    $arResult["DOC"] = [
        "EX"=> $ex,
        "SRC"=> $arFile["SRC"],
        "SIZE" => Helper::formatBytes($arFile["FILE_SIZE"]),
    ];
}