<!DOCTYPE>
<html>
<head>
<meta content="text/html; charset=utf8" http-equiv="content-type">
    <title><?=$site_name?> | <?=$site_title?></title>
    
    <?=html::script("media/js/jquery-1.7.2.min.js")?>
    
    <?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
	
    <?foreach ($scripts as $file_script):?>
        <?=html::script($file_script)?>
    <?endforeach?>

</head>
<body>
        <? if (isset($block_event)):?>
	 <div class="block_event">
		<?=$block_event?>
	</div>
	 
	<?endif?>
	<div class="menu">
	 <?=$block_top ?>
	 <br style="clear:both">
	</div>
        <div class="top_menu">
<div class="navbar navbar-static" id="navbar-example">
              <div class="my_navbar">
                <div style="width: auto;" class="container">
                  <a href="/" class="brand mybrand">Obmenka.BY</a>
                  <ul role="navigation" class="nav">
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">
                          <i class="icon-wrench"></i> Услуги 
                         <b class="caret"></b></a>
                      <ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
                          <li role="presentation"><?= HTML::anchor('services/all', 'Все услуги')?></li>
                        <li role="presentation"><a href="#anotherAction" tabindex="-1" role="menuitem">Предложения</a></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Услуга за услугу</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><?=HTML::anchor('tovars/subcat/gift', 'Участники (2)')?></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">
                           <i class="icon-shopping-cart"></i> Товары 
                          <b class="caret"></b></a>
                      <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                        <li role="presentation"><?=HTML::anchor('tovars/need/0', 'Нужные товары')?></li>
                        <li role="presentation"><?=HTML::anchor('tovars/main/0/shop', 'Интернет-агазин')?></li>
                        <li role="presentation"><?=HTML::anchor('tovars/subcat/all', 'Товары пользователей')?></li>
                        <li role="presentation"><?=HTML::anchor('tovars/subcat/gift', 'Даром')?></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><?=HTML::anchor('tovars/subcat/gift', 'Участники (2)')?></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">
                          <i class="icon-user"></i> Социалка 
                          <b class="caret"></b></a>
                      <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                        <li role="presentation"><?=HTML::anchor('thema/blog/0', 'Рубрикация')?></li>
                        <li role="presentation"><?=HTML::anchor('blago', 'Благотворительность')?></li>
                        <li role="presentation"><?=HTML::anchor('code/allcode/0', 'Программирование')?></li>
                        <li role="presentation"><?=HTML::anchor('http://obmenka.by/map.php', 'Проложить маршрут')?></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><?= HTML::anchor('users/'.$all_users.'', 'Наc уже ('.$all_users.')')?></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="nav pull-right">
                    <li class="rrr">
                      <?=$site_name?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
<?=$top_message?>
<table width=100% cellpadding=0 cellspacing=0 id="content">
 <tr>
  <td width=220px valign="top">       
	<? if (isset($block_left)):?>
	 <div class="block_left">
		<?foreach ($block_left as $left):?>
		 <div class="nav nav-tabs nav-stacked">
		 <?=$left?>
		 </div>
		<?endforeach?>
	 </div>
	<?endif?>        
  </td>          
  <td valign="top">          
       <div class="block_center">
		<?foreach ($block_center as $index_center):?>
		  <?=$index_center; ?> 
        <?endforeach?>
	   </div>
  </td>
  <td width=200px valign="top">
	  <? if (isset($block_right)):?>
	 <div class="block_right">
		<?foreach ($block_right as $index_right => $right):?>
			 <div class="block_right_top"> <?=$right; ?> </div>
		<?endforeach?>
	 </div>
	<?endif?>
  </td>
 </tr>
</table>
<br style="clear:both">
<div class="footer">
    <p>Заказ товаров по телефонам:</p>
    <p>Velcom <b>8(029)655-32-97</b></p>
    <p>MTC <b>8(029)550-33-83</b></p>
 <a href="http://mikhalkevich.colony.by">разработка сайтов под ключ</a>
</div>
	
</body>
</html>