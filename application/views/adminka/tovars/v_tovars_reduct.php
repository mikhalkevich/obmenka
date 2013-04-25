<div class="mytable_account">
<?=$menu?>
	<?=Form::open('adminka/tovars/reduct/0/', array('class'=>'form-horizontal'))?>
	  <?=Form::input('searchadmintov', '', array('size' => 40));?>
	  <?=Form::submit('submit_searchadmintov', 'Искать по коду товара', array('class'=>'btn'));?> 
	<?=Form::close();?>
<?foreach($my_products as $my_product):?>
<? if ($my_product->pic_small) {
  $picture = "media/uploads/eshop/".$my_product->pic_small;
  } elseif($my_product->pic) { 
  $picture = "media/uploads/eshop/".$my_product->pic;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
?>
<table  class="breadcrumb" width=100%>
<tr>
<td valign="top" width=100px>
<?=HTML::image($picture, array(
		  'width'=>'100px', 
		  'class'=>'pic_tovar', 
		  'align'=>'left'));
		  ?>
</td>
<td valign="top">
<div class="mytov">
<p>Название: <b><?=$my_product->name?></b></p>
<p>Категория: <b><?=$my_product->catalog->name?></b></p>
<p>Код товара: <b><?=$my_product->product_code?></b></p>
<p>Оптовик: <b><?=$my_product->optovik?></b></p>
<p>Цена: <?=$my_product->price?></p>
<p>Статус: <?=$my_product->status?></p>
<p>Дата добавления: <?=$my_product->putdate?></p>
</div>
</td>
<td width=150px class="fortov_menu" valign="top">
<?= HTML::anchor("adminka/tovars/edit/".$my_product->id."/".$page, 
                HTML::image("media/img/refreshyellow.gif", 
                                    array("width"=>"24px"))." Редактировать", 
				array('class'=>'btn btn-mini btn-success'))?>
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Удалить", 
				array('class'=>'btn btn-mini',
				"onclick"=>"delete_position(
				   '".Kohana::$base_url."adminka/tovars/delete/".$my_product->id."', 'Вы действительно хотите удалить товар?')
				   "))?>
<?if($my_product->showhide == 'show'):?>
<?= HTML::anchor("adminka/tovars/hide/".$my_product->id,
				HTML::image("media/img/folder_locked.gif", 
                                    array("width"=>"24px"))." Скрыть", 
				array('class'=>'btn btn-mini'
				   ))?>
<?else:?>
<?= HTML::anchor("adminka/tovars/show/".$my_product->id,
				HTML::image("media/img/show.gif", 
                                    array("width"=>"24px"))." Показывать", 
				array('class'=>'btn btn-mini'))?>
<?endif?>
<?= HTML::anchor("adminka/tovars/photo/".$my_product->id."/".$page,
				HTML::image("media/img/photo.png", 
                                    array("width"=>"24px"))." Управление фото", 
				array('class'=>'btn btn-mini'))?>
</td>
</tr>
</table>
<?endforeach?>
<?=$pagination?>
</div>