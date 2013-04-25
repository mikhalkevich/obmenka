<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Delete extends Controller {

	public function action_index() {
	    $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
	echo $sub_id = $this->request->param('id');
		$prod = ORM::factory('product')
				->where('id', '=', $sub_id)
				->and_where('user_id', '=', $this->user->id)
				->find();
	 if($prod->products_pic) {
	  $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/tovars/";
	  $pic_small = $dir.$prod->products_pic_small;
	  $pic_big = $dir.$prod->products_pic;
	  @unlink($pic_small);
	  @unlink($pic_big);
	 }
	 $prod->delete();
	 $this->request->redirect('tovars/managment/my');
	}
}