 <div class="foruser_account">
  <?if($action=='obmen'):?>
   <div class="foruser_account_btn">Категории на обмен</div>
  <?else:?>
  <?= HTML::anchor("adminka/catalogs/obmen", "Категории на обмен", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
   
  <?if($action=='index'):?>
   <div class="foruser_account_btn">Категории на продажу</div>
  <?else:?>
  <?= HTML::anchor("adminka/catalogs/", "Категории на продажу", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>

  <?if($action=='vip'):?>
   <div class="foruser_account_btn">VIP</div>
  <?else:?>
  <?= HTML::anchor("adminka/catalogs/vipall", "VIP", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
 
  
 </div>