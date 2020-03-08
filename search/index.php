<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search-page", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"RESTART" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(
			0 => "iblock_content",
			1 => "iblock_fin_hos",
			2 => "iblock_main_info",
			3 => "iblock_protive_corup",
			4 => "iblock_sotsialnye_uslug",
			5 => "iblock_popechitelsk_sovet",
			6 => "iblock_predpisania_organov",
			7 => "iblock_poluchateli_sotsialnykh_uslug",
		),
		"arrWHERE" => "",
		"COMPONENT_TEMPLATE" => "search-page",
		"arrFILTER_iblock_content" => array(
			0 => "1",
		),
		"arrFILTER_iblock_fin_hos" => array(
			0 => "all",
		),
		"arrFILTER_iblock_main_info" => array(
			0 => "4",
			1 => "5",
			2 => "6",
		),
		"arrFILTER_iblock_protive_corup" => array(
			0 => "all",
		),
		"arrFILTER_iblock_sotsialnye_uslug" => array(
			0 => "all",
		),
		"arrFILTER_iblock_popechitelsk_sovet" => array(
			0 => "all",
		),
		"arrFILTER_iblock_predpisania_organov" => array(
			0 => "all",
		),
		"arrFILTER_iblock_poluchateli_sotsialnykh_uslug" => array(
			0 => "all",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>