<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Widgets_Menuleft extends Controller_Template {
//определение шаблона по-умолчанию

 public $template = 'widget/v_left_menu_obmen'; 
 public function action_index() {	
        $cat = ORM::factory('catalog'); 
		$cat = $cat->fulltree()->as_array();		
        $this->template->catalog = $cat;
    }
 public function action_book() {
	$leftmenu = ORM::factory('bookscategorie')->find_all();
	$this->template->left_block = $leftmenu;
	$this->template->link = 'books/subcat';
	$this->template->menu_text = 'Книги';
    }
 public function action_service() {
	$leftmenu = ORM::factory('servicecateg')->find_all();
	$this->template->left_block = $leftmenu;
	$this->template->link = 'link';
	$this->template->menu_text = 'Услуги';
    }
 public function action_city() {
	$leftmenu = ORM::factory('cityscategorie')->find_all();
	$this->template->left_block = $leftmenu;
	$this->template->link = '#';
	$this->template->menu_text = 'Выберите область';
    }	
 public function action_sell() {
 
	$leftmenu = ORM::factory('catalog')->find_all();
	$this->template->left_block = $leftmenu;
	$this->template->link = '#';
	$this->template->menu_text = 'Выберите область';
    }
}
