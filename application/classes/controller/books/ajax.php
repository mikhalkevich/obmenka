<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Ajax extends Controller {

	public function action_index() {
		$subcategories = ORM::factory('bookssubcategorie')
				->where('category_id', '=', $_POST['cat_id'])
				->find_all();
		$subcat = array();
		foreach($subcategories as $subindex => $subcategorie){
		 $subcat[$subcategorie->id] = $subcategorie->name;
		}
	   echo  Form::select('subcategory_id', $subcat);
	}
}