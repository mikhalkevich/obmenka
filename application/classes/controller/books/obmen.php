<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Obmen extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

 
    public function action_index() {

$menu = View::factory('books/v_books_menu', array('controller'=>'obmen'));
$content = View::factory('books/v_obmen', array(
                                            'menu'=>$menu));
        $this->template->title = 'Предложения на обмен';
        $this->template->site_name = 'Предложения на обмен';
        $this->template->block_center = array($content);
	}
}