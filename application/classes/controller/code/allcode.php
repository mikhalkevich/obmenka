<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Code_Allcode extends Controller_Index {

   public function before(){
        parent::before();
           $this->template->title = 'Coding';
           $this->template->site_name = 'Coding';
	   $widget_leftmenu = REQUEST::factory('widgets/menuleftcode/index')->execute();
	   $this->template->block_left  = array($widget_leftmenu);
    }
   public function action_index(){
         $id = $this->request->param('id');
         $cat_all = ORM::factory('codecatalog')
                  ->where('parent_id', '=', $id)
                  ->find_all()
                 ->as_array();
         $arr_cat = array(0);
         foreach($cat_all as $cat_all_one){
          $arr_cat[] = $cat_all_one->id;             
         }
         $and_where = array();
         if($id != 0){
          $and_where[0] = 'cat_id';
          $and_where[1] = 'IN';
          $and_where[2] = $arr_cat;
         } else {
          $and_where[0] = 'cat_id';
          $and_where[1] = '>';
          $and_where[2] = '0';
         }
         
	$count_all = ORM::factory('code')
				->where('showhide', '=', 'show')
                                ->and_where($and_where[0], $and_where[1], $and_where[2])
				->count_all();		
        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))  ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));

			$mycode = ORM::factory('code')
                          ->where('showhide', '=', 'show')
                          ->and_where($and_where[0], $and_where[1], $and_where[2])
			  ->limit ($pagination->items_per_page)
                          ->offset($pagination->offset)
			  ->order_by('id', 'DESC')
	                  ->find_all();

        $content = View::factory('code/v_allcode')
	          ->bind('mycode', $mycode)
		  ->bind('pagination', $pagination);
        $this->template->block_center = array($content);
    }
    
    public function action_one() {
        $id = $this->request->param('id');
        if(isset($id)){
           $count_all = ORM::factory('code')
				->where('showhide', '=', 'show')
                                ->and_where('cat_id', '=', $id)
				->count_all();
           $pagination = Pagination::factory(array(
            'total_items' => $count_all,
                ))->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $id,
		));
           $mycode = ORM::factory('code')
                          ->where('showhide', '=', 'show')
                          ->and_where('cat_id', '=', $id)
			  ->limit ($pagination->items_per_page)
                          ->offset($pagination->offset)
			  ->order_by('id')
	                  ->find_all();
           $codecatalog = ORM::factory('codecatalog')
                          ->where('id', '=', $id)
                          ->find();
           
           $this->template->title = $codecatalog->name;
           $this->template->site_name = $codecatalog->name;
           $this->template->site_description = 'Для кодеров и программистов';
           
           $content = View::factory('code/v_onecode')
	             ->bind('mycode', $mycode)
	             ->bind('codecatalog', $codecatalog)
		     ->bind('pagination', $pagination);
            $this->template->block_center = array($content);
        }
    }

}