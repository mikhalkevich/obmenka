<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn"><?=$codecatalog->name?></div>     
	</div>
<div class="maincode">
<?if($mycode):?>
<table width="100%">
<?foreach ($mycode as $code):?>
<tr>
<td class="mytov"> 
    <?if($code->razdel == 'Статья'):?>
        <?=$code->body?>
    <?elseif($code->razdel == 'Изображение'):?>
     <div align="center"><?=HTML::image('media/uploads/content/'.$code->thema_id.'/'.$code->body)?></div>
    <?elseif($code->razdel == 'Видео'):?>
      <div align="center"><?=$code->body?></div>
    <?endif?>
     <div align="right">
  <?=HTML::anchor("userone/".$code->user_id, $code->user->first_name);?>
 <code class="label btn-success"><?=$code->putdate?></code>
 <br />
 </div>
</td>
</tr>
<?endforeach?>
</table>
<?endif?>
</div>
    <p align="center"><?=$pagination?></p>
</div>