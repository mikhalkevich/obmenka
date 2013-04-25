<div class="mytable_account">
<?=$menu?>
<?if($errors):?>
		<?foreach ($errors as $error):?>
			<div class="error"><?=$error?></div>
		<?endforeach?>
	<?endif?>
	<?=Form::open('adminka/tovars/edit/'.$data['id'].'/'.$page, array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
	<div class="control-group">
		<label class="control-label">ID категории</label>
			<div class="controls">
			<?=Form::input('cut_id', $data['cut_id'])?>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Название товара</label>
			<div class="controls">
			<?=Form::input('name', $data['name'])?>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Оптовик</label>
			<div class="controls">
			<?=Form::input('optovik', $data['optovik'])?>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label">Описание товара</label>
			<div class="controls">
			<?=Form::textarea('description', $data['description'])?>
			</div>
	</div>
    <div class="control-group">
		<label class="control-label">Код товара</label>
			<div class="controls">
			<?=Form::input('product_code', $data['product_code'])?>
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
			<?
			switch($data['status']) // переключающее выражение
{
   case 'в наличии':
      $v_nalichii = true;
      $net_na_sklade = false;
      $edet_na_sklad = false;
   break;
   case 'нет на складе':
      $v_nalichii = false; 
      $net_na_sklade = true;
      $edet_na_sklad = false;
   break;   
   case 'едет на склад':		 
      $v_nalichii = false;
      $net_na_sklade = false;
      $edet_na_sklad = true;
	  break;
	  default: 
      $v_nalichii = false;
      $net_na_sklade = false;
      $edet_na_sklad = false;
}
			?>
				<?=Form::radio('status', 'В наличии', $v_nalichii);?>
			</div>
		<label class="control-label">Нет на складе</label>
			<div class="controls">
				<?=Form::radio('status', 'нет на складе', $net_na_sklade);?>
			</div>
		<label class="control-label">Едет на склад</label>
			<div class="controls">
				<?=Form::radio('status', 'Едет на склад', $edet_na_sklad);?>			
			</div>
			
	</div>
	<div class="control-group">
		<div class="controls">
			<?=Form::submit('submit', 'Сохранить', array('class'=>'btn'));?>
		</div>
	</div>
	
	<?=Form::close();?>
</div>