<script type="text/javascript">
    jQuery(function($){
        // создаём мадальное окно
        $(".first_name a").popover().preventDefault();
    });
</script>
<? foreach ($users as $user) :?>
<div class="mytable">
 <div class="foruser"> <?=$user->first_name ?> 
 <? if($user->userone->city): ?>
  , г. <b><?=$user->userone->city;?></b></br>
 <? endif?>
 </div>
 <div class="more">
 <?=HTML::file_anchor('userone/'.$user->id.'', '<i class="icon-book"></i> Страница пользователя', array('class'=>'btn'));?>
 <?if($me !=0):?>
    <?if($me == $user->id):?>
        Это я
    <?else:?>
         <?if($user->friends->friend_id == $user->id AND $user->friends->user_id == $me):?>
           Это ваш друг
         <?else:?>
           <?=HTML::file_anchor('addFriend/'.$user->id.'', '<i class="icon-heart"></i> Добавить в друзья', array('class'=>'btn'));?>
         <?endif;?>

    <?endif;?>
 <?endif;?>
 <?=HTML::file_anchor('tovars/subcat/'.$user->id.'/usertovars', '<i class="icon-refresh"></i> Товары', array('class'=>'btn'));?>
     
     
    <!-- Button to trigger modal -->
    <?=HTML::file_anchor('msg/'.$user->id, '<i class="icon-bullhorn"></i> Отправить сообщение', array('class'=>'btn',
                                                                        ));?>
    
    
 </div>
<?
 if($user->userone->pic) {
 $picsmall = "media/uploads/users/small_".$user->userone->pic; 
 $width = 150;
 }
 else {
 $picsmall = "media/img/user.png";
 $width = 80;
 }
?>
 
 

 
 
<div><?= HTML::image($picsmall, array(
	 "alt" => $user->username,
	 "width" => $width."px",
	 "align" => "left",
	 "class" => "userphoto",
 ));?> <br>
 <div class="first_name">
 
     <?foreach($user_skill as $user_s):?>
        <?if($user_s->user_id == $user->id):?>
      <a href="javascript:void(0)" class="" 
                 title="<?=$user_s->skills->skill?>" 
                 data-toggle="popover" 
                 data-placement="top" 
                 data-content="<?=$user_s->description?>" 
                 data-trigger="click">
          <?=$user_s->skills->skill;?>
      </a> |
        <?endif;?>
     <?endforeach;?>
 
 </div>
 <br style="clear:both" />
</div>
</div>
<? endforeach ?>
<?=$pagination ?>
