<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Finddesc extends Controller_Adminka_Main {
    public function before(){
        parent::before();
    }
 public function action_index() { 
  $none_desc_count = ORM::factory('tovar')
          ->where('description', '=', '')
	  ->count_all();
  $with_desc_count = ORM::factory('tovar')
          ->where('description', '!=', '')
	  ->count_all();
  $content = View::factory('adminka/v_finddesc', 
          array(
		  'with_desc_count'=>$with_desc_count,
		  'none_desc_count'=>$none_desc_count,
		  ));
  $this->template->block_center = array($content);
 }
}