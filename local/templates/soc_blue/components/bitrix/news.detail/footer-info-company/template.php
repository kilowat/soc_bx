<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="info-text">
    <span class="small-text"><?=$arResult["PROPERTIES"]["NAME"]["VALUE"]["TEXT"]?></span>  
    <div class="table info-table">
        <div class="phone-cell info-item table-row">
            <div class="table-cell icon-cell">
                <i class="ic-inline sprite-phone"></i>
            </div>
            <div class="table-cell address-value value-cell">
                <?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?>
            </div>
        </div>
        <div class="address-cell info-item table-row">
            <div class="table-cell icon-cell">
                <i class="ic-inline sprite-place"></i>
            </div>
            <div class="table-cell address-value value-cell">
                <?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?>
            </div>
        </div>
        <div class="email-cell info-item table-row">
            <div class="table-cell icon-cell">
                <i class="ic-inline sprite-email"></i>
            </div>
            <div class="table-cell value-cell">
                <a href="to:<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>" class="link" title="<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
            </div>
        </div>
    </div>
</div>