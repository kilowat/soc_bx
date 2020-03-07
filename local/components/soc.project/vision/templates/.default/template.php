<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="vision-ver">
    <a href="#" class="bvi-open" title="Версия сайта для слабовидящих">Версия для слабовидящих </a>
    <span class="vision-icon">
        <svg class="svg-icon icon-white ic-middle">
		    <use xlink:href="<?=CONSTANT::TPL_PATH?>/sprites/spritemap.svg#sprite-remove_red_eye-24px"></use>
		</svg>
    </span>
    <script type="application/javascript">
    jQuery(document).ready(function($){
        $.bvi({
                'bvi_target': '.bvi-open',
                "bvi_theme":"white",
                "bvi_font":"arial",
                "bvi_font_size":16,
                "bvi_letter_spacing":"normal",
                "bvi_line_height":"normal",
                "bvi_images":true,
                "bvi_reload":false,
                "bvi_fixed":false,
                "bvi_voice":true,
                "bvi_flash_iframe":true,
                "bvi_hide":false
        });
    });
    </script>
</div>


