<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="phones-cell info-item">
    <?foreach($arResult["DISPLAY_PROPERTIES"] as $prop):?>
        <div>
            <span class="phone-number"><?=$prop["VALUE"]?></span>
        </div>
    <?endforeach?>
</div>