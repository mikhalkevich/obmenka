<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Мои друзья</div>     
	</div>
 <?if($friends):?>
  <?foreach($friends as $friend):?>
<?
 if($friend->usersimage->userone->pic) {
 $picsmall = "media/uploads/users/small_".$friend->usersimage->userone->pic; 
 }
 else {
 $picsmall = "media/img/user.png";
 }
?>
   <div class="mytable">
       <div class="foruser"> <?=$friend->userss->first_name ?> </div>
       <?= HTML::image($picsmall, array(
	 "alt" => $friend->usersimage->username,
	 "width" => "80px",
	 "align" => "left",
	 "class" => "userphoto",
 ));?>
    <div class="more">
     <?=HTML::file_anchor('userone/'.$friend->friend_id.'', '<i class="icon-book"></i> Страница друга', array('class'=>'btn'));?>
    <?=HTML::file_anchor('tovars/subcat/'.$friend->friend_id.'/usertovars', '<i class="icon-refresh"></i> Товары', array('class'=>'btn'));?>
    <?=HTML::file_anchor('msg/'.$friend->friend_id, '<i class="icon-bullhorn"></i> Отправить сообщение', array('class'=>'btn',
                                                                        ));?>
    </div>
            <br style="clear:both" />
   </div>
  <?endforeach;?>
 <?else:?>
     Вы не добавили ни одного друга.
 <?endif?>
 <?=$pagination?>
</div>