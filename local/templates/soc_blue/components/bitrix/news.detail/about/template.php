<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="about section-block">
    <h1 class="section-header"><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]["TEXT"]?></h1>
    <div class="about-content">
		<div class="about-pic-wrapper">
			<img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" class="about-pic" alt="">
			<div class="company-descr">
				<ul>
					<?foreach($arResult["DISPLAY_PROPERTIES"] as $keyProp => $prop):?>
						<li>
							<span class="prop-name"><?=$prop["NAME"]?>:</span>
							<span class="prop-value"><?=$prop["VALUE"]?></span>
						</li>
					<?endforeach?>
				</ul>
			</div>
		</div>

		<div class="about-text">
			<?=$arResult["PREVIEW_TEXT"]?>
		</div>
	</div>
</section>