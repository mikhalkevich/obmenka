<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Hochy extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
	$products = ORM::factory('abonement');
	$products -> products_id = $this->request->param('id');
	$products -> user_id = $this->user->id;
	$products -> status = 'wont';
	$products -> save();
	$this->request->redirect(Request::initial()->referrer());
	}
 

}