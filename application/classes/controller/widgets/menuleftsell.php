<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Widgets_Menuleftsell extends Controller_Template {
//определение шаблона по-умолчанию

 public $template = 'widget/v_left_menu_sell'; 
 public function action_sell() {
 
        $cat = ORM::factory('catalog');
		$cat_data = $cat->find_all();
		$data = "";
		foreach($cat_data as $cat_one){
		 $data .= "'".$cat_one->name."', ";
		}
		$cat = $cat->where('parent_id', '=', '0')->order_by('name')->find_all();
          if(isset($_POST['hidesearch'])) {
		    $catpost = ORM::factory('catalog')
		                  ->where('name', '=', $_POST['usercat'])
		                  ->find();
			$this->request->redirect('tovars/sell/'.$catpost->id);
		  }		
	$this->template->catalog_data = $data;
        $this->template->catalog = $cat;
        $this->template->var = 'sell';
 
    }
 public function action_obmen() {
 
        $cat = ORM::factory('catalogobmen');
		$cat_data = $cat->find_all();
		$data = "";
		foreach($cat_data as $cat_one){
		 $data .= "'".$cat_one->name."', ";
		}
		$cat = $cat->where('parent_id', '=', '0')->order_by('name')->find_all();
          if(isset($_POST['hidesearch'])) {
		    $catpost = ORM::factory('catalog')
		                  ->where('name', '=', $_POST['usercat'])
		                  ->find();
			$this->request->redirect('tovars/sell/'.$catpost->id);
		  }		
	$this->template->catalog_data = $data;
        $this->template->catalog = $cat;
        $this->template->var = 'subcat';
    }
}
