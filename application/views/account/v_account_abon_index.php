<p>
Мои абонементы
</p>
<?foreach($abonement as $hotelka):?>
<? if ($hotelka->book->picture_small) {
  $picture = "media/uploads/books/".$hotelka->book->picture_small;
  } elseif($hotelka->book->picture) { 
  $picture = "media/uploads/books/".$hotelka->book->picture;
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
<div class="mybok">
<b><?=$hotelka->book->name?></b><br />
<?= HTML::anchor("books/subcat/".$hotelka->book->subcat->id, $hotelka->book->subcat->name)?><br >
<p><em>Владелец:</em> 
<?= HTML::anchor("userone/".$hotelka->book->user->id, $hotelka->book->user->first_name)?></p>
<p><em>дата добавления:</em> <?=$hotelka->book->putdate?></p>
</div>
</td>
<td width=178px class="fortov_menu" valign="top">
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))."Удалить", 
				array('class'=>'btn',
				"onclick"=>"delete_position(
				   'deleteabonement/".$hotelka->id."', 'Вы действительно хотите удалить из абонемента?')
				   "))?> 
<?= HTML::anchor("account/predlognaabonement/".$hotelka->id, HTML::image("media/img/refreshyellow.gif", 
                                    array("width"=>"24px")).'Предложить на временное пользование', array('class'=>'btn'))?>
</td>
</tr>
</table>
<?endforeach?>

