<div class="mytable_account">
    <div class="foruser_account">
        <div class="foruser_account_btn">Управление пользователями</div>
    </div>
	<?=Form::open('adminka/users/reduct/0/', array('class'=>'form-horizontal'))?>
	  <?=Form::input('searchadminuser', '', array('size' => 40));?>
	  <?=Form::submit('submit_searchadminuser', 'Искать по ФИО', array('class'=>'btn'));?> 
	<?=Form::close();?>
<?foreach($my_products as $my_product):?>
<? if($my_product->usermore->pic) { 
  $picture = "media/uploads/users/small_".$my_product->usermore->pic;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
?>
<table  class="breadcrumb" width=100%>
<tr>
<td valign="top" width=100px>
<?=HTML::image($picture, array(
		  'width'=>'100px', 
		  'class'=>'pic_tovar', 
		  'align'=>'left'));
		  ?>
</td>
<td valign="top">
<div class="mytov">
<p>ФИО: <b><?=$my_product->first_name?></b></p>
</div>
</td>
<td width=150px class="fortov_menu" valign="top">
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Удалить", 
				array('class'=>'btn btn-mini',
				"onclick"=>"delete_position(
				   '".Kohana::$base_url."adminka/users/delete/".$my_product->id."', 'Вы действительно хотите удалить пользователя?')
				   "))?>
</td>
</tr>
</table>
<?endforeach?>
<?=$pagination?>
</div>