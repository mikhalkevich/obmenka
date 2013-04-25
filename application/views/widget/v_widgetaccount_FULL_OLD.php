<div class="right_block_menu">
 <div class="right_title">Мой кабинет</div>
    
	<ul class="right_menu">
	
	  <li>
    <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('tovars/cabinet', 'Добавление товара')?></li>
			<li><?=HTML::anchor('tovars/managment/my', 'Управление товаром')?></li>
			<li><li><?=HTML::anchor('tovars/obmen', 'На обмен')?></li></li>
		</ul>
    </div>
<?=HTML::anchor('tovars/cabinet', '<i class="icon-cog"></i> Мои товары', array('class'=>'btn'))?>
	  </li> 
	  
	  <li>
	  <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('books/cabinet', 'Добавление книг')?></li>
			<li><?=HTML::anchor('books/managment/my', 'Управление книгами')?></li>
			<li><li><?=HTML::anchor('books/chit', 'Почитать')?></li></li>
		</ul>
    </div>
<?=HTML::anchor('books/cabinet', '<i class="icon-book"></i> Мои книги', array('class'=>'btn'))?></li> 
      </li>
	  
	   <li>
       <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('yslygi/cabinet', 'Добавление услуг')?></li>
			<li><?=HTML::anchor('yslygi/managment/my', 'Управление услугами')?></li>
		</ul>
    </div>	
	  <li><?=HTML::anchor('yslugi/cabinet', '<i class="icon-wrench"></i> Мои услуги', array('class'=>'btn'))?></li> 
	  </li>
	  
	  <li>
       <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('procat/cabinet', 'Добавить в прокат')?></li>
			<li><?=HTML::anchor('procat/managment/my', 'Управление прокатом')?></li>
		</ul>
    </div>	
	  <li><?=HTML::anchor('procat/cabinet', '<i class="icon-road"></i> Мой прокат', array('class'=>'btn'))?></li> 
	  </li>
	  
	  <li>
       <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('poputchik/cabinet', 'Добавление попутчика')?></li>
			<li><?=HTML::anchor('poputchik/managment/my', 'Управление попутчиками')?></li>
		</ul>
    </div>	
	  <li><?=HTML::anchor('poputchik/cabinet', '<i class="icon-lock"></i> Мой попутчик', array('class'=>'btn'))?></li>
	  </li>
	  
	  <li>
       <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('nochleg/cabinet', 'Добавление места')?></li>
			<li><?=HTML::anchor('nochleg/managment/my', 'Управление местами')?></li>
		</ul>
    </div>	
	  <li><?=HTML::anchor('nochleg/cabinet', '<i class="icon-home"></i> Мое место ночлега', array('class'=>'btn'))?></li>
	  <li>
	  
	   <li>
       <div class="btn-group mydropdown">   
    <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
	 <span class="caret"></span>
	</button>
		<ul class="dropdown-menu pull-right">
			<li><?=HTML::anchor('friends/cabinet', 'Все друзья')?></li>
			<li><?=HTML::anchor('friends/managment/my', 'Подписчики')?></li>
			<li><li><?=HTML::anchor('friends/obmen', 'Поиск друзей')?></li></li>
			
		</ul>
    </div>	  
	  <li><?=HTML::anchor('friends/cabinet', '<i class="icon-user"></i> Мои друзья', array('class'=>'btn'))?></li>
	    <li>
	</ul>
	
 <div class="right_title">Управление аккаунтом</div>
	<ul class="right_menu">
	  <li><?=HTML::anchor('account/more', 'Расширенный аккаунт', array('class'=>'btn'))?></li>
	  <li><?=HTML::anchor('account/profile', 'Редактировать аккаунт', array('class'=>'btn'))?></li>
	  <li><?=HTML::anchor('account/userimage', 'Мои изображения', array('class'=>'btn'))?></li>
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