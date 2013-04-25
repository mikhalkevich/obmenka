<div class="right_block_menu">
<?
 if($me->usermore->pic) {
 $picsmall = "media/uploads/users/small_".$me->usermore->pic; 
 }
 else {
 $picsmall = "media/img/user.png";
 }
?> 
    <ul class="right_menu">
       <li>
    <div class="btn-group mydropdown">   
    <button class="btn btn-small btn-success dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
		 <li><?=HTML::anchor('account/cabinet/sell', 'Купить', array('class'=>'drop_menu_tovar'))?></li>
		 <li><?=HTML::anchor('account/cabinet/obmen', 'Обменять или даром', array('class'=>'drop_menu_tovar'))?></li>
		 <li><?=HTML::anchor('tovars/cabinet', 'Добавить', array('class'=>'drop_menu_tovar'))?></li>
		 <li><?=HTML::anchor('tovars/managment/my', 'Управление товаром', array('class'=>'drop_menu_tovar'))?></li>
		</ul>
    </div>
<?=HTML::anchor('account/cabinet/0', '<i class="icon-shopping-cart"></i> Товары', array('class'=>'btn btn-success'))?></li>  
       <li>
    <div class="btn-group mydropdown">   
    <button class="btn btn-small btn-primary dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('services/services', 'Мои навыки', array('class'=>'drop_menu_yslygi'))?></li>
			<li><?=HTML::anchor('services/services/need', 'Требуется', array('class'=>'drop_menu_yslygi'))?></li>
		</ul>
    </div>
<?=HTML::anchor('services/services', '<i class="icon-shopping-cart"></i> Услуги', array('class'=>'btn btn-primary'))?></li>   
       <li><?=HTML::anchor('account/pismo/0', '<i class="icon-envelope"></i> Моя переписка', array('class'=>'btn'))?></li>  
       <li><?=HTML::anchor('code/usercode/0', '<i class="icon-file"></i> Мой код', array('class'=>'btn'))?></li>
       <li><?=HTML::anchor('account/friends/0', '<i class="icon-user"></i> Мои друзья', array('class'=>'btn'))?></li>
       <li><?=HTML::anchor('thema/userthema/0', '<i class="icon-camera"></i> Рубрикация', array('class'=>'btn'))?></li>
    </ul>
 <div align="center" class="mytable" id="forme">
 <?= HTML::image($picsmall, array(
	 "alt" => $me->first_name,
	 "width" => "150px",
 ));?>
 </div>
	<ul class="right_menu">
	  <li><?=HTML::anchor('account/more', 'Расширенный аккаунт', array('class'=>'btn'))?></li>
	  <li><?=HTML::anchor('account/profile', 'Редактировать аккаунт', array('class'=>'btn'))?></li>
	</ul>
</div>
<script>
function delete_position(url, ask)
  {
    if(confirm(ask))
    {
      location.href=url;
    }
    return false;
  }
</script>