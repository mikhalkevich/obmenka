 <div class="foruser_account">
 
  <?if($controller=='cabinet'):?>
   <div class="foruser_account_btn">Добавление книг</div>
  <?else:?>
  <?= HTML::anchor("books/cabinet/", "Добавление книг", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>

  <?if($controller=='managment'):?>
   <div class="foruser_account_btn">Управление книгами</div>
  <?else:?>
  <?= HTML::anchor("books/managment/my", "Управление книгами", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
 
  <?if($controller=='chit'):?>
   <div class="foruser_account_btn">Почитать</div>
  <?else:?>
  <?= HTML::anchor("books/chit/", "Почитать", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
  
 </div>