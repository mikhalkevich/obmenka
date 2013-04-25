<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Index {

	public function action_best(){
		$content= View::factory('blocks/v_block_users');	
		$this->template->block_center=$content;
	}
}