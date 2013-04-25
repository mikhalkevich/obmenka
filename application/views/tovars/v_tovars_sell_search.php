<div class="bigtext">
    Поиск
</div>
<?if(isset($forma)):?>
<?=$forma?>
<?endif?>
<div class="mytable_account">
 <div class="foruser_account">
     <div class="foruser_account_btn">Результаты поиска по запросу 
         <em><?
         if(isset($post_in)){
             echo $post_in;
         }
         ?></em>
         </div>
 </div>
<?if(isset($search_tov)):?>
<table>
    <?foreach($search_tov as $search_one):?>
        <?if ($search_one->pic_small) {
          $picture_small = "media/uploads/eshop/".$search_one->pic_small;
        }else{
          $picture_small = 'media/uploads/no_photo.png';
        }?>
     <tr>
       <p>
        <td width="100px">
        <?=HTML::image($picture_small, array('class'=>'pic_tovar', 'width'=>'100px', 'align'=>'left'));?>
        </td>
        <td>
       <?=HTML::anchor('tovars/sell/'.$search_one->id.'/more',$search_one->name)?> 
           Код товара:<b><?=$search_one->product_code?></b>
           Цена <b class="under_price"><?=$search_one->price?></b>
       </p>
       <br style="clear:both">
       </td>
      </tr>
    <?endforeach?>
</table>
<?endif?>
</div>
