<div class="mytable_account">
	<?=$menu?>
	<?if($neznakomka):?>
		<?foreach ($neznakomka as $nezn):?>
			<div class="green"><?=$nezn?></div>
		<?endforeach?>
	<?endif?>
	<?if($errors):?>
		<?foreach ($errors as $error):?>
			<div class="error"><?=$error?></div>
		<?endforeach?>
	<?endif?>
<p>
Прайс формата:
<pre>
Категория; Имя продукта; Код продукта; Цена, бел.руб; Оптовик; Статус ('в наличии','нет на складе','едет на склад'); 
</pre>
</p>
	<?=Form::open('mainprice', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
	<div class="control-group">
		<label class="control-label">Прайс-лист</label>
		<div class="controls">
			<?=Form::file('images[]', array('class'=>'btn', 'id'=>'multi'));?>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<?=Form::submit('submit', 'Добавить прайс', array('class'=>'btn'));?>
		</div>
	</div>
	
	<?=Form::close();?>
</div>