 <div class="foruser_account">
 
  <?if($controller=='cabinet'):?>
   <div class="foruser_account_btn">Добавление товара</div>
  <?else:?>
  <?= HTML::anchor("tovars/cabinet/", "Добавление товара", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>

  <?if($controller=='managment'):?>
   <div class="foruser_account_btn">Управление товаром</div>
  <?else:?>
  <?= HTML::anchor("tovars/managment/my", "Управление товаром", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
  
  <?if($controller=='obmen'):?>
   <div class="foruser_account_btn">На обмен</div>
  <?else:?>
  <?= HTML::anchor("tovars/obmen/", "На обмен", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
  
 </div>