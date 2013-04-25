<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Thema_Blog extends Controller_Index {

   public function before(){
        parent::before();
           $this->template->title = 'Рубрикация';
           $this->template->site_name = 'Рубрикация';
    }
   public function action_index(){
         $id = $this->request->param('id');
         
	$count_all = ORM::factory('thema')
				->where('showhide', '=', 'show')
                                ->and_where('parent_id', '=', 0)
				->count_all();		
        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))  ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));

	$mycode = ORM::factory('thema')
				->where('showhide', '=', 'show')
                                ->and_where('parent_id', '=', 0)
			  ->limit ($pagination->items_per_page)
                          ->offset($pagination->offset)
			  ->order_by('lastvisit', 'DESC')
	                  ->find_all();
        $bind_null = array();
        $content = View::factory('thema/v_allthema')
	          ->bind('mycode', $mycode)
                  ->bind('blog_name', $bind_null)
		  ->bind('pagination', $pagination);
        $this->template->block_center = array($content);
    }
    
  public function action_one() {
        $id = $this->request->param('id');
        if(isset($id)){
           $count_all = ORM::factory('themablog')
				->where('showhide', '=', 'show')
                                ->and_where('thema_id', '=', $id)
				->count_all();
           $pagination = Pagination::factory(array(
            'total_items' => $count_all,
                ))->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $id,
		));
           $mycode = ORM::factory('themablog')
                          ->where('showhide', '=', 'show')
                          ->and_where('thema_id', '=', $id)
			  ->limit ($pagination->items_per_page)
                          ->offset($pagination->offset)
			  ->order_by('id')
	                  ->find_all();
           $codecatalog = ORM::factory('thema')
                          ->where('id', '=', $id)
                          ->find();
           
           $this->template->title = $codecatalog->name;
           $this->template->site_name = $codecatalog->name;
           
           $content = View::factory('thema/v_onethema')
	             ->bind('mycode', $mycode)
	             ->bind('codecatalog', $codecatalog)
		     ->bind('pagination', $pagination);
            $this->template->block_center = array($content);
        }
    }
}