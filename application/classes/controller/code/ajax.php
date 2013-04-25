<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Code_Ajax extends Controller {

	public function action_index() {
		$subcategories = ORM::factory('codecatalog')
				->where('parent_id', '=', $_POST['cat_id'])
				->and_where('lvl', '=', '2')
				->find_all();
		$subcat = array();
		foreach($subcategories as $subindex => $subcategorie){
		 $subcat[$subcategorie->id] = $subcategorie->name;
		}
           echo " ";
	   echo  Form::select('subcategory_id', $subcat);
           echo " или ". Form::input('newtext', '');
	}
}