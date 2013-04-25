<div class="mytable_account"> 
 <?=$menu?>	
<?if($errors):?>
 <?foreach ($errors as $error):?>
  <div class="error"><?=$error?></div>
 <?endforeach?>
<?endif?>
  <?if(isset($cat->name)):?>
   <h2><?=$cat->name?></h2>
  <?else:?>
    Пожалуйста, выбирете категорию.
  <?endif?>
   
  <?if(isset($cat_vip->picture)):?>
  <p><?=HTML::image('media/images/'.$cat_vip->picture, array(
		    'class'=>'pic_tovar')); ?></p>
  Эта категория уже VIP. Здесь вы можете заменить фото.
  <?else:?>
   <div class="btn disabled fro_hotelka_darom"><b>Новый VIP</b></div>
  <?endif?>
<?=Form::open('adminka/catalogs/vipadd/'.$cat->id, array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
 <?=Form::file('images[]', array('id'=>'multi'));?>
 <?=Form::submit('add_picture','Добавить изображение', array('class'=>'btn'))?>
<?=Form::close()?>
</div>