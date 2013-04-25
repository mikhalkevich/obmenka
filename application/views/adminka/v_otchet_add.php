<p>
    Создание отчёта
</p>
	<?if($errors):?>
		<?foreach ($errors as $error):?>
			<div class="error"><?=$error?></div>
		<?endforeach?>
	<?endif?>
<pre>
<?= Form::open('/adminka/otchet/add', array('method' => 'POST'));?>
<?= Form::input('title','', array('size' => 50))?> <br/>
<?= Form::textarea('body','')?><br/>
<?=Form::checkbox('showhide',1,true);?>
<?= Form::label('showhide_label','Уведомлять в админке');?><br/>
<?= Form::submit('add', 'Добавить');?>
<?=Form::close()?>  

</pre>