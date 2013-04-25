<p>
Тут книги по подразделам
</p>
 
<?foreach($books as $product):?>
<div class="mytable">
 <div class="foruser"> <?=$product->name?></div>
  <?if ($product->picture_small) {
  $picture = "media/uploads/books/".$product->picture_small;
  } elseif($product->picture) { 
  $picture = "media/uploads/books/".$product->picture;
  }
  else {
  $picture = 'media/uploads/no_photo.png';
  }
  ?>
   	 <table class="none" cellpadding=0 cellspacing=0 width=100%>
	  <tr>
	   <td width=150px valign="top">
		  <?=HTML::image($picture, array(
		  'width'=>'150px', 
		  'class'=>'pic_book', 
		  'align'=>'left'));
		  ?>
	  </td>
	  <td valign="top">
	  	 <div class="well form-inline">
	    <?if($product->author):?>
			<div class="description"><b>Автор</b> <?=$product->author?></div>
		  <?endif?>
		 <?=HTML::anchor('books/subcat/'.$product->subcat->id, $product->subcat->name);?>
	    <?if($product->year):?>
			<div class="description"><b>Год</b> <?=$product->year?></div>
		  <?endif?>
		<?if($product->sostoyanie):?>
			<div class="description"><b>Состояние</b> <?=$product->sostoyanie?></div>
		  <?endif?>
		  <?if($product->description):?>
			<div class="description"><b>Описание</b> <?=$product->description?></div>
		  <?endif?>
		  <?if($product->wishes):?>
			<p><b>Условие:</b> <em><?=$product->wishes?></em></p>
		  <?endif?>
	   </div>
	    <p><b>Владелец книги:</b> <?=HTML::anchor('userone/'.$product->user->id, $product->user->first_name);?></p>
		<?if($product->owner->id!=$product->user->id):?>
	    <p><b>Книга на руках у:</b> <?=HTML::anchor('userone/'.$product->owner->id, $product->owner->first_name);?></p>
		<?endif?>

	   </td>
	   <td valign="top" width="130px" class="fortov_menu">
	   <?=HTML::anchor('books/hochy', 'Хочу', array("class"=>"btn btn-primary btn-large"));?>
	   </td>
	  </tr>
	 </table> 
</div>
<?endforeach?>
<?=$pagination?>
 