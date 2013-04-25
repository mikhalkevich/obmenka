<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Findpicture extends Controller_Adminka_Main {
    public function before(){
        parent::before();
    }
 public function action_index() { 
  $none_picture_count = ORM::factory('tovar')
          ->where('pic', '=', '')
		  ->count_all();
  $with_picture_count = ORM::factory('tovar')
          ->where('pic', '!=', '')
		  ->count_all();
  $content = View::factory('adminka/v_findpicture', 
          array(
		  'with_picture_count'=>$with_picture_count,
		  'none_picture_count'=>$none_picture_count,
		  ));
  $this->template->block_center = array($content);
 }
}