<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Рубрикация</div>     
	</div>
<div class="maincode">
<?if($mycode):?>
<?foreach ($mycode as $code):?>
  <?$newarr = array_reverse($code->themablogs->find_all()->as_array());?>
    <? 
      $blog_statia = array();
      $blog_pic = array();
      $blog_video = array();
      $a=0; $b=0; $c=0; $d=0;
    ?>
    
  <?foreach($newarr as $blog):?>
     <?if(isset($blog->body) AND $d<1):?>
         <hr />
         <h1><?=HTML::anchor("thema/blog/".$code->id."/one", $code->name);?> </h1>
     <?$d++;?>
     <?endif;?>
     <?if($blog->razdel == 'Статья'):?>
       <?if($a<1):?>
        <?$blog_statia[]=HTML::anchor("thema/blog/".$code->id."/one", mb_strcut(strip_tags($blog->body),  0, 400)."");?>
       <?endif;?>
      <?$a++;?>
     <?endif;?>
    
     <?if($blog->razdel == 'Изображение'):?>
       <?if($b<5):?>
        <?$blog_pic[]=HTML::image('media/uploads/content/'.$code->id.'/small_'.$blog->body);?>
       <?endif;?>
      <?$b++;?>
     <?endif;?>
    
     <?if($blog->razdel == 'Видео'):?>
      <?if($c<1):?>
        <?$blog_video[]=$blog->body;?>
      <?endif;?>
      <?$c++;?>
     <?endif;?>
    
  <?endforeach;?>
    
  <?foreach($blog_statia as $one):?>
    <br style="clear:both"><?=$one;?><br style="clear:both">
  <?endforeach;?>
  <div align="center">
  <?foreach($blog_pic as $one):?>
     <?=$one;?>
  <?endforeach;?>
  <?foreach($blog_video as $one):?>
     <br style="clear:both"><?=$one;?><br style="clear:both">
  <?endforeach;?>
  </div>
    
<?endforeach?><br style="clear:both">
<?endif?>
</div>
    <p align="center"><?=$pagination?></p>
</div>