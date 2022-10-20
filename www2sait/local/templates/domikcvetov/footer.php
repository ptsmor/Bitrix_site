

</div>
</div>
<div class="clb"></div>
<div class="prefooter"></div>
<div class="clb"></div>

<div class="footer">
	<div class="container">
        
    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?><br>


<div class="clb"></div>
<a href="/" class="bottom_logo">
	<img src="<?=SITE_TEMPLATE_PATH?>/images/logo2.png" alt="">
	</a> 
     

<span class="adress">
	<b>Центральный магазин</b><br>
	г.Череповец<br>
	ул.Годовикова д.7<br>
	
	E-mail: <a href="mailto:eeeewe@ya.ru">eeeewe@ya.ru</a>
</span>

		
	</div>
</div>
	
</body>
</html>