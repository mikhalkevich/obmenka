<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Ajax extends Controller {

	public function action_index() {
		$subcategories = ORM::factory('catalogobmen')
				->where('parent_id', '=', $_POST['cat_id'])
				->and_where('lvl', '=', '2')
				->find_all();
		$subcat = array();
		foreach($subcategories as $subindex => $subcategorie){
		 $subcat[$subcategorie->id] = $subcategorie->name;
		}
	   echo  Form::select('subcategory_id', $subcat);
	}
}