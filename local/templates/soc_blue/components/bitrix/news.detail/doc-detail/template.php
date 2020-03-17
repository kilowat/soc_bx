<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="doc-cmp">
	<div class="doc-list">
			<?if($arResult["DOC"]["SRC"]):?>
				<div class="doc-item">
					<div class="cell icon-cell">
						<svg class="svg-icon ic-larg icon-grey">
							<use xlink:href="<?=CONSTANT::TPL_PATH?>sprites/spritemap.svg#sprite-files-and-folders"></use>
						</svg>
					</div>
					<div class="cell text-cell">
						<div class="doc-name">
							<a href="<?=$arResult["DOC"]["SRC"]?>" title="<?=$arResult["NAME"]?><"><?=$arResult["NAME"]?></a>
						</div>
						<div class="doc-info">
							<?=$arResult["DOC"]["EX"]?> (<?=$arResult["DOC"]["SIZE"]?>)
						</div>
					</div>
				</div>
			<?else:?>
				<div class="element-item">
					<?if(empty($arResult["PROPERTIES"]["HIDE_NAME"]["VALUE"])):?>
						<div class="item-name"><?=$arResult["NAME"]?></div>
					<?endif?>
					<?if($arResult["PREVIEW_PICTURE"]["SRC"]):?>
						<div class="item-pic">
							<a href="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"  data-fancybox="gallery" title="<?=$arResult["NAME"]?>"><img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>"></a>
						</div>
					<?endif?>
					<div class="item-text"><?=$arResult["PREVIEW_TEXT"]?></div>	
				</div>
			<?endif?>

	</div>
</div>
