<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Редактирование</div>     
	</div>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=Form::open('code/usercode/'.$data['id'].'/edit', array('enctype' => 'multipart/form-data'))?>
<table class="left_form" width=100% cellpadding=0 cellspacing=0>
 <tr>
  <td class="first" valign="top">
	 Описание  <b>*</b>
  </td>
  <td>
	<?=Form::textarea('opisanie', $data['opisanie'], array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1'))?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 Код  <b>*</b>
  </td>
  <td>
	<pre><?=Form::textarea('code', $data['code'], array('class'=>'opisanie'))?></pre>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 &nbsp;
  </td>
  <td>
    <?=Form::submit('submit', 'Сохранить');;?>
  </td>
 </tr>
</table>
<?=Form::close();?>
</div>
