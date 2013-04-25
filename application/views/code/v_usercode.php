<script>
$(function(){
 $('[name=category]').change(function() {
$.ajax({
      url: "<?=Kohana::$base_url?>code/ajax",
      type: "POST",
      data: "cat_id="+$(this).val(),
      timeout: 3000,
      success: function(data){
        $(".subchik").html(data);
      },
      error: function(xhr, status){
        $(".subchik").html("<span>" + status + "</span>");
      }
    });
}); 
});
</script>
<div class="bigtext">
    Управление кодом
</div>
<?$last_name = ''?>
<?if($mycode):?>
<?foreach ($mycode as $code_val => $code_one):?>
 <?if($last_name !== $code_one->codecatalog->name):?>
  <?=HTML::anchor("code/usercode/".$code_one->codecatalog->id."/catalogredact/", 
          $code_one->codecatalog->name, array("class" => "clop"));?> | 
 <?endif;?>
  <? $last_name = $code_one->codecatalog->name;?>
<?endforeach?>
<?endif?>
<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Добавить код</div>     
	</div>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=Form::open('code/usercode', array('enctype' => 'multipart/form-data'))?>
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
  <td valign="top" colspan=2>
	<div class="subchik">
	<?if($data['subcategory_id']):?>
	<?=Form::input('subcategory_id', $data['subcategory_id'])?>
	<?endif?>
	</div>
  </td>
 </tr>
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
    <?=Form::submit('submit', 'Добавить');;?>
  </td>
 </tr>
</table>
<?=Form::close();?>
</div>
<br />
<div class="mytable_account">
<?=$content_shablon?>
</div>
    <p align="center"><?=$pagination?></p>
</div>
