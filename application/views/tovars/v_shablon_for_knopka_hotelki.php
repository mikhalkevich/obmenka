 <?if($product->user_id != $user_id):?>
		   <?$wont=HTML::anchor('tovars/hochy/'.$product->id, 'Хочу', array("class"=>"btn btn-primary"));?>
			<?foreach($product->hotelka->find_all() as $prod):?>
			  <?if($prod->user_id == $user_id):?>
			   <?$wont="<a href='#' class='btn btn-success'>товар в хотелке</a>"?>
			   <?break;?>
			  <?endif?>
			 <?endforeach?>
				<?if($product->gift == 'yes'):?>
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
         <?else:?>
		  Это ваш товар
         <?endif?>
	    <?$hotelka = count($product->hotelka->find_all())?>
		 <?if($hotelka > 0):?>
		  <?if($hotelka == 1):?>
		   <?$slovo = "хочет"?>
		  <?else:?>
		   <?$slovo = "хотят"?>
		  <?endif?>
	      <p> <b><?=$hotelka?></b> чел. <?=$slovo?> этот товар</p>
	     <?endif?>