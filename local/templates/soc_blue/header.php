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
                                    <ul>
                                        <li>
                                            <a href="" title="">Ссылка</a>
                                        </li>
                                        <li>
                                            <a href="" title="">Ссылка</a>
                                        </li>
                                        <li>
                                            <a href="" title="">Ссылка</a>
                                        </li>
                                        <li>
                                            <a href="" title="">Ссылка</a>
                                        </li>
                                        <li>
                                            <a href="" title="">Ссылка</a>
                                        </li>
                                    </ul>
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
                            Государственное бюджетное учреждение социального обслуживания Краснодарского края
                            «Динской комплексный центр социального обслуживания населения»
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="additional-block">
                                <div class="info-item">
                                    <button class="btn btn-accent">Задать вопрос</button>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="phones-cell info-item">
                                    <div>
                                        <span class="number-name"></span>
                                        <span class="phone-number">8-(86132) 4-45-56</span>
                                    </div>
                                    <div>
                                        <span class="number-name"></span>
                                        <span class="phone-number">8-(86132) 4-45-56</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-block">
                <div class="container">
                    <nav id="main-nav">
                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "base_menu", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    ),
                    false
                );?>
                    </nav>
        
                    <div class="search-block">
                        <div class="search">
                            <input type="text" class="input" placeholder="Поиск">
                            <button type="button" class="search-btn">
                            <svg class="svg-icon icon-grey">
                                <use xlink:href="/local/templates/soc_blue/asset/dist/sprites/spritemap.svg#sprite-search"></use>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="container" id="page-wrap">
            <aside class="sidebar-left">  
                <div class="sidebar-block">
                    <ul id="left-menu">
                            <li>
                                <a href="#" title="Общие сведения о поставщике социальных услуг" class="root">Общие сведения о поставщике социальных услуг
                                </a>
                                <ul class="hide">
                                    
                                        <li>
                                            <a href="/main-info.html" title="Общие данные">
                                                Общие данные
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Кадровое обеспечение">
                                                Кадровое обеспечение
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Нормативная документация">
                                                Нормативная документация
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Материально-техническое обеспечение социальных услуг">
                                                Материально-техническое обеспечение социальных услуг
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Структура и органы управления">
                                                Структура и органы управления
                                            </a>
                                        </li>
                                    
                                </ul>
                            </li>
                        
                            <li>
                                <a href="#" title="Общие сведения о поставщике социальных услуг" class="root">Общие сведения о поставщике социальных услуг
                                </a>
                                <ul class="hide">
                                    
                                        <li>
                                            <a href="#" title="Общие данные">
                                                Общие данные
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Кадровое обеспечение">
                                                Кадровое обеспечение
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Нормативная документация">
                                                Нормативная документация
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Материально-техническое обеспечение социальных услуг">
                                                Материально-техническое обеспечение социальных услуг
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" title="Структура и органы управления">
                                                Структура и органы управления
                                            </a>
                                        </li>
                                    
                                </ul>
                            </li>
                        
                    </ul>
                </div>
            </aside>
            <div class="content with-sidebar">
            <?if($APPLICATION->GetCurPage() !=="/"):?>
                <h1 class="section-name"><?=$APPLICATION->ShowTitle(false)?></h1>
            <?endif?>
