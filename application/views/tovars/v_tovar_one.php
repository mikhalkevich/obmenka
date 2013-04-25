<div id="pic_mytab_2" class="mytable"><div class="foruser"><?=$product->name;?></div>
  <div align="center"><?
  if($product->products_pic) { 
  	        echo HTML::image("media/uploads/tovars/".$product->products_pic, array(
			  'width'=>'600px', 
			  'class'=>'pic_tovar'));
  }
  ?>
 <table width="600px" class="none">
     <tr>
         <td>
 <?if($product->description):?>
   <div class="description"> <?=$product->description?> </div>
 <?endif?>
 <?if($product->wishes):?>
    <div class="yslovia"><b>Условие:</b> <em><?=$product->wishes?></em></div>
 <?endif?>
 <?=HTML::anchor('userone/'.$product->user->id, $product->user->first_name);?> <br />
 <?=HTML::anchor('tovars/subcat/'.$product->user->id.'/usertovars/', 'Товары пользователя');?>
         </td>
         <td width="120px">
             	     <?=View::factory('tovars/v_shablon_for_knopka_hotelki')
                           ->bind('product', $product)
                           ->bind('user_id', $user_id);?>
         </td>
      </tr>
 </table>
 </div>
</div>