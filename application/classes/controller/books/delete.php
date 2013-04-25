<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Delete extends Controller {

	public function action_index() {
	    $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
	echo $sub_id = $this->request->param('id');
		$prod = ORM::factory('book')
				->where('id', '=', $sub_id)
				->and_where('user_id', '=', $this->user->id)
				->find();
	 if($prod->picture) {
	  $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/books/";
	  $pic_small = $dir.$prod->picture_small;
	  $pic_big = $dir.$prod->picture;
	  @unlink($pic_small);
	  @unlink($pic_big);
	 }
	 $prod->delete();
	 $this->request->redirect('books/cabinet#tov');
	}
}