<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!doctype html>
<html>
<head>
    <?
    $APPLICATION->ShowHead();

    use Bitrix\Main\Page\Asset;

    // CSS
    Asset::getInstance()->addCss('/bitrix/css/main/bootstrap.min.css');
    // JS
    CJSCore::Init(array("jquery"));

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>

</head>
<body>
<? $APPLICATION->ShowPanel(); ?>


<div class="header">
    <div class="container">
        <div class="row">


        
            <div class="col-lg-12">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "logo777", Array(
	"AREA_FILE_RECURSIVE" => "Y",	// Рекурсивное подключение включаемых областей разделов
		"AREA_FILE_SHOW" => "sect",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "top",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
); ?>
            </div>
        </div>
    </div>
</div>


<div class="topmenu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "topmulti", Array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "sect",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                ),
                    false
                ); ?>
            </div>
            <div class="col-lg-4">
                <? $APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
                    "PAGE" => "#SITE_DIR#search/index.php",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                    "USE_SUGGEST" => "N",    // Показывать подсказку с поисковыми фразами
                ),
                    false
                ); ?>
            </div>
        </div>
    </div>
</div>
</div>








	