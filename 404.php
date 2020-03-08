<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка 404");
?>
<div class="page-404">
    <div class="pic-404">
        <img src="<?=CONSTANT::TPL_PATH?>img/seistalife_404.png" alt="">
    </div>
    <div class="text-404">Запрашиваемая страница не найдена</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>