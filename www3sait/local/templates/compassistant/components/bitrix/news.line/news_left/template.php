<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="newsleft">
    <div class="container">
    <h4>Всякие новости</h4>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="onenew" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <span class="fa">
                &#xf274;
            </span>
            <span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
            <div class="clb"></div>
            <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>">
                <? echo $arItem["NAME"] ?>
            </a>
            <p>
                <?
                $str = $arItem["PREVIEW_TEXT"];
                echo TruncateText($str, 120);
                ?>
            </p>
        </div>
    <? endforeach; ?>
    </div>
</div>
