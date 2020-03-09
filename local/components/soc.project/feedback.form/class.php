<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Web\Json;
use Bitrix\Main\Mail\Event;

class FeedbackFormComponent extends \CBitrixComponent
{
    public static $HASH_ID = 0;

    public function onPrepareComponentParams($arParams)
	{
        return $arParams;
    }

    private function getResult()
    {
        $result = [];
             
        $cacheTime = $this->arParams["CACHE_TIME"];
        $cacheId = md5(serialize($this->arParams));
    
        $cachePath = '/soc.project/feedback';
        
        $obCache = new CPHPCache();
        if ($obCache->InitCache($cacheTime, $cacheId, $cachePath))
        {
           $result = $obCache->GetVars();
        }
        else
        {
            if($obCache->StartDataCache()){
                $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "SORT"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$this->arParams["IBLOCK_ID"]));
                while ($prop_fields = $properties->GetNext())
                {
                    $result[$prop_fields["ID"]] = $prop_fields;
                }

                $obCache->EndDataCache($result);
            }
        }

        return $result;
    }
    public function executeComponent()
	{
        self::$HASH_ID++;
        $this->arResult["ITEMS"] = $this->getResult();
        
        if($_POST["HASH_ID"] == self::$HASH_ID && check_bitrix_sessid() && empty($_POST["email"])){
            $GLOBALS['APPLICATION']->RestartBuffer();
            $this->ajaxRequest();
            die();
        }elseif($_SERVER['REQUEST_METHOD'] == "GET"){
            $this->includeComponentTemplate($this->page);
        }
    }
    
    public function sendEmail($fields)
    { 
        Event::send(array(
            "EVENT_NAME" => $this->arParams["MAIL_HANDLER"],
            "LID" => "s1",
            "C_FIELDS" =>$fields,
        )); 
    }

    public function ajaxRequest()
    {
        $props = $this->getResult();
        $arrProps = [];
        $mailFields = [];
        foreach($_POST["ID"] as $key=>$value){
            if($props[$key]["USER_TYPE"] == "HTML"){
                $arrProps[$key] =  Array("VALUE" => Array ("TEXT" => $value, "TYPE" => "text"));
            }else{
                $arrProps[$key] = $value;
            }
            $mailFields[$props[$key]["CODE"]] = $value;
        } 
        $el = new CIBlockElement;
        $name = new Bitrix\Main\Type\DateTime();
        $arLoadProductArray = Array(
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => $this->arParams["IBLOCK_ID"],
            "PROPERTY_VALUES"=> $arrProps,
            "NAME"           => "Вопрос ".$name,
        );
        
        if($PRODUCT_ID = $el->Add($arLoadProductArray)){
            $response = ["ADDED" => true];
            $this->sendEmail($mailFields);
        }else{
            $response = ["ADDED"=>false, "ERROR" => $el->LAST_ERROR];
        }

        echo Json::encode($response); 
    }
} 