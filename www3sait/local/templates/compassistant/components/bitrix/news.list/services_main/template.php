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
<div class="container">
    <div class="row">
        <div class="col-lg-12 serv_title">
            <h2>
                Услуги компании по IT аутсорсу
                <small>Гарантия. Качество. Надежность.</small>
            </h2>
        </div>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-lg-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="service_main">
                    <h3>
                        <?
                        $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 90, "height" => 90), BX_RESIZE_IMAGE_EXACT, false);
                        echo '<img alt="' . $arItem["NAME"] . '" src="' . $renderImage["src"] . '" />';
                        ?>
                        <? echo $arItem["NAME"] ?>
                    </h3>
                    <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
                    <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>">
                        <span>от <? echo $arItem['DISPLAY_PROPERTIES']['PRICE']['~VALUE']; ?> руб.</span>
                        <i>Подробнее</i>
                    </a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>

