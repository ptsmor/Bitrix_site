<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
	<p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form",
	"",
Array()
);?><br>
	</p>
	<h2> Рыбный текст Рыбный текст Рыбный текст Рыбный текст Рыбный текст Рыбный текст Рыбный текст Рыбный текст Рыбный текст Рыбный текс </h2>
	<ul>
		<li>fishfish</li>
		<li>fishfishfish</li>
		<li>fishfishfishfishfish</li>
	</ul>
	 Тел 88005553535 до встречи<br>
 <br>
 <br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?><br>
 <br>
 <br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "eeeewe@ya.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?><br>

 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>