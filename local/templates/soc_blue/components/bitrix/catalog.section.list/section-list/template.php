<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="info-materials">
	<div class="section-list">
		<?foreach ($arResult['SECTIONS'] as $arSection):?>
			<?
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
			?>
			<a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="section-item" title="<?=$arSection["NAME"]?>" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
				<div class="section-pic">
					<img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
				</div>
				<div class="section-name-text"><?=$arSection["NAME"]?></div>
				<div class="section-cnt">(<?=$arSection["ELEMENT_CNT"]?>)</div>
			</a>
		<?endforeach?>
	</div>
</div>



	