<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Widgets_Widgetaccount extends Controller_Template {
//определение шаблона по-умолчанию
 public $template = 'widget/v_topmessage'; 
 public function before(){
                parent::before();
     		$this->auth = Auth::instance();				
		$this->user = $this->auth->get_user();
 }
 public function action_index() {
   
 }
 public function action_topmessage() {
     $querypismo = ORM::factory('msg')
                 ->where('id_from', '=', $this->user->id)
                 ->order_by('id', 'DESC')
                 ->find();
     $userspismo = ORM::factory('msg')
                 ->where('id_to', '=', $this->user->id)
                 ->and_where('id', '>', $querypismo->id)
                 ->order_by('id', 'DESC')
                 ->find_all();
      $this->template->userspismo = $userspismo;
 }
}
