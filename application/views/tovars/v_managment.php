<div class="mytable_account">
<?=$menu?>
    <p class="errors">Чтобы обменяться, либо отдать товар даром, 
        кликните по фамилии пользователя.</p>
<?foreach($my_products as $my_product):?>
<? if ($my_product->products_pic_small) {
  $picture = "media/uploads/tovars/".$my_product->products_pic_small;
  } elseif($my_product->products_pic) { 
  $picture = "media/uploads/tovars/".$my_product->products_pic;
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
<b><?=$my_product->name?></b><br />
 
<em>дата добавления:</em> <?=$my_product->put_date?>
</div>
</td>
<td align="right" valign="top" class="my_tov_wont">
    <em>Товар хотят:</em>
    <?foreach($my_product->hotelka->find_all() as $hochy):?>
     <?if($hochy->user->first_name):?>
      <div><?=HTML::anchor("#", $hochy->user->first_name);?></div>
     <?endif;?>
    <?endforeach;?>
</td>
<td width=160px class="fortov_menu" valign="top">
<?if($my_product->gift == 'yes'):?>
   <?$class_gift = 'btn disabled';?>
   <?$slovo_gift = 'ДАРОМ'?>
<?else:?>
   <?$class_gift = '';?>
   <?$slovo_gift = ''?>
<?endif;?>
<div class="<?=$class_gift?>">
    <?=$slovo_gift?>
<?= HTML::anchor("#/".$my_product->id, 
                HTML::image("media/img/refreshyellow.gif", 
                                    array("width"=>"24px"))." Редактировать", 
				array('class'=>'btn'))?></a>
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Удалить", 
				array('class'=>'btn',
				"onclick"=>"delete_position(
				   '".kohana::$base_url."tovars/delete/".$my_product->id."', 'Вы действительно хотите удалить товар?')
				   "))?>
</div>
</td>
</tr>
</table>
<?endforeach?>
<?=$pagination?>
</div>