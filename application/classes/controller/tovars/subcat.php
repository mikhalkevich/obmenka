<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Subcat extends Controller_Index {

    public function before(){
        parent::before();
		$this->template->styles[]  =	'media/css/jquery.lightbox-0.5.css';
		$this->template->scripts[] =    'media/js/jquery.lightbox-0.5.min.js';
           $widget_leftmenu = REQUEST::factory('widgets/menuleftsell/obmen')->execute();
	   $this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {

		
	$sub_id = $this->request->param('id');
	 $where = array();
	if($sub_id == 'all') {
	 $count_all = ORM::factory('product')->count_all();
     $where[] = 'id';
     $where[] = '>';
     $where[] = '0';
	}elseif($sub_id == 'gift'){
	 $count_all = ORM::factory('product')
	             ->where('gift', '=', 'yes')
				 ->count_all();
	 $where[] = 'gift';
	 $where[] = '=';
	 $where[] = 'yes';
	}
	else {
	 $count_all = ORM::factory('product')
	             ->where('subcategory_id', '=', $sub_id)
				 ->count_all();
	 $where[] = 'subcategory_id';
     $where[] = '=';
     $where[] = $sub_id;
	}

        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        )) ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));
	$products = ORM::factory('product')
              -> where($where[0], $where[1], $where[2])	
	      -> limit ($pagination->items_per_page)
              -> offset($pagination->offset)
	      -> order_by('id', 'DESC')
	      -> find_all();
	if ($this->auth->logged_in()) {
         $user_id = $this->user->id;
	}else{
	 $user_id = null;
	}
	$content = View::factory('tovars/v_tovars')
	          ->bind('products', $products)
	          ->bind('user_id', $user_id)
		  ->bind('pagination', $pagination);
        $this->template->title = 'Товары тут';
        $this->template->site_name = 'Товары тут';
        $this->template->block_center = array($content);
		
	}
        public function action_one() {
        if ($this->auth->logged_in()) {
         $user_id = $this->user->id;
	}else{
	 $user_id = null;
	}
        $id = $this->request->param('id');
        if(!$id){
           $id = 1;
        }
	$product = ORM::factory('product')
              -> where('id', '=', $id)	
	      -> find();
        $content = View::factory('tovars/v_tovar_one')
	          ->bind('product', $product)
	          ->bind('user_id', $user_id);
        $this->template->title = $product->name;
        $this->template->site_name = $product->name;
        $this->template->block_center = array($content);
        }
 
        public function action_usertovars() {
	
	 $user_id = $this->request->param('id');
	 $count_all = ORM::factory('product')
	              ->where('user_id', '=', $user_id)
	              ->count_all();

        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
               )) ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));
	$products = ORM::factory('product')
              -> where('user_id', '=', $user_id)
	      -> limit ($pagination->items_per_page)
              -> offset($pagination->offset)
	      -> order_by('id', 'DESC')
	      -> find_all();
	if ($this->auth->logged_in()) {
         $user_id = $this->user->id;
	}else{
	 $user_id = null;
	}
        $bbca = 'yes';
	$content = View::factory('tovars/v_tovars')
	          ->bind('products', $products)
	          ->bind('user_id', $user_id)
                  ->bind('user', $bbca)
		  ->bind('pagination', $pagination);
        $this->template->title = 'Товары пользователя';
        $this->template->site_name = 'Товары пользователя';
        $this->template->block_center = array($content);
	}

}