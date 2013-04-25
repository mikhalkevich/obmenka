<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Новый пароль</div>     
	</div>
	<div class="maincode">
<?print_r($errors);?>
<?=Form::open('auth/remember')?>
<table width="400" cellspacing="5">
    <tr>
        <td ><?=Form::label('username', 'Логин')?></td>
        <td><?=Form::input('username', $data['username'], array('size' => 20))?></td>
    </tr>
    <tr>
        <td colspan="2" align="left"><?=Form::submit('submit', 'Выслать новый пароль', 
                array('class' => 'btn rem_in'))?></td>
    </tr>
</table>
<?=Form::close()?>
	</div>
</div>