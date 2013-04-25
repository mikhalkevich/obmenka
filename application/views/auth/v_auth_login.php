<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Вход</div>     
	</div>
	<div class="maincode">
        <?print_r($errors);?>
        <?=Form::open('auth/login')?>
        <table width="300" cellspacing="5">
            <tr>
                <td ><?=Form::label('username', 'Логин')?></td>
                <td><?=Form::input('username', $data['username'], array('size' => 20))?></td>
            </tr>
            <tr>
                <td ><?=Form::label('password', 'Пароль')?></td>
                <td><?=Form::password('password', $data['password'], array('size' => 20))?></td>
            </tr>
            <tr>
                <td colspan="2"><?=Form::submit('submit', 'Войти', array('class'=>'btn vhod_in'))?></td>
            </tr>
        </table>
        <?=Form::close()?>
	</div>
</div>