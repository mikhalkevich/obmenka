<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Main extends Controller_Index {

    public function before(){
        parent::before();
    }
    
    public function action_index() {
	$users = ORM::factory('usersimage') -> find_all();
	$content = View::factory('tovars/v_tovars', array('users'=>$users));
        $this->template->title = 'Тут товары';
        $this->template->site_name = 'Тут товары';
        $this->template->block_center = array($content);
    }
    
    public function action_shop(){
        $widget_mainpage_catalogs = REQUEST::factory('widgets/mainpage')->execute();
        $this->template->site_name = "Интернет-магазин";
        $this->template->block_center = array($widget_mainpage_catalogs);
    }
    
 

}