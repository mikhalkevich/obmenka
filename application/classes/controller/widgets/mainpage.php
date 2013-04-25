<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Widgets_Mainpage extends Controller_Template {
//определение шаблона по-умолчанию
 public $template = 'widget/v_mainpage_catalogs'; 
 public function action_index() {	
        $cat = ORM::factory('catalogspicture')->find_all(); 		
        $this->template->catalog = $cat;
        $this->template->forma = View::factory('tovars/v_tovars_forma');
    }

}
