<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Prokat_Main extends Controller_Index {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
	$content = View::factory('main/v_prokat');
        $this->template->title = 'Прокатись на нашей карусель!';
        $this->template->site_name = 'Прокатись на нашей карусель!';
        $this->template->block_center = array($content);
	}

}