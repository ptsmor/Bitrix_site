<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="clb"></div>
<div class="botmenu">
    <div class="container">
        <div class="col-lg-8">
            <? $APPLICATION->IncludeComponent("bitrix:menu", "topmulti", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "sect",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",    // Уровень вложенности меню
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


<div class="container">
    <div class="row footer">
        <div class="col-lg-4">
            <a href="" class="botlogo">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/logoss.svg" alt="">
            </a>
        </div>
        <div class="col-lg-4">
            <p>&copy; 2022 Ничего не защищено, сайт является вымыслом.</p>
        </div>
        <div class="col-lg-4">
            <a href="https://camouf.ru/video/new_bx_site_created/" class="created">Спасибо Михаилу за курс</a>
        </div>
    </div>
</div>


</body>
</html>