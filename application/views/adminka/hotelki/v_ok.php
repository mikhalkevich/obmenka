<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Подтверждение хотелки</div>     
	</div>
<?=$shablon_user_one?>
    <?= Form::open('/adminka/hotelka/ok/'.$hotelka->id, array('method' => 'POST'));?>
     <?= Form::textarea('body', $data['body'], array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1'))?>
    <p class="error">Перед отправкой письма, правильно выставьте срок доставки товара (выделено цветом).</p>
     <div align="right"><?= Form::submit('send', 'Отправить письмо', array('class'=>'btn'));?></div>
    <?=Form::close()?>
</div>