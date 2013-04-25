<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Managment extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
        $count_all = ORM::factory('product')
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

 	$my_products = ORM::factory('product')
 	          ->where('user_id', '=', $this->user->id)		  
 	          ->order_by('id', 'DESC')
                  ->limit ($pagination->items_per_page)
                  ->offset($pagination->offset)
                  ->find_all();

$menu = View::factory('account/v_account_hotelki_menu', array('controller'=>'tovars/managment/my'));
$content = View::factory('tovars/v_managment', array(
                                            'menu'=>$menu))
	               ->bind('my_products', $my_products)
                   ->bind ('pagination', $pagination);
        $this->template->title = 'Управление товарами';
        $this->template->site_name = 'Управление товарами';
        $this->template->block_center = array($content);
	}
}