<script type="text/javascript">
	jQuery(function($){
		$(".lightboxclass a").lightBox();
		var fx = {
			'initModal': function(){
				if($(".modal-window").length == 0){
					$("<div>")
							.attr("id", "jquery-overlay")
							.css({
								"background":"#000 repeat-x",
								"opacity": "0.7",
								"position":"fixed",
								"height":"100%",
							})
							.fadeIn("slow")
							.appendTo("body");						
					return $("<div>")
							.addClass("modal-window")
							.fadeIn("slow")
							.appendTo("body");							
				}else{
					return $(".modal-window");
				}
			}
		}
	
		$(".mainblocktext a")
		.live("click", function(event){
			event.preventDefault();
			var data = $(this).attr("href").replace("<?=Kohana::$base_url?>", "");
			var modal = fx.initModal();
			$("<a>").attr("href", "#")
					.addClass("modal-close-btn")
					.html("&times;")
					.click(function(event){
						event.preventDefault();
						$(".modal-window").fadeOut("slow", function(){$(this).remove();});
						$("#jquery-overlay").fadeOut("slow", function(){$(this).remove();});
					})
					.appendTo(modal);
			$.ajax({
				type: "POST",
				url: "<?=Kohana::$base_url?>tovars/tovarsajax",
				data: "id=" + data,
				success: function(data){
					modal.append(data);
				},
				error: function(msg){
					modal.append(msg);
				}
			});
		});
	}
	)
</script>
<?foreach($products as $product):?>
<div class="mytable tovary">
  <?if ($product->products_pic_small) {
  $picture = "media/uploads/tovars/".$product->products_pic_small;
  } elseif($product->products_pic) { 
  $picture = "media/uploads/tovars/".$product->products_pic;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
  ?>
   	 <table class="none" cellpadding=0 cellspacing=0 width=100%>
	  <tr>
	   <td width=150px valign="top" class="lightboxclass">
	   <?=HTML::anchor("media/uploads/tovars/".$product->products_pic, 
	        HTML::image($picture, array(
			  'width'=>'150px', 
			  'class'=>'pic_tovar', 
			  'align'=>'left')));?>
	  </td>
	  <td valign="top">
               <h2> 
                   <?=HTML::anchor('tovars/subcat/'.$product->id.'/one', $product->name);?>
               </h2>
		  <?if($product->description):?>
			<div class="description"> <?=$product->description?>			</div>
		  <?endif?>
                  <div> <b>Категория:</b> <?=$product->catalogobmen->name;?></div>
		  <?if($product->wishes):?>
			<div class="yslovia"><b>Условие:</b> <em><?=$product->wishes?></em></div>
		  <?endif?>
		   <?=HTML::anchor('userone/'.$product->user->id, $product->user->first_name);?> <br />
                  <?if(!isset($user)):?>
                   <?=HTML::anchor('tovars/subcat/'.$product->user->id.'/usertovars/', 'Товары пользователя');?>
                  <?endif?>
		  <div  class="mainblocktext">
		   <?=HTML::anchor($product->id, 'Подробнее...', array('class'=>'btn btn-small'));?>
		  </div>
	   </td>
	   
	   <td valign="top" width="143px" class="fortov_menu">
	     <?=View::factory('tovars/v_shablon_for_knopka_hotelki')
                           ->bind('product', $product)
                           ->bind('user_id', $user_id);?>
	   </td>
	  </tr>
	 </table>
</div>
<?endforeach?>
 <?=$pagination?>
 