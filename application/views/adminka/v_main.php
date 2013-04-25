<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Пользовательские хотелки</div>     
	</div>
<?if ($hotelki):?>
    <table class="table">
       <thead><tr><th>Товар</th><th>Пользователь</th><th>Дата</th> <th>Действия</th></tr></thead>
      <?foreach ($hotelki as $hotelka):?>
       <tr class="<?=$hotelka->status?>">
        <td>
         <?if($hotelka->tovar->pic_small):?>
             <? $picture_tovar = $hotelka->tovar->pic_small;?>
             <?=HTML::image('media/uploads/eshop/'.$picture_tovar, array(
                 'width'=>'50px',
                 'align'=>'left'));?>
            <?endif;?>
<?
switch ($hotelka->tovar->status) {
case 'в наличии':
    $my_status = 'success';
    break;
case 'нет на складе':
    $my_status = 'danger';
    break;
case 'едет на склад':
    $my_status = 'warning';
    break;
default:
    $my_status = 'success';
}
 
 $class_status = 'none';
switch ($hotelka->status) {
case 'zdet':
    $class_status = 'btn disabled';
    $status = 'ЖДЕТ С '.$hotelka->putdate_wait;
    break;
case 'podtverdil':
    $status = 'ПОЛУЧИЛ';
    break;
case 'otkaz':
    $status = 'ОТКАЗАЛ';
    break;
default:
    $status = '';
}
?>
          <span class="label btn-<?=$my_status?>"> <?=$hotelka->tovar->status?> </span>
          <?= HTML::anchor('tovars/sell/'.$hotelka->tovar->id.'/more', $hotelka->tovar->name)?>
          (цена: <span class="under_price"><?=$hotelka->tovar->price?></span>, 
          код товра <b><?=$hotelka->tovar->product_code?></b>)

        </td>
        <td>
            <?if($hotelka->user->usermore->pic):?>
             <? $picture = $hotelka->user->usermore->pic;?>
             <?=HTML::image('media/uploads/users/small_'.$picture, array(
                 'width'=>'50px',
                 'align'=>'left'));?>
            <?endif;?>
            <?= HTML::anchor('userone/'.$hotelka->user->id, $hotelka->user->first_name)?>
        </td>
        <td>
            <em><?=$hotelka->putdate;?></em>
        </td>
<td width="170px" valign="top" class="fortov_menu">
 <div class="<?=$class_status?>">
      <?=$status?>
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Отказать", 
				array('class'=>'btn btn-mini',
				"onclick"=>"delete_position(
				   '".Kohana::$base_url."adminka/hotelka/delete/".$hotelka->id."', 
                                       'Вы действительно хотите удалить пользовательскую хотелку?')
				   "))?>
<?= HTML::anchor("adminka/hotelka/ok/".$hotelka->id, 
                HTML::image("media/img/ok.png", 
                                    array("width"=>"24px"))." Подтвердить", 
				array('class'=>'btn btn-mini'))?>
<?= HTML::anchor("adminka/hotelka/vzamen/".$hotelka->id, 
                HTML::image("media/img/kot.png", 
                                    array("width"=>"24px"))." Предложить взамен", 
				array('class'=>'btn btn-mini'))?>
   </div>
</td>
       </tr>
      <?endforeach;?>
     </table>
    <?=$pagination?>
<?endif;?>
</div>