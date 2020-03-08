<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<?
    use Bitrix\Main\Localization\Loc as Loc;
    Loc::loadMessages(__FILE__);
?>
<div class="feeback-from" id="form-<?=$component::$HASH_ID?>">
    <form action="">
        <?=bitrix_sessid_post()?>
        <div class="form-block table">
            <input type="hidden" name="HASH_ID" value="<?=$component::$HASH_ID?>">
            <input type="text" name="email" value="" style="height:0;position:absolute;opacity:0;width:0;">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <div class="form-row table-row">
                    <div class="table-cell">
                        <!--<label for="ID-<?=$arItem["ID"]?>"><?=$arItem["NAME"]?>:</label>-->
                    </div>
                    <div class="table-cell">
                        <?if($arItem["USER_TYPE"] == "HTML"):?>
                            <textarea
                                name="ID[<?=$arItem["ID"]?>]" 
                                class="is-required-<?=$arItem["IS_REQUIRED"]?> input" 
                                placeholder="Введите в поле <?=$arItem["NAME"]?>" 
                                id="ID-<?=$arItem["ID"]?>" 
                                cols="30" 
                                rows="10"></textarea>
                        <?else:?>
                            <input 
                                type="text" 
                                name="ID[<?=$arItem["ID"]?>]" 
                                placeholder="Введите в поле <?=$arItem["NAME"]?>" 
                                class="is-required-<?=$arItem["IS_REQUIRED"]?> input">
                        <?endif?>
                        <?if($arItem["IS_REQUIRED"] == "Y"):?>
                            <span class="required-asterix">*</span>
                        <?endif?>
                    </div>
                </div>
            <?endforeach?>
            <div class="form-row table-row">
                <div class="table-cell">
                    
                </div>
                <div class="table-cell">
                    <span class="req-text">Поля помеченные <span class="required-asterix-inline">*</span> обязательны для заполнения</span>
                </div>
            </div>
            <div class="form-row table-row">
                <div class="table-cell">
                </div>
                <div class="table-cell button-cell">
                    <button type="button" id="form-btn-<?=$component::$HASH_ID?>" class="btn btn-accent">Отправить</button>
                </div>
            </div>
            <div class="form-row table-row">
                <div class="table-cell">
                </div>
                <div class="table-cell">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.userconsent.request",
                        "",
                        array(
                            'ID' => $arParams["USER_CONSENT_ID"],
                            "IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
                            "IS_LOADED" => "Y",
                            "AUTO_SAVE" => "N",
                            'SUBMIT_EVENT_NAME' => 'my-event-'.$component::$HASH_ID,
                            'REPLACE' => array(
                                'button_caption' => 'Отправить',
                                'fields' => array('ФИО,Телефон,Электронный адрес')
                            ),
                        )
                    );?>
                </div>
            </div>
        </div>
    </form>
    <script type="application/javascript">
        BX.ready(function () {
            function showMessage(msg, cl, close){
                var box = "<div class='box-msg "+cl+"'>"+msg+"</div>";
                            box+= "<div class='box-msg-row'><button class='btn btn-accent' onclick='$.fancybox.close()'>Закрыть</button></div>";
                            box = "<div class='box-wrapper'>"+box+"</div>";

                            $.fancybox.open(box, {
                                afterClose:function(){
                                    if(close){
                                        $.fancybox.close();
                                    }
                                }
                            });
            }

            $(".input").change(function(){
                $(this).removeClass("error");
            });

            var submitBtn = BX('form-btn-<?=$component::$HASH_ID?>');

            BX.bind(submitBtn, 'click', function(){
                BX.onCustomEvent('my-event-<?=$component::$HASH_ID?>', []);
            });

            if (!BX.UserConsent)
            {
                return;
            }
            var control = BX.UserConsent.load(BX('form-<?=$component::$HASH_ID?>'));
            if (!control)
            {
                return;
            }

            BX.addCustomEvent(
                control,
                BX.UserConsent.events.save,
                function (data) {
                    var $inputs = $("#form-<?=$component::$HASH_ID?> .input");
                    var hasError = false;
                    $inputs.each(function(key, input){
                        var $input = $(input);

                        if($input.hasClass("is-required-Y") && $input.val().length == 0){
                            $input.addClass("error")
                            hasError = true;
                        }else{
                            $input.removeClass("error");
                        }
                    }); 
                    if(hasError){
                        showMessage("Нужно заполнить обязательные поля!", "red");
                    }else{
                        var $form = $("#form-<?=$component::$HASH_ID?> form");
                        var $btn = $('#form-btn-<?=$component::$HASH_ID?>');
                        $btn.prop('disabled', true);
                        BX.ajax({   
                            url: location.href,
                            data: $form.serialize(),
                            method: 'POST',
                            dataType: 'json',
                            timeout: 30,
                            async: true,
                            processData: true,
                            scriptsRunFirst: true,
                            emulateOnload: true,
                            start: true,
                            cache: false,
                            onsuccess: function(data){
                                $btn.prop('disabled', false);
                                if(data.ADDED){
                                    showMessage("Ваш запрос принят", "green", true);
                                    $("#form-<?=$component::$HASH_ID?> .input").each(function(key, input){
                                        $(input).val("");
                                    })
                                }else{
                                    showMessage(data.ERROR, "red");
                                }
                            },
                            onfailure: function(){
                                $btn.prop('disabled', false);
                            }
                        });
                    }
                }
            );

        });
    </script>
</div>