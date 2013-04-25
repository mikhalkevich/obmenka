<div class="block_left">
  <div class="nav nav-tabs nav-stacked">
	<div class="left_title">Интернет-магазин</div>
    <div class="input-append">
	<form class="search_form" action="post" method="post">
     <input type="text" name="usercat" id="example" class="input-medium" placeholder="Поиск по категориям">
     <input class="btn" name="hidesearch" type="submit" value=">>">
	</form>
    </div>
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
								<?if($catchild->has_children()):?>
								<ul>
									<?foreach($catchild->children() as $catchild2):?>
										<li>
										 <?=HTML::anchor("tovars/sell/".$catchild2->id, $catchild2->name);?>
											<?if($catchild2->has_children()):?>
												<ul>
													<?foreach($catchild2->children() as $catchild3):?>
														<li>
															<?=HTML::anchor("tovars/sell/".$catchild3->id, $catchild3->name);?>
														</li>
													<?endforeach?>
												</ul>
											<?endif?>
										</li>
									<?endforeach?>
								</ul>
								<?endif?>
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
<script type="text/javascript">
$(function(){
	
  var data = [<?=$catalog_data?>];
  
  $("#example").autocomplete(data);
  
});
</script>