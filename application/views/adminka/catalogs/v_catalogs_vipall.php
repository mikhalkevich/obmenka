<div class="mytable_account"> 
 <?=$menu?>	
<?if($errors):?>
 <?foreach ($errors as $error):?>
  <div class="error"><?=$error?></div>
 <?endforeach?>
<?endif?>
  <?foreach($cat_vip_all as $cat_one):?>
    <?if($cat_one->picture){
        $picture = "images/".$cat_one->picture;
    }else {
        $picture = "uploads/no_photo.png";
    }?>
  <table  class="breadcrumb" width=100%>
      <tr>
          <td width="100px" align="center">
              <?=HTML::image("media/".$picture, array( "width"=>"90px", "height"=>"90px",))?>
          </td>
          <td align="left">
           <b><?=$cat_one->vip->name?></b>
          </td>
          <td valign="top" width="200px">
            <ul class="right_menu">   
              <li>
            <?=HTML::anchor("adminka/catalogs/vipadd/".$cat_one->vip->id, "поменять фото", array("class"=>"btn",
                 ));?></li>
              <li>
            <?=HTML::anchor("adminka/catalogs/vipdell/".$cat_one->id, "Удалить VIP", array("class"=>"btn",
                 ));?></li>
              </ul>
          </td>
      </tr>
  </table>
  <?endforeach?>
</div>