<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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
        $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "SORT"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$this->arParams["IBLOCK_ID"]));
        while ($prop_fields = $properties->GetNext())
        {
            $result[] = $prop_fields;
        }

        return $result;
    }
    public function executeComponent()
	{
        self::$HASH_ID++;
        $this->arResult["ITEMS"] = $this->getResult();

        $this->includeComponentTemplate($this->page);
	}
} 