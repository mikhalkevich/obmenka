	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Мой код</div>     
	</div>
<div class="maincode">
<?if($mycode):?>
<?foreach ($mycode as $code):?>

<table width="100%" class="breadcrumb">
<tr>
<td class="mytov">
        <?=$code->opisanie?>
<pre>
<?=$code->code?>
</pre>
</td>
<td width=150px class="fortov_menu" align="right" valign="top">
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Удалить", 
				array('class'=>'btn btn-mini',
				"onclick"=>"delete_position(
				   '".KOHANA::$base_url."code/usercode/".$code->id."/delete', 'Вы действительно хотите удалить код?')
				   "))?>
<?= HTML::anchor("code/usercode/".$code->id."/edit", HTML::image("media/img/refreshyellow.gif", 
                                    array("width"=>"24px"))." Редактировать", array('class'=>'btn btn-mini'))?>
<?if($code->showhide == 'show'):?>
<?= HTML::anchor("code/usercode/".$code->id."/hide",
				HTML::image("media/img/folder_locked.gif", 
                                    array("width"=>"24px"))." Скрыть", 
				array('class'=>'btn btn-mini'
				   ))?>
<?else:?>
<?= HTML::anchor("code/usercode/".$code->id."/show",
				HTML::image("media/img/show.gif", 
                                    array("width"=>"24px"))." Показывать", 
				array('class'=>'btn btn-mini'))?>
<?endif?>
</td>
</tr>
</table>
<?endforeach?>
<?endif?>
</div>