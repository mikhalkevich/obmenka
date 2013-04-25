<script>
$(function(){
 $('[name=category]').change(function() {
$.ajax({
      url: "<?=Kohana::$base_url?>tovars/ajax",
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
<div class="mytable_account">
 <?=$menu?>
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<?=Form::open('tovars/cabinet', array('enctype' => 'multipart/form-data'))?>
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
	<?=Form::select('subcategory_id', $subcat, $data['subcategory_id'])?>
	<?endif?>
	</div>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 Название товара <b>*</b>
  </td>
  <td>
	<?=Form::input('name', $data['name'], array('id'=>'myinput'))?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 Описание товара 
  </td>
  <td>
	<?=Form::textarea('description', $data['description'], array('id'=>'opisanie'))?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 Условия/пожелания
  </td>
  <td>
	<?=Form::textarea('wishes', $data['wishes'], array('id'=>'yslovia'))?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 Изображение
  </td>
  <td>
    <?=Form::file('images[]', array('id' => 'multi'))?>
  </td>
 </tr>
 <tr>
  <td class="first" valign="top">
	 Даром
  </td>
  <td>
    <?=Form::checkbox('gift',  1, $check);?>
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
<br style="clear:both">
</div>