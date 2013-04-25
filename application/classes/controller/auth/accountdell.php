<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Auth_Accountdell extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

    public function action_index() { 
    }
    public function action_hotdell() {
        $hot = $this->request->param('id');
        $prodt = ORM::factory('hotelkinew')
				  ->where('id', '=', $hot)
				  ->and_where('user_id', '=', $this->user->id)
				  ->find();
	$prodt->delete();
	   
        $this->request->redirect('account/cabinet/0');
    }

}