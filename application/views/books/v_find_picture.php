<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Шаг 2. Выберите изображение</div>     
         </div>
<p><b><?=$mybook->name?></b></p>
<? if(isset($mybook->author)):?>
<p><?=$mybook->author;?></p>
<?endif?>
<? if(isset($mybook->year)):?>
<p><?=$mybook->year;?></p>
<?endif?>
<div class="maincode">
<?foreach($books_picture as $pic):?>
<?$picture = HTML::image($pic);?>
<p align="center"><?=HTML::anchor('#', $picture)?></p>
<?endforeach?>
</div>
</div>