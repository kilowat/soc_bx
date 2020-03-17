<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use \Bitrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
?>

<div class="main-slider shadow">
	<div class="glide">
		<div class="glide__track" data-glide-el="track">
			<div class="glide__slides">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));	
					?>
					<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="glide__slide" style="background-image:url(<?=$arItem["MOD_ITEM"]["SHOW_PICTURE"]?>)">
						<div class="pic-wrapper"></div>
						<div class="slider-content">
							<div class="slide-header"><?=$arItem["NAME"]?></div>
							<div class="slide-text"><?=TruncateText($arItem["DETAIL_TEXT"], $arParams["PREVIEW_TRUNCATE_LEN"])?></div>
						</div>
						<div class="link-to-detail">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="<?=Loc::getMessage("SEE_DETAIL");?>"><?=Loc::getMessage("SEE_DETAIL");?></a>
						</div>
					</div>
				<?endforeach?>	
			</div>
		</div>
		<div class="glide__bullets" data-glide-el="controls[nav]">
			<?unset($arItem)?>
			<?foreach($arResult["ITEMS"] as $key=>$arItem):?>
				<button class="glide__bullet" data-glide-dir="=<?=$key?>"></button>
			<?endforeach?>
		</div>
	</div>
  </div>

  <script type="application/javascript">

    document.addEventListener("DOMContentLoaded", function(event) { 
	  var glide = new Glide('.glide');
	  glide.mount().mount();
    });
  </script>