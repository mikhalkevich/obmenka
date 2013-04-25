<h2><?=HTML::anchor('userone/'.$hotelka->user->id, $hotelka->user->first_name)?></h2>
            <?if($hotelka->user->usermore->pic):?>
             <? $picture = $hotelka->user->usermore->pic;?>
<?=HTML::anchor('media/uploads/users/'.$picture, HTML::image('media/uploads/users/small_'.$picture,     array( 'width'=>'50px',
                 'align'=>'right')), array('target'=>'_blank',))?>
            <?endif;?>
<p><b>Login:</b> <?=$hotelka->user->username?></p>
<p><b>E-mail:</b> <?=$hotelka->user->email?></p>
<?if($hotelka->user->usermore->skype):?>
 <p><b>Skype:</b> <?=$hotelka->user->usermore->skype?></p>
<?endif;?>
 <?if($hotelka->user->usermore->phone):?>
 <p><b>Телефон:</b> <?=$hotelka->user->usermore->phone?></p>
<?endif;?>
 <?if($hotelka->user->usermore->city):?>
 <p><b>Город:</b> <?=$hotelka->user->usermore->city?></p>
<?endif;?>
 <?if($hotelka->user->usermore->pol):?>
 <p><b>Пол:</b> <?=$hotelka->user->usermore->pol?></p>
<?endif;?>
<p><b>Кол-во заходов на сайт:</b> <?=$hotelka->user->logins?></p>
<p><b>Время последнего захода:</b> <?=time($hotelka->user->last_login)?></p>
 <?if($hotelka->user->usermore->moreinfo):?>
 <p><b>Пользователь о себе:</b> <?=$hotelka->user->usermore->moreinfo?></p>
<?endif;?>
 <?if($hotelka->user->usermore->daterod != '0000-00-00'):?>
 <p><b>Дата рождения:</b> <?=$hotelka->user->usermore->daterod?></p>
<?endif;?>