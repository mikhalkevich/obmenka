<?php  defined('SYSPATH') or die('No direct script access.'); ?>
<div class="mytable_account">
    <div class="foruser_account">
        <div class="foruser_account_btn">Поиск описание товаров</div>
    </div>
    <div class="buttons">
        <?=FORM::label('forsearch', 'Выберите поставщика товара');?>
        <select name="forsearch">
            <?php foreach($distributers as $distributer):?>
                <option value="<?=$distributer;?>"><?=$distributer;?></option>
            <?php endforeach;?>
        </select>

        <br/>
        <button id="start-search" class="btn">Начать поиск</button>
    </div>
    <div id="result">
        <p>Найдено Ваших товаров без изображений: <b><?=$none_picture_count;?></b></p>
        <p>Найдено Ваших товаров без описаний: <b><?=$none_description_count;?></b></p>
    </div>


</div>

<script type="text/javascript">
    (function(){
        $.ajaxSetup({
            url: "<?=Kohana::$base_url?>adminka/ajax/findDescription",
            type: "POST",
            beforeSend: function(){
                $("#result").html("<img src='<?=Kohana::$base_url?>media/img/loader.gif' />");
            },
            success: function(data){
                $("#result").html(data);
            },
            error: function(data){
                $("#result").html(data);
            }
        })

        $('button#start-search').click(function(){
            var distributer = $('select[name=forsearch] option:selected');
            $.ajax({ data: "distributer="+distributer.val() });
        });
    })(jQuery)
</script>
