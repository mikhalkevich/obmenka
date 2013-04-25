<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Отчеты</div>     
	</div>
<div class="add">
    <?if($errors):?>
		<?foreach ($errors as $error):?>
			<div class="error"><?=$error?></div>
		<?endforeach?>
	<?endif?>

<?= Form::open('/adminka/otchet/', array('method' => 'POST'));?>
<?= Form::textarea('body',$data['body'], array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1'))?><br/>
<?=Form::checkbox('showhide',1,true);?>
<?= Form::label('showhide_label','Уведомлять в админке');?><br/>
<?= Form::submit('add', 'Добавить');?>
<?=Form::close()?>  

</div>    
</div>
 <?foreach ($otchetList as $otchetItem):?>
 <div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn"><b><?=$otchetItem->getUser->username;?></b> <em><?=$otchetItem->putdate;?></em></div>     
	</div>
	<div style="float:right">
					  <?= Form::open('/adminka/otchet/', array('method' => 'POST'));?> 
                      <?= Form::hidden('otchet_id',$otchetItem->id);?>
                      <?= Form::submit('delete', 'Удалить', array('class'=>'btn btn-danger'));?>
                      <?= Form::close()?>  
	</div>
	<?=$otchetItem->body;?> 
 </div>
 <div class="clear"></div>
<?endforeach;?>
 
