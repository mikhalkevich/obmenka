<div class="block_left">
  <div class="nav nav-tabs nav-stacked">
	<div class="left_title">Товары на обмен</div>
	<ul class="navigation treeview">
	
	
		<?foreach ($catalog as $cat):?>
		 <?if($cat->is_root()):?>
		    <li>
			<?=HTML::anchor("tovars/sell/".$cat->root->id, $cat->root->name);?>
			  <?if($cat->has_children()):?>
				<ul>
					<?foreach($cat->children() as $catchild):?>
						<li>
						 <?=HTML::anchor("tovars/sell/".$catchild->id, $catchild->name);?>
								
						</li>
					<?endforeach?>
				</ul>
			  <?endif?>
			</li>
		 <?endif?>
		<?endforeach?>
	</ul>
 </div>
</div>
 