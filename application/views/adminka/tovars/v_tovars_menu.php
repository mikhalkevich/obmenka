 <div class="foruser_account">
 
  <?if($controller=='add'):?>
   <div class="foruser_account_btn">Добавление товара</div>
  <?else:?>
  <?= HTML::anchor("adminka/tovars", "Добавление товара", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>

  <?if($controller=='reduct'):?>
   <div class="foruser_account_btn">Управление товаром</div>
  <?else:?>
  <?= HTML::anchor("adminka/tovars/reduct/0", "Управление товаром", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
 
  
 </div>