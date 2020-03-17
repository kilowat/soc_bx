<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="news-detail">
    <div class="news-info">
        <div class="table">
            <span class="item-date table-row">
                <span class="item-icon table-cell">
                    <i class="ic-inline sprite-calendar-grey"></i>
                </span>
                <span class="table-cell value">22.03.2020</span>
                <span class="table-cell sep-cell"></span>
                <span class="item-icon table-cell">
                    <i class="ic-inline sprite-eye-grey"></i>
                </span>
                <span class="table-cell value">3</span>             
            </span>
        </div>
        <div class="detail-content">
            <div class="detail-text"><?=$arResult["DETAIL_TEXT"]?></div>
            <div class="soc-share">
                <span class="soc-share-text">Поделись:</span>
                <script type="application/javascript" src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script type="application/javascript" src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,telegram"></div>
            </div>
            <?if($arResult["MOD_PHOTO"]):?>
                <div class="detail-photos">
                    <div class="photo-name">Фотоотчет:</div>
                    <div class="photo-list">
                        <?foreach($arResult["MOD_PHOTO"] as $photo):?>
                            <a href="<?=$photo["BIG"]?>" class="photo-item" data-fancybox="gallery">
                                <span class="photo-thumb" role="img" aria-label="" style="background-image:url(<?=$photo["SMALL"]?>"></span>
                            </a>
                        <?endforeach?>
                    </div>
                </div>
            <?endif?>
        </div>
    </div>
</div>