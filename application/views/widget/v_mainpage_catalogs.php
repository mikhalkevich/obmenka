<br />
<div align="center">
    <?=$forma?>
    <?foreach($catalog as $cat_one):?>
    <?if($cat_one->picture){
        $picture = "images/small_".$cat_one->picture;
    }else {
        $picture = "uploads/no_photo.png";
    }?>
    <figure class="razdels">
       <?=HTML::anchor(
               "tovars/sell/".$cat_one->vip->id,
               HTML::image("media/".$picture, array('alt' =>$cat_one->vip->name, "width"=>"150px", "height"=>"150px",)), 
               array("border"=>"0"));?>
      <figcaption>
 <?=HTML::anchor("tovars/sell/".$cat_one->vip->id, $cat_one->vip->name, array("class"=>"btn"));?>
      </figcaption>
    </figure>
<? endforeach; ?>
</div>