<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Редактировать аккаунт</div>     
	</div>
	<div class="maincode">
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>

<?=Form::open('account/profile')?>
<table width="468" cellspacing="5">
    <tr>
        <td ><?=Form::label('first_name', 'ФИО')?></td>
        <td><?=Form::input('first_name', $user->first_name, array('size' => 30))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('email', 'Email')?></td>
        <td><?=Form::input('email', $user->email, array('size' => 30))?></td>
    </tr>
    <tr>
        <td><?=Form::label('password', 'Новый пароль')?></td>
        <td><?=Form::password('password', '', array('size' => 30))?></td>
    </tr>
    <tr>
        <td><?=Form::label('password_confirm', 'Повтор пароля')?></td>
        <td><?=Form::password('password_confirm', '', array('size' => 30))?></td>
    </tr>
    <tr>
        <td colspan="2" align="left">
         <?=Form::submit('submit', 'Сохранить', array('class'=>'btn reg_in'))?></td>
    </tr>
</table>
<?=Form::close()?>
</div>
</div>