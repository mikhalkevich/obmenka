<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Регистрация</div>     
	</div>
	<div class="maincode">
<?print_r($errors);?>
<?=Form::open('auth/register')?>
<table width="400" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Логин')?></td>
        <td><?=Form::input('username', $data['username'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('first_name', 'ФИО')?></td>
        <td><?=Form::input('first_name', $data['first_name'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('email', 'Email')?></td>
        <td><?=Form::input('email', $data['email'], array('size' => 20))?></td>
    </tr>
     <tr>
        <td ><?=Form::label('password', 'Пароль')?></td>
        <td><?=Form::password('password', $data['password'], array('size' => 20))?></td>
    </tr>
     <tr>
        <td ><?=Form::label('password_confirm', 'Повторить пароль')?></td>
        <td><?=Form::password('password_confirm', $data['password_confirm'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td colspan="2" align="left"><?=Form::submit('submit', 'Зарегистрироваться', 
                array('class' => 'btn reg_in'))?></td>
    </tr>
</table>
<?=Form::close()?>
	</div>
</div>