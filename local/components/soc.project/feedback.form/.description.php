<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME" => Loc::getMessage('FORM_NAME'),
	"DESCRIPTION" => Loc::getMessage('FORM_DESCRIPTION'),
	"SORT" => 10,
	"PATH" => array(
		"ID" => 'soc.project',
		"NAME" => Loc::getMessage('SOC_GROUP'),
		"SORT" => 10,
	),
);

?>