<div class="mytable_account">
<?=$menu?>
<? if ($products->pic_small) {
  $picture = "media/uploads/eshop/".$products->pic_small;
  } elseif($products->pic) { 
  $picture = "media/uploads/eshop/".$products->pic;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
?>
<?=HTML::image($picture, array(
		  'class'=>'pic_tovar', 
		  'align'=>'left'));
		  ?>
<b class="text-success"><?=$products->name?></b><br />
<p><span class="label label-warning">Внимание! Вы собираетесь заменить это изображение.</span></p>
<p><?=HTML::anchor($uri, 'Назад', array('class' => 'class'));?></p>
<br style="clear:both">
	<?=Form::open('adminka/tovars/photo/'.$products->id."/".$page, array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
	<div class="control-group">
		<div class="controls">
			<?=Form::file('images[]', array('class'=>'btn', 'id'=>'multi'));?>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<?=Form::submit('submit', 'Заменить', array('class'=>'btn'));?>
		</div>
	</div>
	<?=Form::close();?>
</div>