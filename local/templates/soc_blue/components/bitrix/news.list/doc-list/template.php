<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="doc-cmp">
	<div class="doc-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<?if($arItem["DOC"]["SRC"]):?>
				<div class="doc-item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
					<div class="cell icon-cell">
						<svg class="svg-icon ic-larg icon-grey">
							<use xlink:href="<?=CONSTANT::TPL_PATH?>sprites/spritemap.svg#sprite-files-and-folders"></use>
						</svg>
					</div>
					<div class="cell text-cell">
						<div class="doc-name">
							<a href="<?=$arItem["DOC"]["SRC"]?>" title="<?=$arItem["NAME"]?><"><?=$arItem["NAME"]?></a>
						</div>
						<div class="doc-info">
							<?=$arItem["DOC"]["EX"]?> (<?=$arItem["DOC"]["SIZE"]?>)
						</div>
					</div>
				</div>
			<?else:?>
				<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="element-item">
					<?if(empty($arItem["PROPERTIES"]["HIDE_NAME"]["VALUE"])):?>
						<div class="item-name"><?=$arItem["NAME"]?></div>
					<?endif?>
					<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
						<div class="item-pic">
							<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  data-fancybox="gallery" title="<?=$arItem["NAME"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"></a>
						</div>
					<?endif?>
					<div class="item-text"><?=$arItem["PREVIEW_TEXT"]?></div>	
				</div>
			<?endif?>
		<?endforeach?>
	</div>
	<div class="nav-string">
		<?=$arResult["NAV_STRING"]?>
	</div>
</div>
