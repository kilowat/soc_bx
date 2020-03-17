<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<section class="links-block">
	<div class="container">
	<h2 class="section-header">Полезные ссылки</h2>
	<div class="links-slider ajax-loading not-loading">	
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="link-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="link-pic">
					<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" title="<?=$arItem["NAME"]?>"><img src="<?=$arItem["MOD_ITEM"]["SHOW_PICTURE"]?>" alt="<?=$arItem["NAME"]?>"></a>
				</div>
				<div class="link-name">
					<a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" title="<?=$arItem["NAME"]?>"><?=$arItem["NAME"]?></a>
				</div>
			</div>
		<?endforeach?>
	</div>
	<script type="application/javascript">
		document.addEventListener("DOMContentLoaded", function(event) { 
		$('.links-slider').on('init', function(event, slick){
			$('.links-slider').removeClass('not-loading')
			console.log('res');
		});
		$('.links-slider').not('.slick-initialized').slick({
			infinite: true,
			arrows : false,
			slidesToShow: 6,
			slidesToScroll: 1,
			dots: true,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
				},
				{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		})
		});
	</script>
	</div>
	</section>