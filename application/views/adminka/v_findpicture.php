<script type="text/javascript">
$(function () {
  $.ajaxSetup({
    url: "<?=Kohana::$base_url?>adminka/ajax",
    type: "POST",
    beforeSend: function(){
      $("#result").html("<img src='<?=Kohana::$base_url?>media/img/loader.gif' />");
    },
    success: function(data){
      $("#result").html(data);
    },
    error: function(data){
      $("#result").html(data);
    }
  });
  $("#forsearch").click(function(){
    $.ajax({ data: "q=1" });
  });
});
</script>
<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Поиск изображений</div>     
	</div>
		<div class="buttons">
		<button id="forsearch" class="btn">Искать картинки на GOOGLE</button>
		</div>
		<div id="result">
		<p>Всего товаров без изображений: <b><?=$none_picture_count?></b></p>
		<p>Всего товаров c изображениями: <b><?=$with_picture_count?></b></p>
		</div>

</div>