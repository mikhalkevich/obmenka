<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn"><?=$title?></div>     
	</div>
<div class="block_center">
 <? foreach($rand_tov as $rand_one):?>
<?if ($rand_one->pic_small) {
  $picture_small = "media/uploads/eshop/".$rand_one->pic_small;
  } else {
  $picture_small = 'media/uploads/no_photo.png';
  }
?>
<p align="center"><?=HTML::image($picture_small, array('alt' =>$rand_one->name, 'width'=> '150px'));?></p>
<div class="small_link"><?=HTML::anchor(Kohana::$base_url."tovars/sell/".$rand_one->id."/more", $rand_one->name, array("class"=>"link", "id"=>"link".$rand_one->id));?> 
        <br /><b>Цена</b> <span class="under_price"><?=$rand_one->price?></span> бел. руб.
	<hr />		  
</div>
<? endforeach; ?>
</div>

</div>


