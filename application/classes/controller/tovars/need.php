<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Need extends Controller_Index {

    public function before(){
        parent::before();
    }
    
    public function action_index() {
        $count_all = ORM::factory('hotelkinew')
				->where('showhide', '=', 'show')
				->count_all();		
        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))  ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));
	$products = ORM::factory('hotelkinew') 
                -> where('showhide', '=', 'show')
                -> limit ($pagination->items_per_page)
                -> offset($pagination->offset)
                -> order_by('id', 'DESC')
                -> find_all();
	$content = View::factory('tovars/v_need', array('products'=>$products))
                ->bind('pagination', $pagination);
        $this->template->title = 'Нужные товары';
        $this->template->site_name = 'Нужные товары';
        $this->template->block_center = array($content);
    }
}