<div class="mytable">
 <div class="foruser"> <?=$usermore->first_name ?> </div>
<?
 if($usermore->userone->pic) {
 $picsmall = HTML::image("media/uploads/users/small_".$usermore->userone->pic, array(
	 "alt" => $usermore->username,
	 "width" => "80px",
	 "class" => "userphoto",
         "align" => "left"
 ));
 }
 else {
 $picsmall = HTML::image("media/img/user.png", array(
	 "alt" => $usermore->username,
	 "class" => "userphoto",
         "align" => "left"
 ));
 }
?>
<div><?=$picsmall?> <br>
 <div class="first_name">
    <?if($user_skill != NULL):?>
    <?if($user_skill->count() > 0):?>
      <b>Мои навыки:</b> 
        <?foreach($user_skill as $skill):?>
            <?=HTML::anchor('#', $skill->skills->skill);?>,
        <?endforeach;?>
            <hr />
    <?endif;?>
    <?endif;?>  
    <?if($user_skill != NULL):?>
    <?if($hotnew->count() > 0):?>
      <b>Я хочу:</b> 
        <?foreach($hotnew as $hotnew_one):?>
            <?=HTML::anchor('#', $hotnew_one->name);?>,
        <?endforeach;?>
            <hr />
    <?endif;?>
    <?endif;?>
 </div>
    <br style="clear:both" />
 <? if($usermore->userone->city): ?>
  город: <b><?=$usermore->userone->city;?></b>
  <a href="http://obmenka.by/map.php?end=<?=$usermore->userone->city?>">Проложить маршрут</a>
  </br>
 <? endif?><br />
 <div class="first_name"><?=$usermore->userone->moreinfo?> </div>
</div>
</div>
