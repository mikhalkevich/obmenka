<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Расширенный аккаунт</div>     
	</div>
	<div class="maincode">
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=Form::open('account/more', array('enctype' => 'multipart/form-data'));
?>
<table width="100%" cellspacing="5">
    <tr>
        <td ><?=Form::label('skype', 'Skype')?></td>
        <td><?=Form::input('skype', $data['skype'])?></td>
    </tr>
    <tr>
        <td ><?=Form::label('phone', 'Телефон')?></td>
        <td><?=Form::input('phone', $data['phone'])?></td>
    </tr>
    <tr>
        <td ><?=Form::label('city', 'Город')?></td>
        <td><?=Form::input('city', $data['city'])?></td>
    </tr>
    <tr>
        <td ><?=Form::label('putdate', 'Дата рождения')?></td>
        <td><?=Form::input('putdate', $data['daterod'], array('id' => 'putdate'))?></td>
    </tr>
    <tr>
        <td ><?=Form::label('pol', 'Пол')?></td>
        <td><?=Form::select('pol', array (''=>'', 'муж'=>'муж', 'жен'=>'жен'), $data['pol']);?></td>
    </tr>
    <tr>
        <td ><?=Form::label('about', 'Прочая информация')?></td>
        <td><?=Form::textarea("about", $data['moreinfo'], array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1'));?></td>
    </tr>    
    <tr>
        <td ><?= HTML::image("media/uploads/users/small_".$data['pic'], array("alt" => "Мое фото"));?></td>
        <td><?=Form::file('images[]', array('id' => 'multi'))?></td>
    </tr>
    <tr><td>&nbsp;</td>
        <td align="left"><?=Form::submit('submit', 'Сохранить')?></td>
    </tr>
</table>
<?=Form::close()?>
 </div>
</div>