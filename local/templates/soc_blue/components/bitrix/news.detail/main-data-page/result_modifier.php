<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule('highloadblock'); //модуль highload инфоблоков

$rsData = \Bitrix\Highloadblock\HighloadBlockTable::getList(array('filter'=>array('TABLE_NAME'=>$arResult["PROPERTIES"]["WORK_TIME"]["USER_TYPE_SETTINGS"]["TABLE_NAME"])));

if (($hldata = $rsData->fetch()) ){
    $hlentity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);

    $hlDataClass = $hldata['NAME'].'Table';
    $res = $hlDataClass::getList(array(
            'select' => array("*"), 
            'order' => array(
                'ID' => 'asc'
            ),
        )
    );
    while($row = $res->fetch()) {
        $arResult["RESULT_MOD"]["WORK_TIME_ITEMS"][] = $row;
    } 
}
