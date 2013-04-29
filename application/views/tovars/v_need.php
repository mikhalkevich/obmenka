<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Товары, которые нужы пользователям</div>     
	</div>
     <table width="100%" class="table table-condensed">
          <tr class="success">
               <td>
                    Наименование товара
                </td>
                <td width="200px">
                    Кому нужен
                </td>
          </tr>
     </table>
     <div class="breadcrumb">     
<?foreach($products as $product):?>

 <b><?=$product->name?></b>
  <?if(isset($product->body)):?>
  <?=$product->body?>
  <?endif;?>
 <div align="right" class="block_need">
     <?if($product->user->usermore->pic):?>
      <?=HTML::image("media/uploads/users/small_".$product->user->usermore->pic, array('class'=> 'small_pic_user'))?>
     <?endif;?>
              <?=$product->putdate?><br>
              <?=HTML::anchor('msg/'.$product->user->id, $product->user->first_name)?>            
              <br style="clear:both">
      </div>
    <hr style="clear:both" />
<?endforeach?>
   </div>
    <?=$pagination?>
</div>