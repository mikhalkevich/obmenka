<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Subcat extends Controller_Books_Main {

    public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleft/book')->execute();
		$this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {
	
	$sub_id = $this->request->param('id');
	$where = array();
	if(!$sub_id== 'all') {
	  $count_all = ORM::factory('book')->count_all();
            $where[] = 'id';
            $where[] = '>';
            $where[] = '0';
	}elseif($sub_id == 'gift'){
	 $count_all = ORM::factory('book')
	             ->where('gift', '=', 'yes')
				 ->count_all();
	 $where[] = 'gift';
	 $where[] = '=';
	 $where[] = 'yes';
	}
    else {
	 $count_all = ORM::factory('book')
	             ->where('subcategory_id', '=', $sub_id)
				 ->count_all();
	 $where[] = 'subcategory_id';
     $where[] = '=';
     $where[] = $sub_id;
	}
	
			
	  
        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))
		->route_params(array(
                    'directory' => Request::current()->directory(),
                    'controller' => Request::current()->controller(),
                    'action' => Request::current()->action(),
					'id' => $this->request->param('id'),
		));
		
	
        
	$products = ORM::factory('book')
                    ->where($where[0], $where[1], $where[2])	
                    ->limit ($pagination->items_per_page)
                    ->offset($pagination->offset)
                    -> order_by('id', 'DESC')
                    -> find_all();
	if ($this->auth->logged_in()) {
     $user_id = $this->user->id;
	}else{
	 $user_id = null;
	}

	$content = View::factory('books/v_books')
	          ->bind('books', $products)
	          ->bind('pagination', $pagination);
        
        $this->template->title = 'Книги тут';
        $this->template->site_name = 'Книги тут';
        $this->template->block_center = array($content);
	}
 

}