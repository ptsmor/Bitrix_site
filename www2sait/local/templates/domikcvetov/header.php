
<!doctype html>
<html>
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<?
		CJSCore::Init(array("jquery"));
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.sudoSlider.min.js" );
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/slick/slick.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/js/slick/slick-theme.css");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/slick/slick.js");
	?>
	<script type="text/javascript" >
    $(document).ready(function(){	
        var sudoSlider = $("#slider").sudoSlider({
        //    numeric:true,
		   auto:true,
		   pause: 5000,
		   prevNext:false
        });
    });
</script>
	<? 
	//Пример подключения css $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/type.css");
	?>
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" />
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="header">
	<div class="container">
	<a href="/" title="" class="top_logo">
		<img src="<?=SITE_TEMPLATE_PATH?>/images/logo2.png" alt="">
	</a>
	
	<div class="bsk"> <div class="bsk_in">
		
		<p>Здравствуйте, <a href="/personal/"><?=(CUser::GetFirstName())?CUser::GetFirstName():CUser::GetLogin()?></a></p>
		<div class="sales"></div><span> <a href="/personal/cart/"> В корзине</a> 
		140 товаров <br> на 100000 рублей</в>
		</div>
	</div>
	</div>
</div>
<div class="clb"></div>
<div class="nav">
	
<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu80", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => "top_menu78",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?><br>

</div>
<div class="clb"></div>
<?if ($APPLICATION->GetCurDir()=='/'):?>
	<div class="container">
<div id="slider">
	
	<ul>
<?
 if (CModule::IncludeModule("iblock")):
 $iblock_id = 5; // ID инфоблока из которого выводим элементы
 $mySlider = CIBlockElement::GetList (
 // Сортировка элементов
     Array(
        "ID" => "ASC"
    ),
     Array(
        "IBLOCK_ID" => 
        $iblock_id
    ),
    false,
    false,
    // Перечисляесм все свойства элементов, которые планируем выводить
    Array(
         'ID',
         'NAME',
         'PREVIEW_PICTURE',
         'PREVIEW_TEXT',
         'PROPERTY_ATT_LINK'
     )
 );
 while($arFields = $mySlider->GetNext())
 {
 //Выводим элемент со всеми свойствами + верстка
 $img_path = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
 echo '<div class="container"><li style="background:url('.$img_path.');"><a href="'.$arFields['PROPERTY_LIN_PR_VALUE'].'">';
 echo '<span><h4>'.$arFields['NAME']."</h4>";
 echo "<p>".$arFields['PREVIEW_TEXT']."'</p></span>";
 echo '</a></li></div>';
 }
 endif;
 ?>
 </ul>
 
</div>
<div class="clb"></div>
<?endif;?>
</div>
<div class="container">
<div class="content">


