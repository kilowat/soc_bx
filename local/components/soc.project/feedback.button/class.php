<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class FeedbackButtonComponent extends \CBitrixComponent
{

	public function onPrepareComponentParams($arParams)
	{
        return $arParams;
    }

    private function getResult()
    {


    }

    public function executeComponent()
	{
        $this->includeComponentTemplate($this->page);
	}
} 