<div class="mytable_account">
     <?=$menu?>
<?foreach($hotelki as $hotelka):?>
<? if ($hotelka->product->products_pic_small) {
  $picture = "media/uploads/tovars/".$hotelka->product->products_pic_small;
  } elseif($hotelka->product->products_pic) { 
  $picture = "media/uploads/tovars/".$hotelka->product->products_pic;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
?>
<table  class="breadcrumb" width=100%>
<tr>
<td width=100px>
<?=HTML::image($picture, array(
		  'width'=>'100px', 
		  'class'=>'pic_tovar', 
		  'align'=>'left'));
		  ?>
</td>
<td valign="top">
<div class="mytov">
<b><?=$hotelka->product->name?></b><br />
<p><em>Владелец:</em> 
<?= HTML::anchor("userone/".$hotelka->product->user->id, $hotelka->product->user->first_name)?></p>
<p><em>дата добавления товара:</em> <?=$hotelka->product->put_date?></p>
<p><em>дата появления желания:</em> <?=$hotelka->putdate?></p>
</div>
</td>
<td width=178px class="fortov_menu" valign="top">
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))."Передумал", 
				array('class'=>'btn',
				"onclick"=>"delete_position(
				   '".KOHANA::$base_url."account/deletehotelka/".$hotelka->id."', 'Вы действительно хотите удалить хотелку?')
				   "))?> 
</td>
</tr>
</table>
<?endforeach?>
</div>

