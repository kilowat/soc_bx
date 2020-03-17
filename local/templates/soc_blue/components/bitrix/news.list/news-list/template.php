<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="news-cmp">
	<div class="news-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<a class="news-item" href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=$arItem["NAME"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="item-content">
				<div class="item-img">
					<span role="img" class="news-img" aria-label="<?=$arItem["NAME"]?>" style="background-image: url(<?=$arItem["MOD_ITEM"]["SHOW_PICTURE"]?>);"></span>
				</div>
				<div class="item-name">
					<?=$arItem["NAME"]?>
				</div>
				</div>
				<div class="item-info table">
				<span class="item-date table-row">
					<span class="item-icon table-cell">
						<i class="ic-inline sprite-calendar"></i>
					</span>
					<span class="item-value table-cell"><?echo $arItem["ACTIVE_FROM"] ?  ConvertDateTime($arItem["ACTIVE_FROM"], "d.m.Y") :  ConvertDateTime($arItem["DATE_CREATE"], "d.m.Y")?></span>       
				</span>
				<span class="item-views table-row">
					<span class="item-icon table-cell">
						<i class="ic-inline sprite-eye"></i>
					</span>
					<span class="item-value table-cell"><?=intval($arItem["SHOW_COUNTER"])?></span>      
				</span>
			</div>
		</a>
		<?endforeach;?>
	</div>
	<div class="nav-string">
		<?=$arResult["NAV_STRING"]?>
	</div>
</div>

