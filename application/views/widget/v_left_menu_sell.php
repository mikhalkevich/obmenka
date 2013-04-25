<div class="block_left">
    <div id="pic_mytab_2_left" class="mytable">
 <div class="nav nav-tabs nav-stacked">
    <div class="input-append">
        <?= Form::open('/tovars/sell/all/post/', array('method' => 'POST', 'class' => 'search_form'));?>
        <?= Form::input('usercat','', array(
            'size' => 50, 
            'id' => 'example',
            'class' => 'input-medium',
            'placeholder' => 'по категориям'
            ))?>
        <?= Form::submit('hidesearch', '>>', array('class'=>'btn'));?>
        <?=Form::close()?>  
    </div>
	<ul class="tovary">
		<?foreach ($catalog as $cat):?>
		    <li>
			<?=HTML::anchor("tovars/".$var."/".$cat->root->id, $cat->root->name);?>
		    </li>
		<?endforeach?>
	</ul>
 </div>         
    </div>
 
</div>
<script type="text/javascript">
$(function(){
	
  var data = [<?=$catalog_data?>];
  
  $("#example").autocomplete(data);
  
});
</script>