<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Chit extends Controller_Auth_Account {

    public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleft/book')->execute();
		$this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {

$menu = View::factory('books/v_books_menu', array('controller'=>'chit'));
$content = View::factory('books/v_chit', array(
                                            'menu'=>$menu));
        $this->template->title = 'Предложения на временное пользование';
        $this->template->site_name = 'Предложения на временное польование';
        $this->template->block_center = array($content);
	}
}