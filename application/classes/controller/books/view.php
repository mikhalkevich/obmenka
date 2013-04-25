<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_View extends Controller_Index {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
	$users = ORM::factory('usersimage') -> find_all();
	$content = View::factory('main/v_books', array('users'=>$users));
        $this->template->title = 'Есть преступления хуже, чем сжигать книги, например, не читать их';
        $this->template->site_name = 'Есть преступления хуже, чем сжигать книги, например, не читать их';
        $this->template->block_center = array($content);
	}

}