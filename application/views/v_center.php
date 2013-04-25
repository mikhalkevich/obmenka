<div class="mytable" id="pic_mytab_2"><div class="foruser" class="tovari">Товары пользователей</div>
    <div align="center">
    <?foreach($product_obmen_last as $prod_obmen):?>
      <?if ($prod_obmen->products_pic_small) {
        $picture = "media/uploads/tovars/".$prod_obmen->products_pic_small;
        } elseif($prod_obmen->products_pic) { 
        $picture = "media/uploads/tovars/".$prod_obmen->products_pic;
        }
        else {
        $picture = 'media/uploads/no_photo.png';
        }
       ?>
<figure class="last_obmen">
     <? $wont=HTML::anchor('tovars/subcat/'.$prod_obmen->id.'/one', 
	        HTML::image($picture, array(
			  'width'=>'150px', )));?>
 <?if($prod_obmen->gift == 'yes'):?>
  <div class="btn disabled fro_hotelka_darom" align="right">
    <?=HTML::image('media/img/na.png', array(
				'clas'=>'for_gift'));?>
    ДАРОМ!
   <?=$wont;?>
  </div>
 <?else:?>
  <div class="fro_hotelka">
    <?=$wont?>
  </div>
 <?endif?>
    <figcaption align="center"><?=HTML::anchor('tovars/subcat/'.$prod_obmen->id.'/one', $prod_obmen->name)?></figcaption>
    </figure>
    <?endforeach;?>
        <br style="clear:both">
    </div>
</div>
<script type="text/javascript">
jQuery(function($){
			<?foreach($product_vip as $prod_vip_pic):?>
<?if ($prod_vip_pic->pic_small) {
  $picture_small = "media/uploads/eshop/".$prod_vip_pic->pic_small;
  } else {
  $picture_small = 'media/uploads/no_photo.png';
  }
?>
	$("#link<?=$prod_vip_pic->id?>").live('mouseover', function(){
		$(".pic img").attr('src', '<?=$picture_small?>');
		$("#<?=$prod_vip_pic->id?>").css('display','block');	
		$(".alldesc:not(#<?=$prod_vip_pic->id?>)").css('display','none');	
	})
			<?endforeach?>

});	
</script>

<div class="mytable_account">
	 <div class="foruser_account"> 
  	   <div class="foruser_account_btn">Интернет-магазин</div>     
	</div>
<div class="block_center">
	<table width='100%'>
		<tr>
			<td width="150px" class="pic"><?=HTML::image($picture_small, array('alt' =>'Товары на продажу, обмен и даром', 'width'=> '150px'));?></td>
			<td class="menuright" valign="top">
			<?foreach($product_vip as $prod_vip):?>
			  <div>
                            <?=HTML::anchor(Kohana::$base_url."tovars/sell/".$prod_vip->id."/more", $prod_vip->name, array("class"=>"link", "id"=>"link".$prod_vip->id));?> <b>Цена</b>
			  <span class="under_price"><?=$prod_vip->price?></span> бел. руб.
			  </div>
			<?endforeach?>
			</td>
		</tr>
	</table>
</div>
</div>
<br /><br />
<?if(isset($forma)):?>
<?=$forma?>
<?endif?>
<h1 align="center">Акция!!! Obmenka.by предоставляет услугу: бесплатная разработка сайтов на поддомене obmenka.by. 
    Абонентское обслуживание (обработка прайсов, добавление товаров) - 500 тыс. в месяц.
</h1>