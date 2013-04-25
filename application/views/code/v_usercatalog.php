<div class="mytable_account">
	 <div class="foruser_account">
<?=HTML::anchor("code/usercode/0/", 
          "Управление кодом", array("class" => "btn btn-primary linknone"));?>
  	   <div class="foruser_account_btn">Редактировать категорию</div>     
	</div>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=Form::open('code/usercode/'.$id.'/catalogredact', array('enctype' => 'multipart/form-data'))?>
<table class="left_form" width=100% cellpadding=0 cellspacing=0>
 <tr>
  <td class="first" width=200px valign="top">
	 Категория <b>*</b>
  </td>
  <td>
	<?=Form::select('category', $cat, $data['category']);?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 &arr; <b>*</b>
  </td>
  <td>
	<?=Form::input('name', $data['name'])?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 &nbsp;
  </td>
  <td>
    <?=Form::submit('submit', 'Поменять');;?>
  </td>
 </tr>
</table>
<?=Form::close();?>
</div>
<br />
<div class="mytable_account">
<?=$content_shablon?>
</div>