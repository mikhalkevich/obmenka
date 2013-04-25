<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Users extends Controller_Adminka_Main {
    public function before(){
        parent::before();
    }
 public function action_index() { 

         $this->template->scripts[] = 'media/js/account.js';
	 $count_all = ORM::factory('user')->count_all();


        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
                ))
		->route_params(array(
          'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
		  'id' => $this->request->param("id"),
		));
		
	if(isset($_POST['submit_searchadmintov'])){
	 $one = 'product_code';
	 $two = '=';
	 $three = trim($_POST['searchadmintov']);
	} else {
	 $one = 'id';
	 $two = '>';
	 $three = '0';
	}
	$page = $this->request->param('page');
        $my_products = ORM::factory('user')
		  ->where($one, $two, $three)
 	          ->order_by('id', 'DESC')
                  ->limit ($pagination->items_per_page)
                  ->offset($pagination->offset)
                  ->find_all();	  
	$content= View::factory('adminka/users/v_users')

	    ->bind('my_products', $my_products)
	    ->bind('page', $page)
        ->bind ('pagination', $pagination);
	$this->template->block_center=array($content);
    }
    
    public function action_delete() {
	$id = $this->request->param('id');		
	$products = ORM::factory('user', $id);
	$pic = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/users/".$products->usermore->pic;
	if($pic){
		@unlink($pic);
		}
        
        $usermore = ORM::factory('usermore', $products->usermore->id);
        if($usermore->loaded()){
         $usermore->delete();
        }
        if($products->loaded()){
       	 $products->delete();
        }
	$this->request->redirect('adminka/users');
}

}