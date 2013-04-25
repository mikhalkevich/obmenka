<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Managment extends Controller_Auth_Account {

    public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleft/book')->execute();
		$this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {
        $count_all = ORM::factory('book')
                ->where('user_id', '=', $this->user->id)
                ->count_all();


        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))
		->route_params(array(
          'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
		  'id' => $this->request->param("id"),
		));

 	$my_products = ORM::factory('book')
 	          ->where('user_id', '=', $this->user->id)		  
 	          ->order_by('id', 'DESC')
                  ->limit ($pagination->items_per_page)
                  ->offset($pagination->offset)
                  ->find_all();

$menu = View::factory('books/v_books_menu', array('controller'=>'managment'));
$content = View::factory('books/v_managment', array(
                                            'menu'=>$menu))
	               ->bind('my_products', $my_products)
                   ->bind ('pagination', $pagination);
        $this->template->title = 'Управление книгами';
        $this->template->site_name = 'Управление книгами';
        $this->template->block_center = array($content);
	}
}