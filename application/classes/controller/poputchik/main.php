<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Poputchik_Main extends Controller_Index {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
	$content = View::factory('main/v_poputchik');
        $this->template->title = 'Попутчик';
        $this->template->site_name = 'Попутчик';
        $this->template->block_center = array($content);
	}

}