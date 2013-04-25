<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Tovarsajax extends Controller {

    public function action_index(){
		$products = ORM::factory('product')
			->where('id', '=', $_POST['id'])
			->find();
		echo "<h1>".$products->name."</h1>";
                if ($products->products_pic_small) {
                 $picture = "media/uploads/tovars/".$products->products_pic_small;
                 } elseif($products->products_pic) { 
                 $picture = "media/uploads/tovars/".$products->products_pic;
                 }
                echo HTML::image($picture, array(
			  'width'=>'150px', 
			  'class'=>'pic_tovar', 
			  'align'=>'left'));
		echo $products->description;
	}
        
	
}
?>