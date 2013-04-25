<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Obmen extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

 
    public function action_index() {

$menu = View::factory('tovars/v_tovars_menu', array('controller'=>'obmen'));
$content = View::factory('tovars/v_obmen', array('menu'=>$menu));
        $this->template->title = 'Предложения на обмен';
        $this->template->site_name = 'Предложения на обмен';
        $this->template->block_center = array($content);
	}
}