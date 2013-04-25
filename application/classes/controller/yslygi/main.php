<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Yslygi_Main extends Controller_Index {

    public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleft/service')->execute();
		$this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {
	$users = ORM::factory('usersimage') -> find_all();
	$content = View::factory('main/v_yslygi', array('users'=>$users));
        $this->template->title = 'Тут услуги';
        $this->template->site_name = 'Тут услуги';
        $this->template->block_center = array($content);
	}

}