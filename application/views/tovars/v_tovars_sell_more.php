
<br style="clear:both">
<? $picture = 'media/uploads/no_photo.png'; ?>
<? $picture_small = 'media/uploads/no_photo.png'; ?>

<?if ($product->pic_small) {
  $picture_small = "media/uploads/eshop/".$product->pic_small;
  $picture = "media/uploads/eshop/".$product->pic;
  }
switch ($product->status) {
case 'в наличии':
    $my_status = 'success';
    break;
case 'нет на складе':
    $my_status = 'warning';
    break;
case 'едет на склад':
    $my_status = 'danger';
    break;
default:
    $my_status = 'success';
}
?>
<div class="mytable_account">
 <div class="foruser_account">
     <div class="foruser_account_btn"><?=$product->name?></div>
 </div>
 
	<table width="100%" class="sell_tov">
	<tbody>
		<tr>
			<td width="150px" valign="top" class="lightboxclass">
				<?=HTML::anchor($picture, 
							HTML::image($picture, array('class'=>'pic_tovar',)));?>
				</td>
				<td valign="top">
				<div class="mytov">
					<p>
                                         <? if(isset($product->status)):?>
					 <span class="label btn-<?=$my_status?>">
					  <?=$product->status?>
					 </span>
                                         <? endif?>
                    </p>
					<p>Категория: <?=HTML::anchor("tovars/sell/".$product->catalog->id, $product->catalog->name)?></p>
					<div><b> Цена: </b><span class="under_price"> <?=$product->price?></span> бел. руб. </div>
					<div><b> Код товара: </b> <?=$product->product_code?> </div>
					<em>дата добавления:</em> <?=$product->putdate?>
                </div>
			</td>
<td width="150px" valign="top" align="right">
<div class="fortov_menu">                          
 <?$wont = HTML::anchor('tovars/hochy/'.$product->id.'/sell', 'ХОЧУ', array('class'=>'btn btn-primary'))?> 
 			<?foreach($product->hotelka->find_all() as $prod):?>
			  <?if($prod->user_id == $user_id):?>
			   <?$wont="<a href='#' class='btn btn-success'>товар в хотелке</a>"?>
			   <?break;?>
			  <?endif?>
			 <?endforeach?>
    <?=$wont?>
</div> 
</td>
		 </tr>
	  </tbody>
    </table>
	<?=$product->description?>
</div>
<br style="clear:both">