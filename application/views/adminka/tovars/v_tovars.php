<div class="mytable_account">
	<?=$menu?>
	<?if($errors):?>
		<?foreach ($errors as $error):?>
			<div class="error"><?=$error?></div>
		<?endforeach?>
	<?endif?>
	<?=Form::open('adminka/tovars', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
	<div class="control-group">
		<label class="control-label">ID категории</label>
			<div class="controls">
			<?=Form::input('cat_number', $data['cat_number'])?>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Название товара</label>
			<div class="controls">
			<?=Form::input('name', $data['name'])?>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Описание товара</label>
			<div class="controls">
			<?=Form::textarea('description', $data['description'])?>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Цена</label>
			<div class="controls">
			<?=Form::input('price', $data['price'])?>
			</div>
	</div>
	<div class="control-group">	
		<label class="control-label">В наличии</label>
			<div class="controls">
				<?=Form::radio('status', 'В наличии', true);?>
			</div>
		<label class="control-label">Нет на складе</label>
			<div class="controls">
				<?=Form::radio('status', 'Нет на складе', false);?>
			</div>
		<label class="control-label">Едет на склад</label>
			<div class="controls">
				<?=Form::radio('status', 'Едет на склад', false);?>			
			</div>
		<label class="control-label">Едет на склад</label>
			<div class="controls">
				<?=Form::radio('status', 'Под заказ', false);?>			
			</div>
	</div>
	<div class="control-group">		
		<label class="control-label">Отображать</label>
			<div class="controls">
			<?=Form::checkbox('showhide', 'show', true);?>			
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Изображение</label>
		<div class="controls">
			<?=Form::file('images[]', array('class'=>'btn', 'id'=>'multi'));?>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<?=Form::submit('submit', 'Добавить товар', array('class'=>'btn'));?>
		</div>
	</div>
	
	<?=Form::close();?>
</div>