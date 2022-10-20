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
<div class="peoples_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 people_title">
                <h2>
                    Наша команда по IT аутсорсу
                    <small>Дружная. ПРофессиональная. Быстрая</small>
                </h2>
            </div>
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-lg-3" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <center><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"/></center>
                    <h5><? echo $arItem["NAME"] ?></h5>
                    <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
                    <a class="mail_item"
                       href="mailto:<? echo $arItem['DISPLAY_PROPERTIES']['PRICE']['~VALUE']; ?>"><? echo $arItem['DISPLAY_PROPERTIES']['ATT_EMAIL']['~VALUE']; ?></a>
                </div>
            <? endforeach; ?>
        </div>
        <div class="clb"></div>
        <div class="sendall">
            <a href="#" class="trigger">
                Написать всем сразу
            </a>
            <span>Кто нить все равно да ответит, поздно или еще позже...</span>
        </div>
        <div class="clb"></div>
    </div>
</div>

