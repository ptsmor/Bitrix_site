<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="catalog_list_block">
	<h4>Каталог продукции</h4>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item_cat_list" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

	<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
				<b><?echo $arItem["NAME"]?></a> </b>

				<div style="clear:both; height:10px;"></div>

				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img

						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"

						alt="<?=$arItem["NAME"]?>"/>
					</a>





				<div class="price_list">

		<?foreach($arItem["FIELDS"] as $code=>$value):?>

			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>

		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>

		<?endforeach;?>
		</div>
	</div>

    <div style="clear:both"></div>

<?endforeach;?>
<div style="clear:both; height:20px;"></div>
</div>
