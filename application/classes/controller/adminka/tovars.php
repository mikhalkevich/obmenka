<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Tovars extends Controller_Adminka_Main {
    public function before(){
        parent::before();
    }
 public function action_index() { 
		$this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
		$this->template->scripts[] = 'media/js/upload_one.js';
                
		//$cat = ORM::factory('catalog');
		//$cat = $cat->fulltree()->as_array();
		if(isset($_POST['submit'])){
		$products = ORM::factory('tovar');
		$data = Arr::extract($_POST, array(
                                            'cat_number',
                                             'name', 
                                            'description', 
                                             'price', 
                                             'status', 
                                                                            'optovik',
                                                                            'showhide',
									));
		$products-> cut_id = $data['cat_number'];
		$products-> name = $data['name'];
		$products-> user_id = $this->user->id;
		$products-> description = $data['description'];
		$products-> price = $data['price'];
		$products-> status = $data['status'];
                $products-> optovik = $data['optovik'];
			if($data['showhide'] == 'show'){
				$products-> showhide = $data['showhide'];
			}else{
				$products-> showhide = 'hide';
			}
		$products-> putdate = date('Y-m-d');
		try{
		 $filename = null;
			if (!empty($_FILES['images']['name'][0])){
				foreach ($_FILES['images']['tmp_name'] as $image){
						$dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/eshop/";
						 if (!is_dir($dir)) {
                          @mkdir($dir, 0777);
						 }
                        $filename = $this->_upload_img($image, 'media/uploads/eshop/');

                        // Запись в БД
                        $products->pic = $filename;
                        $products->pic_small = "small_".$filename;
                }
            }
			$products->save();
			$this->request->redirect('adminka/tovars/reduct');
		}
		catch (ORM_Validation_Exception $e) {
				if( $filename) {
					@unlink($dir.$filename);
					@unlink($dir."small_".$filename);
				}
                $errors = $e->errors('validation');
            }
		}
		
		$menu = View::factory('adminka/tovars/v_tovars_menu', array('controller'=>'add'));
        $content=View::factory('adminka/tovars/v_tovars')
			->bind('menu', $menu)
			//->bind('cat', $cat)
			->bind('errors', $errors)
			->bind('data', $data);
        $this->template->block_center=array($content);
    }
public function action_reduct() {
         $this->template->scripts[] = 'media/js/account.js';
	 $count_all = ORM::factory('tovar')
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
		$my_products = ORM::factory('tovar')
 	          ->where('user_id', '=', $this->user->id)
		  ->and_where($one, $two, $three)
 	          ->order_by('id', 'DESC')
                  ->limit ($pagination->items_per_page)
                  ->offset($pagination->offset)
                  ->find_all();	  
	$menu = View::factory('adminka/tovars/v_tovars_menu', array('controller'=>'reduct'));
	$content= View::factory('adminka/tovars/v_tovars_reduct')
		->bind('menu', $menu)
	    ->bind('my_products', $my_products)
	    ->bind('page', $page)
        ->bind ('pagination', $pagination);
	$this->template->block_center=array($content);
}
public function action_edit() {
	$id = $this->request->param('id');
        $uri = 'adminka/tovars/reduct/0/'.$this->request->param('page');
	$data = ORM::factory('tovar')
		->where('id', '=', $id)
		->and_where('user_id', '=', $this->user->id)
		->find()
		->as_array();
		if(isset($_POST['submit'])){
		$id = $this->request->param('id');		
		$products = ORM::factory('tovar', $id)
		 ->where('user_id', '=', $this->user->id);		
		$post = Arr::extract($_POST, array(
                                                    'cut_id',
                                                    'name', 
                                                    'description', 
                                                    'product_code', 
                                                    'price', 
                                                    'optovik',
                                                    'status',
                                                  ));
		$products-> cut_id = $post['cut_id'];
		$products-> name = $post['name'];
		$products-> product_code = $post['product_code'];
		$products-> description = $post['description'];
		$products-> price = $post['price'];
		$products-> status = $post['status'];
                $products-> optovik = $post['optovik'];
                    try{
                      $products->save();
                      $this->request->redirect($uri);
                    }catch (ORM_Validation_Exception $e) {				
                      $errors = $e->errors('validation');
                    }
		}
		
	$menu = View::factory('adminka/tovars/v_tovars_menu', array('controller'=>'edit'));
	$content= View::factory('adminka/tovars/v_tovars_edit')
		->bind('menu', $menu)
		->bind('page', $this->request->param('page'))
		->bind('errors', $errors)
	    ->bind('data', $data);
	$this->template->block_center=array($content);
}
public function action_show() {
	$id = $this->request->param('id');
	$products = ORM::factory('tovar', $id)
	     ->where('user_id', '=', $this->user->id);
	$products->showhide = 'show';
	$products->save();
	$this->request->redirect('adminka/tovars/reduct');
}
public function action_hide() {
	$id = $this->request->param('id');
	$products = ORM::factory('tovar', $id);
	$products->showhide = 'hide';
	$products->save();
	$this->request->redirect('adminka/tovars/reduct');
}
public function action_photo() {
		$this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
		$this->template->scripts[] = 'media/js/upload_one.js';
	$id = $this->request->param('id');		
	$products = ORM::factory('tovar')
	->where('user_id', '=', $this->user->id)
	->and_where('id', '=', $id)
	->find();
	$uri = 'adminka/tovars/reduct/0/'.$this->request->param('page');
	if (!empty($_FILES['images']['name'][0])){
               foreach ($_FILES['images']['tmp_name'] as $image){
		   $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/eshop/";
			 if (!is_dir($dir)) {
                          @mkdir($dir, 0777);
			 }
                   $filename = $this->_upload_img($image, 'media/uploads/eshop/'.$products->cut_id."/");
                        // Запись в БД
			$a = ORM::factory('tovar', $products->id);
                        $a -> pic = $products->cut_id."/".$filename;
                        $a -> pic_small = $products->cut_id."/small_".$filename;
			try{
			  @unlink($dir.$filename);
			  @unlink($dir."small_".$filename);
                          $a -> save();		  
			$this->request->redirect($uri);
			}catch (ORM_Validation_Exception $e) {				
                          $errors = $e->errors('validation');
                        }
                }
	}

	$menu = View::factory('adminka/tovars/v_tovars_menu', array('controller'=>'edit'));
	$content= View::factory('adminka/tovars/v_tovars_photo')
		 ->bind('menu', $menu)
	     ->bind('products', $products)
	     ->bind('uri', $uri)
	     ->bind('page', $this->request->param('page'))
         ->bind ('pagination', $pagination);
	$this->template->block_center=array($content);
 }
public function action_delete() {
	$id = $this->request->param('id');		
	$products = ORM::factory('tovar', $id)
	->where('user_id', '=', $this->user->id);
	$pic = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/eshop/$products->pic";
	$picSmall = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/eshop/$products->pic_small";
 
	if($pic){
		@unlink($pic);
		}
	if($picSmall){
		@unlink($picSmall);
		}
 
	$products->delete();
	$this->request->redirect('adminka/tovars/reduct');
 }
}

