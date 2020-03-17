<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="elements-list-cmp">
	<div class="element-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="element-item">
				<div class="item-name"><?=$arItem["NAME"]?></div>
				<?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
					<div class="item-pic">
						<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  data-fancybox="gallery" title="<?=$arItem["NAME"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"></a>
					</div>
				<?endif?>
				<div class="item-text"><?=$arItem["PREVIEW_TEXT"]?></div>	
			</div>
		<?endforeach?>
	</div>

</div>
