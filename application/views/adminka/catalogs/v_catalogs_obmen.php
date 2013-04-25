<div class="mytable_account"> 
<?=$menu?>
<?if($errors):?>
 <?foreach ($errors as $error):?>
  <div class="error"><?=$error?></div>
 <?endforeach?>
<?endif?>

<?=Form::open('adminka/catalogs/obmen', array('class'=>'bs-docs-example'))?>

  <?=Form::input('name', null, array('class'=>'input'))?>
 <select name="cat_number" class="span5">
  <option value="0">
   < Выберете категорию >
  </option>
  <?foreach ($cat as $cat_one):?>
   <option value="<?=$cat_one->id?>">
    <?=str_repeat(' &#8226; ', 1 * $cat_one->lvl).$cat_one->name?>
   </option>
  <?endforeach?>
 </select>
 <p>
 <?=Form::submit('add','Добавить', array('class'=>'btn btn-success'))?>
 <?=Form::submit('delete','Удалить', array('class'=>'btn btn-danger'))?>
 </p>
<?=Form::close()?>
</div>