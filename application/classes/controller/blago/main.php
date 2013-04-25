<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Blago_Main extends Controller_Index {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
    $blago = ORM::factory('maintext')
                          ->where('id', '=', 1)
	                  ->find();
	$content = View::factory('blago/v_main_blago', array('blago'=>$blago));
        $this->template->title = 'Благотворительность';
        $this->template->site_name = 'Благотворительность';
        $this->template->block_center = array($content);
	}

}