<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>

<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
	<?= $arResult["NAV_STRING"] ?><br />
<? endif; ?>
<? foreach ($arResult["ITEMS"] as $arItem) : ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
		<div class="image_list">
			<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" /></a>
			</div>
			<div class="text_list">
		<? echo $arItem["DISPLAY_ACTIVE_FROM"] ?>

		<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
			<h3><? echo $arItem["NAME"] ?></h3>
		</a><br />

		<? echo $arItem["PREVIEW_TEXT"]; ?>
		</div>
		</div>
	
<? endforeach; ?>
<div class="clb">
	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div>