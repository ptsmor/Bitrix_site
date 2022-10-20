<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>
		

		<div class="one_item" width="<?=round(100/$arParams["LINE_ELEMENT_COUNT"])?>%" id="<?=$this->GetEditAreaId($arElement['ID']);?>">

			<table cellpadding="0" cellspacing="2" border="0">
				<tr>
					<?if(is_array($arElement["PREVIEW_PICTURE"])):?>
						<td valign="top">
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a><br />
						</td>
					<?elseif(is_array($arElement["DETAIL_PICTURE"])):?>
						<td valign="top">
						<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arElement["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arElement["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a><br />
						</td>
					<?endif?>
					<td valign="top"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a><br />
						<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<?=$arProperty["NAME"]?>:&nbsp;<?
								if(is_array($arProperty["DISPLAY_VALUE"]))
									echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
								else
									echo $arProperty["DISPLAY_VALUE"];?><br />
						<?endforeach?>
						<br />
						<?=$arElement["PREVIEW_TEXT"]?>
					</td>
				</tr>
			</table>
			<?if(is_array($arElement["OFFERS"]) && !empty($arElement["OFFERS"])):?>

				<div class="pricebl"> 
<? 
 	$intIBlockID = 4; 
 	$mxResult = CCatalogSKU::GetInfoByProductIBlock( 
 	$intIBlockID 
); 
if (is_array($mxResult)) 
{ 
$rsOffers = CIBlockElement::GetList(array("PRICE"=>"ASC"),array('IBLOCK_ID' => $mxResult['IBLOCK_ID'], 'PROPERTY_'.$mxResult['SKU_PROPERTY_ID'] => $arElement["ID"])); 
 while ($arOffer = $rsOffers->GetNext()) 
 	 	{ 
 		 	$ar_price = GetCatalogProductPrice($arOffer["ID"], 1); 
 		 	echo "<p>от ".$ar_price["PRICE"]." руб. </p>" ; 
 		 	break; 
 		 } 
 } 
 ?> 
 </div> 
			<?else:?>
				<?foreach($arElement["PRICES"] as $code=>$arPrice):?>
					<?if($arPrice["CAN_ACCESS"]):?>
						<p><?=$arResult["PRICES"][$code]["TITLE"];?>:&nbsp;&nbsp;
						<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
							<s><?=$arPrice["PRINT_VALUE"]?></s> <span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
						<?else:?><span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span><?endif;?>
						</p>
					<?endif;?>
				<?endforeach;?>
				<?endif?>
				
				
			
		</div>



		<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

		

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
