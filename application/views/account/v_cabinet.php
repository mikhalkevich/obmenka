<div class="mytable_account">
     <?=$menu?> 
<?if($my_tov_hotelka >0):?>
 <p>Всего пользователей, которые хотят мои товары: <?=HTML::anchor('tovars/managment/my', $my_tov_hotelka, 
         array('class'=>'btn'));?>
 <div>
 
  <?foreach($my_products as $my_product):?>
     <?foreach($my_product->hotelka->find_all() as $my_product_hotelka):?>
     <p>
      <?if(isset($my_product_hotelka->user->id)):?>
       <?=HTML::anchor('userone/'.$my_product_hotelka->user->id, $my_product_hotelka->user->first_name)?> хочет 
       <?=HTML::anchor('#', $my_product_hotelka->product->name)?>
      <?endif;?>
     </p>
     <?endforeach;?>
  <?endforeach; ?>
 </code> 
 </div>
 </p>
<?endif?>
<?if($hotelki_sell_all >0):?>
 <p>Я хочу купить: <?=HTML::anchor('account/cabinet/sell', $hotelki_sell_all, array('class'=>'btn'));?>  тов.</p>
<?endif?>
 <?if($hotelki_obmen_all >0):?>

 <p>Я хочу обменять или даром: <?=HTML::anchor('account/cabinet/obmen', $hotelki_obmen_all, array('class'=>'btn'));?>
  <?if($hot_darom_all > 0):?>
    , из них даром <?=HTML::anchor('account/cabinet/obmen', $hot_darom_all, array('class'=>'btn'));?>
  <?endif;?> тов.
 </p>
<?endif?>
 <hr />
 <h2>Я хочу</h2>
 <?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=FORM::open('account/cabinet', array('method'=>'POST'))?>
 <table>
   <tr>
     <td valign="top" width="200px">Наименование товара</td>
     <td valign="top"><?=FORM::input('wont');?></td>
   </tr>
   <tr>
      <td valign="top">Подробнее (можно ссылки)</td>
      <td valign="top"><?=FORM::textarea('about', '', array('rows'=>'4'))?></td>
    </tr>
    <tr>
       <td colspan="2" align="right"><?=FORM::submit('tovar_send', 'ХОЧУ', array('class'=>'btn btn-success'));?></td>
    </tr>
  </table>
<?=FORM::close();?>
<?foreach($hot_new_all as $hot_new_one):?>
 <hr />
 <b><?=$hot_new_one->name;?></b>,
 <?if(isset($hot_new_one->body)):?>
 <?=$hot_new_one->body?>
 <?endif;?>
 (<em><?=$hot_new_one->putdate?></em>)
 <?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))."", 
				array(
				"onclick"=>"delete_position(
				   '".kohana::$base_url."accountdell/hotdell/".$hot_new_one->id."', 'Вы действительно хотите удалить товар?')
				   "))?>
<?endforeach;?>
 <?=$pagination?>
</div>