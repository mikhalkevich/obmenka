<script type="text/javascript">
$(function () {
  $.ajaxSetup({
    url: "<?=Kohana::$base_url?>adminka/ajax/desc",
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
 
  	   <div class="foruser_account_btn">Поиск описаний</div>     
	</div>
		<div class="buttons">
		<button id="forsearch" class="btn">Искать описание на NIX.RU</button>
		</div>
		<div id="result">
		<p>Всего товаров без описания: <b><?=$none_desc_count?></b></p>
		<p>Всего товаров c описанием: <b><?=$with_desc_count?></b></p>
		</div>

</div>