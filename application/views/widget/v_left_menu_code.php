<div class="block_left">
  <div class="nav nav-tabs nav-stacked">
	<ul class="outer">
	
	
		<?foreach ($catalog as $cat):?>

		    <li>
			<?=HTML::anchor("code/allcode/".$cat->root->id, $cat->root->name,
                                array('class'=>'btn btn-primary',
                                      'align'=>'left'));?>
                        <?if($cat->has_children()):?>
                         <ul class="inner">
                          <?foreach($cat->children() as $catchild):?>
                             <li>
			        <?=HTML::anchor("code/allcode/".$catchild->id."/one", "&rarr;  ".$catchild->name);?>
                             </li>
                          <?endforeach;?>
                         </ul>
                        <?endif?>
		    </li>
		<?endforeach?>
	</ul>
 </div>
</div>