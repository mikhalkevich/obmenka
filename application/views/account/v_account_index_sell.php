<div class="mytable_account">
     <?=$menu?>
<?foreach($hotelki as $hotelka):?>
<?
 $class_status = 'none';
switch ($hotelka->status) {
case 'zdet':
    $class_status = 'btn disabled fro_hotelka_darom';
    $my_status = 'ЖДУ';
    break;
case 'podtverdil':
    $my_status = 'ПОЛУЧИЛ';
    break;
case 'otkaz':
    $my_status = 'ОТКАЗАЛ';
    break;
default:
    $my_status = '';
}
?>
<? if ($hotelka->tovar->pic_small) {
  $picture = "media/uploads/eshop/".$hotelka->tovar->pic_small;
  } elseif($hotelka->tovar->pic) { 
  $picture = "media/uploads/eshop/".$hotelka->tovar->pic;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
?>
<table  class="breadcrumb" width=100%>
<tr class="<?=$hotelka->status?>">
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
<?= HTML::anchor("tovars/sell/".$hotelka->tovar->id."/more", $hotelka->tovar->name)?><br >
<p>Цена <span class="under_price"><?=$hotelka->tovar->price?></span> бел.руб.</p>
<p>Код товара <b><?=$hotelka->tovar->product_code?></b></p>
<p><em>дата появления желания:</em> <?=$hotelka->putdate?></p>
</div>
</td>
<td width=178px class="fortov_menu" valign="top">
 <div class="<?=$class_status?>">
      <?=$my_status?>
<?=HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))."Передумал", 
				array('class'=>'btn',
				"onclick"=>"delete_position(
				   '".KOHANA::$base_url."account/deletehotelka/".$hotelka->id."', 'Вы действительно хотите удалить хотелку?')
				   "))?> 
</div>
</td>
</tr>
</table>
<?endforeach?>
</div>

