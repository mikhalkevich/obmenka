<div class="mytable_account">
<?=$menu?>
<?foreach($my_products as $my_product):?>
<? if ($my_product->picture_small) {
  $picture = "media/uploads/books/".$my_product->picture_small;
  } elseif($my_product->picture) { 
  $picture = "media/uploads/books/".$my_product->picture;
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
		  'class'=>'pic_book', 
		  'align'=>'left'));
		  ?>
</td>
<td valign="top">
<div class="mytov">
<b><?=$my_product->name?></b><br />
<?= HTML::anchor("books/subcat/".$my_product->subcat->id, $my_product->subcat->name)?><br >
<em>дата добавления:</em> <?=$my_product->putdate?>
</div>
</td>
<td width=150px class="fortov_menu" valign="top">
<?= HTML::anchor("#/".$my_product->id, 
                HTML::image("media/img/refreshyellow.gif", 
                                    array("width"=>"24px"))." Редактировать", 
				array('class'=>'btn'))?></a>
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Удалить", 
				array('class'=>'btn',
				"onclick"=>"delete_position(
				   'delete/".$my_product->id."', 'Вы действительно хотите удалить книгу?')
				   "))?></a>
</td>
</tr>
</table>
<?endforeach?>
<?=$pagination?>
</div>