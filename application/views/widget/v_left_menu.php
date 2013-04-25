 
<div class="left_title"><?=$menu_text?></div>
	 <ul class="navigation">
	   <?foreach ($left_block as $left_small):?>
		 <li><a href=''><?=$left_small->name; ?></a>
	   <?if($left_small->subcategories->find_all()) :?>
		  <ul>
		  <?foreach ($left_small->subcategories->find_all() as $sub) :?>
			<li><?= HTML::anchor($link.'/'.$sub->id, $sub->name)?></li>
		  <?endforeach?>
		  </ul>
	   <?endif?>
		 </li>
	  <?endforeach?>
	 </ul>
 