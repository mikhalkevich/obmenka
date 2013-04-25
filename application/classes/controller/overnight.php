<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Overnight extends Controller_Index {
    public function before() {
        
        parent::before();
        $this->template->block_right=null;
    }

    public function action_index(){
        $overnights = ORM::factory('overnight')->find_all();
    	$countries = ORM::factory('country')->find_all();

	$content= View::factory('blocks/v_block_overnight')
                         ->bind('overnights', $overnights)
                         ->bind('countries', $countries);	
	$this->template->block_center=$content;

        $menu= View::factory('blocks/v_block_overnight_menu')
                     ->bind ('countries', $countries);
        $this->template->block_left=$menu;
        
	}
}