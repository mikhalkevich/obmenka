<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Рyбрикация</div>     
	</div> 
<?if($errors):?>
<?foreach ($errors as $error):?>
<div class="error"><?=$error?></div>
<?endforeach?>
<?endif?>
<br />
<?=Form::open('thema/userthema', array('enctype' => 'multipart/form-data'))?>
  Выберите рyбрику *
  <?=Form::input('name', '', array('id'=>'thema'))?>
    <div class="tabbable"> 
    <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Статья</a></li>
    <li><a href="#tab2" data-toggle="tab">Изображения</a></li>
    <li><a href="#tab3" data-toggle="tab">Видео</a></li>
    <li><a href="#tab4" data-toggle="tab">Аудио</a></li>
    <li><a href="#tab5" data-toggle="tab">Книги, каталоги</a></li>
    <li><a href="#tab6" data-toggle="tab">Ссылки</a></li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="tab1">
     <?=Form::textarea('statia', $data['statia'], array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1'))?>
    </div>
    <div class="tab-pane" id="tab2">
     <?=Form::input('name_image', $data['name_image'])?><br />
     <?=Form::file('images[]', array('id' => 'multi'))?><br />
    </div>
    <div class="tab-pane" id="tab3">
      <?=Form::label('video', 'Код для вставки видео:')?>
      <?=Form::textarea('video', $data['video'])?><br />
    </div>
    <div class="tab-pane" id="tab4">
     <?=Form::input('audio_image', $data['audio_image'])?><br />
     <?=Form::file('audio', array('id' => 'audio'))?><br />

    </div>
    <div class="tab-pane" id="tab5">
      Добавление книг, каталогов
    </div>
    <div class="tab-pane" id="tab5">
      Добавление ссылок
    </div>
    </div>
    </div>
  <br />
  <?=Form::submit('submit', 'Добавить', array('class'=>'btn'))?>
<?=Form::close()?>
</div>
<script type="text/javascript">
$(function(){
	
  var datar = [<?=$cat_all_arr?>];
  
  $("#thema").autocomplete(datar);
  
});
</script>
 <div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Мои темы</div>     
	</div>
<div class="maincode">
<?if($mycode):?>
<?foreach ($mycode as $code):?>

<table width="100%" class="breadcrumb">
<tr>
<td class="mytov">
    <?if($code->razdel == 'Статья'):?>
        <?=$code->body?>
    <?elseif($code->razdel == 'Изображение'):?>
     <?=HTML::image('media/uploads/content/'.$code->thema_id.'/small_'.$code->body)?>
    <?endif?>
</td>
<td width=150px class="fortov_menu" align="right" valign="top">
<?= HTML::anchor("#", HTML::image("media/img/editdelete.gif", 
                                    array("width"=>"24px"))." Удалить", 
				array('class'=>'btn btn-mini',
				"onclick"=>"delete_position(
				   '".KOHANA::$base_url."thema/userthema/".$code->id."/delete', 'Вы действительно хотите удалить запись?')
				   "))?>
</td>
</tr>
</table>
<?endforeach?>
<?endif?>
</div>
</div>
<p align="center"><?=$pagination?></p>