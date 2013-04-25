<script type="text/javascript">
$(function(){
  line1 = [["доверие: <?=$plus?>",<?=$plus?>], ["недоверие: <?=$minus?>",<?=$minus?>]];
  $.jqplot("__example__", [line1], {
    title: "",
    seriesDefaults: {
      renderer: $.jqplot.PieRenderer,
      rendererOptions: {
        sliceMargin:8
      }
    },
    legend: { show:true }
  });
});
</script>
<div align="center">
<h1 class="reiting"><span>Рейтинг доверия</span> <?=$first_name?></h1>
<div class="plus_block">
<?if(!$sender) :?>
<?=HTML::anchor('main/user/plus/'.$user_id, ' доверяю ', array('class'=>'btn btn-primary btn-large'))?> 
<?=HTML::anchor('main/user/minus/'.$user_id, ' не доверяю ', array('class'=>'btn btn-primary_minus btn-large'))?> 
<?else:?>
  <?if($sender == 'i_am'):?>
  Вы можете только видеть свой рейтинг, но не имеете права изменять его.
  <?else:?>
	Ваш голос учтен. Позже, например, завтра, вы снова сможете принять участие в составлении рейтинга на данного пользователя.
  <?endif?>
<?endif?>
</div>
<div class="pic_tovar" id="__example__" style="height:340px; width:540px;"></div>
</div>

<div class="mytable_account">
	 <div class="foruser_account">
 <a name="bind"></a>
  	   <div class="foruser_account_btn">Что вы можете сказать об этом человеке</div>     
	</div>
	<?if($errors):?>
		<?foreach ($errors as $error):?>
			<div class="error"><?=$error?></div>
		<?endforeach?>
	<?endif?>
	<?if($msg):?>
		<?foreach ($msg as $msg_one):?>
			<div class="msgs"><?=$msg_one->about?>
 <div align='right'>
            <?= HTML::anchor('userone/'.$msg_one->user_commentator->id, $msg_one->user_commentator->first_name)?> 
     (<?=$msg_one->putdate?>)
 </div>
                        </div>
		<?endforeach?>
	<?endif?>                  
<?=Form::open('userone/'.$user_id.'#bind');?>
<div><?=Form::textarea("about", '', array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1'));?></div>
<div><?=Form::submit('submit', 'Сохранить', array('class'=>'btn btn-success'))?></div>
<?=Form::close()?>

</div>