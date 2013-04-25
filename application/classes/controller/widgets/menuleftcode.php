<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Widgets_Menuleftcode extends Controller_Template {
//определение шаблона по-умолчанию

 public $template = 'widget/v_left_menu_code'; 
 public function action_index() {
 
        $cat = ORM::factory('codecatalog')
		       ->where("parent_id", "=", 0)
                       ->find_all();
        $this->template->catalog = $cat;
    }
}
