<? if($catalog):?>
  <? $bigtext = $catalog->name ?> 
<? else:?>
  <? $bigtext = "Товары широкого применения"?>
<? endif?>
 <div class="bigtext"> 
<?if($parent_cat):?>
     <?=HTML::anchor("tovars/sell/".$parent_id, $parent_cat, array("class" => "btn"));?> - 
<?endif?> 
<?=$bigtext?>  <span class="alltov">(<b><?=$count_all;?></b> тов.)</span></div>
<?if(isset($forma)):?>
<?=$forma?>
<?endif?>
 <?if ($cat_big):?>
 <?foreach ($cat_big as $cat):?>
  <?if($cat->has_children()):?>
				<div class="podrazdels">
					<?foreach($cat->children() as $catchild):?>

						 <?=HTML::anchor("tovars/sell/".$catchild->id, $catchild->name, array("class" => "clop"));?> | 
 
					<?endforeach?>
				</div>
  <?endif?>
  <?endforeach?>
  <?endif?>
<?foreach($products as $product):?>
<?if ($product->pic_small) {
  $picture_small = "media/uploads/eshop/".$product->pic_small;
  $picture = "media/uploads/eshop/".$product->pic;
  } else {
  $picture = 'media/uploads/no_photo.png';
  $picture_small = 'media/uploads/no_photo.png';
  }
switch ($product->status) {
case 'в наличии':
    $my_status = 'success';
    break;
case 'нет на складе':
    $my_status = 'danger';
    break;
case 'едет на склад':
    $my_status = 'warning';
    break;
case 'под заказ':
    $my_status = 'info';
    break;
default:
    $my_status = 'success';
}
?>
<div class="last_obmen prod">
<div class="fortov_menu">                          
 <?$wont = HTML::anchor('tovars/hochy/'.$product->id.'/sell', 'ХОЧУ', array('class'=>'btn btn-primary'))?> 
 			<?foreach($product->hotelka->find_all() as $prod):?>
			  <?if($prod->user_id == $user_id AND $prod->sell_obmen == 'sell'):?>
			   <?$wont="<a href='#' class='btn btn-success'>товар в хотелке</a>"?>
			   <?break;?>
			  <?endif?>
			 <?endforeach?>
    <?=$wont?>
</div> 
<?=HTML::anchor($picture, 
	        HTML::image($picture_small, array(
			  'width'=>'150px')));?>

<div class="mytov">
<?=HTML::anchor('tovars/sell/'.$product->catalog->id, $product->catalog->name)?>
<p class="under_name">
 <?=HTML::anchor('tovars/sell/'.$product->id.'/more', $product->name)?>
</p>
					<p>
					 <span class="label btn-<?=$my_status?>">
					  <?=$product->status?>
					 </span>
                    </p>
<div><b> Код товара: </b> <?=$product->product_code?> </div>
<div><b> Цена: </b><span class="under_price"> <?=$product->price?></span> бел. руб.</div>
</div>
</div>
<?endforeach?>
<br style="clear:both">
 <?=$pagination?>