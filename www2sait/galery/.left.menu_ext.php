<? 
 if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
      global $APPLICATION; 
      $aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array( 
      "IS_SEF" => "Y", 
      "SEF_BASE_URL" => "/galery/", 
      "SECTION_PAGE_URL" => "#SECTION_CODE#/", 
      "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/", 
      "IBLOCK_TYPE" => "simple", 
      "IBLOCK_ID" => "7", 
      "DEPTH_LEVEL" => "3", 
      "CACHE_TYPE" => "A", 
      "CACHE_TIME" => "36000000" 
      ), 
  false 
 ); 
 $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks); 
 ?> 