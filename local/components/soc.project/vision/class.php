<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

class VisionComponent extends \CBitrixComponent
{
       
    public function onPrepareComponentParams($arParams)
    {
        return $arParams;
    }

    private function getResult()
    {


    }

    public function includeScriptsAndStyles()
    { 
        Asset::getInstance()->addCss($this->GetPath()."/templates/.default/css/bvi-font.css");
        Asset::getInstance()->addCss($this->GetPath()."/templates/.default/css/bvi.css");
        Asset::getInstance()->addJs($this->GetPath()."/templates/.default/js/bvi.js");
        Asset::getInstance()->addJs($this->GetPath()."/templates/.default/js/js.cookie.js");
        Asset::getInstance()->addJs($this->GetPath()."/templates/.default/js/responsivevoice.js");
    }

    public function executeComponent()
    {
        $this->includeScriptsAndStyles();
        $this->includeComponentTemplate($this->page);
    }
} 