<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<button class="btn <?=$arParams["CLASS"]?>" onclick="show_feeback(this)">Задать вопрос</button>

<div style="display:none;">
    <div class="form-block">
        <div class="form-header">Задать вопрос</div>
        <?$APPLICATION->IncludeComponent(
            "soc.project:feedback.form", 
            ".default", 
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "service",
                "IBLOCK_ID" => "22",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "USER_CONSENT" => "Y",
                "USER_CONSENT_ID" => "1",
                "USER_CONSENT_IS_CHECKED" => "Y",
                "USER_CONSENT_IS_LOADED" => "N"
            ),
            false
        );?>
    </div>
</div>
<script type="application/javascript">
    function show_feeback(e){
        var $e = $(e);
        $.fancybox.open($e.next().children());
    }
</script>