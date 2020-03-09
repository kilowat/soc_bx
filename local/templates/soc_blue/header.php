<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300, 400,400i,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <title><?=$APPLICATION->ShowTitle()?></title>
    <?
        use Bitrix\Main\Page\Asset;
        
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/asset/dist/css/style.bundle.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. "/asset/dist/js/bundle.js");
        
		$APPLICATION->ShowHead();
    ?>
	<script src="//code.jivosite.com/widget/IC0yU2oZUF" async></script>
  </head>
  <body>
      <?$APPLICATION->ShowPanel()?>
    <div id="app">
        <header class="header">
            <div class="mobile-block">
                <div class="container">
                    <div class="flex-wrapper">
                        <div class="top-menu-block">
                            <drawer-menu>
                                <div id="mobile-menu">
								<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"base_menu", 
	array(
		"COMPONENT_TEMPLATE" => "base_menu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "Y",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left-menu-mobile", 
	array(
		"COMPONENT_TEMPLATE" => "left-menu-mobile",
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left_sub",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
                                </div>
                            </drawer-menu>
                        </div>
                        <div class="m-phone-number-block">
                            <div class="phone-number-m">
                                <svg class="svg-icon ic-middle icon-white">
                                    <use xlink:href="/local/templates/soc_blue/asset/dist/sprites/spritemap.svg#sprite-phone_enabled"></use>
                                </svg>
                                <a>8 86132 3-44-55</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-block">
                <div class="container">

            		<div class="top-block-wrapper">
                        <div class="logo-block">
                            <a href="/" title=""><img src="<?=SITE_TEMPLATE_PATH?>/asset/dist/img/logo.png" id="logo" /></a>
                        </div>
                        <div class="center-block">
                            <div class="company-name">    
                            <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"company-name", 
	array(
		"COMPONENT_TEMPLATE" => "company-name",
		"IBLOCK_TYPE" => "main_info",
		"IBLOCK_ID" => "2",
		"ELEMENT_ID" => CONSTANT::ABOUT_IBLOCK_ID,
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"IBLOCK_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="additional-block">
                                <div class="info-item">
								<?$APPLICATION->IncludeComponent(
									"soc.project:feedback.button", 
									".default", 
									array(
										"COMPONENT_TEMPLATE" => ".default",
										"CLASS" => "btn-accent"
									),
									false
								);?>
                                </div>
                            </div>
                            <div class="info-block">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"top-phone", 
	array(
		"COMPONENT_TEMPLATE" => "top-phone",
		"IBLOCK_TYPE" => "main_info",
		"IBLOCK_ID" => "2",
		"ELEMENT_ID" => CONSTANT::ABOUT_IBLOCK_ID,
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PHONE",
			1 => "FAX",
			2 => "",
		),
		"IBLOCK_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

                            </div>
                        </div>
					</div>
					<?$APPLICATION->IncludeComponent(
						"soc.project:vision",
						"",
					Array()
					);?>
				</div>
            </div>
            <div class="nav-block">
                <div class="container">
                    <nav id="main-nav">
                                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"base_menu", 
	array(
		"COMPONENT_TEMPLATE" => "base_menu",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "Y",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
                    </nav>
        
                    <div class="search-block">
                        <div class="search">
							<form action="/search" method="GET">
								<input type="text" class="input" placeholder="Поиск" name="q">
								<button type="submit" class="search-btn">
									<svg class="svg-icon icon-grey">
										<use xlink:href="/local/templates/soc_blue/asset/dist/sprites/spritemap.svg#sprite-search"></use>
									</svg>
								</button>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="container" id="page-wrap">
            <aside class="sidebar-left">  
                <div class="sidebar-block">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left-menu", 
	array(
		"COMPONENT_TEMPLATE" => "left-menu",
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left_sub",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

                </div>
            </aside>
            <div class="content with-sidebar">
            <?if($APPLICATION->GetCurPage() !=="/"):?>
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	
	),
	false
);?>

                <h1 class="section-name"><?=$APPLICATION->ShowTitle(false)?></h1>
            <?endif?>