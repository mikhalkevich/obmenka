 <div class="foruser_account">
     
  <?if($controller=='account/cabinet/0'):?>
   <div class="foruser_account_btn">Товары, которые я хочу</div>
  <?else:?>
  <?= HTML::anchor("account/cabinet/0", "Товары, которые я хочу", array('class'=>'btn btn-success linknone'))?>
  <?endif?>
     
  <?if($controller=='account/cabinet/sell'):?>
   <div class="foruser_account_btn">Купить</div>
  <?else:?>
  <?= HTML::anchor("account/cabinet/sell", "Купить", array('class'=>'btn btn-success linknone'))?>
  <?endif?>

  <?if($controller=='account/cabinet/obmen'):?>
   <div class="foruser_account_btn">Обменять или даром</div>
  <?else:?>
  <?= HTML::anchor("account/cabinet/obmen", "Обменять или даром", array('class'=>'btn btn-success linknone'))?>
  <?endif?>
   
  <?if($controller=='tovars/cabinet'):?>
   <div class="foruser_account_btn">Добавить товар</div>
  <?else:?>
  <?= HTML::anchor("tovars/cabinet", "Добавить товар", array('class'=>'btn btn-success linknone'))?>
  <?endif?>
   
  <?if($controller=='tovars/managment/my'):?>
   <div class="foruser_account_btn">Управление товаром</div>
  <?else:?>
  <?= HTML::anchor("tovars/managment/my", "Управление товаром", array('class'=>'btn btn-success linknone'))?>
  <?endif?>
   
 </div>