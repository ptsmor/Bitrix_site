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
$this->setFrameMode(true);?>
<div class="searchform">
<form action="<?=$arResult["FORM_ACTION"]?>">
    <input type="text" name="q" value="" placeholder="Поиск по сайту..." size="15" maxlength="50" />
    <input name="s" type="submit" class="fa" value="&#xf002;" />
</form>
</div>