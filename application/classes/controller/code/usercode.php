<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Code_Usercode extends Controller_Auth_Account {

    public function before(){
        parent::before();
     	   $widget_leftmenu = REQUEST::factory('widgets/menuleftcode/index')->execute();
	   $this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {
        $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
        //$cat = ORM::factory('codecatalog')->where('parent_id', '=', 0);
        //$cat->name = "объединение двух таблиц, UNION";
        // $cat->make_root();
        //$cat->insert_as_last_child(2);
        if (isset($_POST['submit'])) {
         $data = Arr::extract($_POST, array(
				'category', 
				'subcategory_id', 
				'newtext', 
				'opisanie', 
				'code'));
         $code = ORM::factory('code');
         $data['opisanie'] = @ereg_replace("script", "<sapn>script</span>", $data['opisanie']);
         $code->opisanie = $data['opisanie'];
         $code->code = htmlspecialchars($data['code']);
         $code->user_id = $this->user->id;
         $code->putdate = date('Y-m-d');
         $cat_id = $data['subcategory_id'];
         if($data['newtext'] != ''){
             $codecatalognew = ORM::factory('codecatalog');
             $codecatalognew->name = $data['newtext'];
             $codecatalognew->user_id = $this->user->id;
             $codecatalognew->insert_as_last_child($data['category']);
             
             $cat_new = ORM::factory('codecatalog')->where('name', '=', $data['newtext'])->find();
             $cat_id = $cat_new->id;
         }
         $code->cat_id = $cat_id;

          try {
		$code -> save();
		$this->request->redirect('code/usercode/0');
	  }
          catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
          }

        }
        $count_all = ORM::factory('code')
				->where('user_id', '=', $this->user->id)
				->count_all();
				
        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))
		->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));
        $mycode = ORM::factory('code')
                ->where('user_id', '=', $this->user->id)
                ->limit ($pagination->items_per_page)
                ->offset($pagination->offset)
                ->order_by('id', 'DESC')
                ->find_all();
        
        $categories = ORM::factory('codecatalog');
        $categories = $categories->fulltree()->as_array();
	$cat = array();
        $subcat = array();
	foreach($categories as $index => $categorie){
	 $cat[$categorie->root->id] = $categorie->root->name;
	}
        $content_shablon = View::factory('code/v_usercatalog_shablon')
                   ->bind('mycode', $mycode);
        $content = View::factory('code/v_usercode')
	               ->bind('data', $data)
	               ->bind('content_shablon', $content_shablon)
                       ->bind('cat', $cat)
                       ->bind('mycode', $mycode)
                       ->bind('subcat', $subcat)
                       ->bind('pagination', $pagination)
		       ->bind('errors', $errors);
        $this->template->title = 'Мой код';
        $this->template->site_name = 'Мой код';
        $this->template->block_center = array($content);
	}
 public function action_catalogredact() {
	$id = $this->request->param('id');		
	$products = ORM::factory('codecatalog', $id)
                  ->where('user_id', '=', $this->user->id);
         if(isset($_POST['submit'])){
                    $data = Arr::extract($_POST, array(
				'category', 
				'name'));
            $codecat = ORM::factory('codecatalog', $id)->where('user_id', '=', $this->user->id);
            $codecat->name = $data['name'];
            $codecat->parent_id = $data['category'];
          try {
		$codecat -> save();
	        $this->request->redirect('code/usercode/'.$id.'/catalogredact');
	  }
          catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
          }
         }
         
        $mycode = ORM::factory('code')
                ->where('user_id', '=', $this->user->id)
                ->and_where('cat_id', '=', $id)
                ->find_all();
        $categories = ORM::factory('codecatalog');
        $categories = $categories->fulltree()->as_array();
	$cat = array();
	foreach($categories as $index => $categorie){
	 $cat[$categorie->root->id] = $categorie->root->name;
	}
        $data = array();
        $data['name'] = $products->name;
        $data['category'] = $products->parent_id;
        $content_shablon = View::factory('code/v_usercatalog_shablon')
                   ->bind('mycode', $mycode);
        $content = View::factory('code/v_usercatalog')
                       ->bind('data', $data)
                       ->bind('cat', $cat)
                       ->bind('content_shablon', $content_shablon)
                       ->bind('id', $id)
                       ->bind('errors', $errors);
        $this->template->block_center = array($content);
 }
 
 public function action_delete() {
	$id = $this->request->param('id');		
	$products = ORM::factory('code', $id)->where('user_id', '=', $this->user->id);
        if($products->loaded()){
       	 $products->delete();
        }
	$this->request->redirect('code/usercode/0');
 }
 public function action_edit() {
       $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
       $id = $this->request->param('id');
       $cat_bot = ORM::factory('code')
		       ->where('user_id', '=', $this->user->id)
                       ->and_where('id', '=', $id)
                       ->find();
       $data = $cat_bot->as_array();
       $data['opisanie'] = htmlspecialchars_decode($data['opisanie']);
       $data['code'] = htmlspecialchars_decode($data['code']);
        if (isset($_POST['submit'])) {
          $data = Arr::extract($_POST, array(
				'opisanie', 
				'code'));
          $cat_bot->opisanie = $data['opisanie'];
          $cat_bot->code = htmlspecialchars($data['code']);
            try {
	     $cat_bot -> save();
	     $this->request->redirect('code/usercode/'.$cat_bot->cat_id.'/catalogredact');
	    }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }
        $content = View::factory('code/v_code_edit')
		           ->bind('data', $data)
		           ->bind('errors', $errors);
        // Выводим в шаблон
        $this->template->title = 'Редактирование';
        $this->template->site_name = 'Редактирование';
        $this->template->block_center = array($content);
 }
 public function action_show() {
	$id = $this->request->param('id');
	$products = ORM::factory('code', $id)
	         ->where('user_id', '=', $this->user->id);
	$products->showhide = 'show';
	$products->save();
	$this->request->redirect('code/usercode/0');
}
public function action_hide() {
	$id = $this->request->param('id');
	$products = ORM::factory('code', $id)
                  ->where('user_id', '=', $this->user->id);
	$products->showhide = 'hide';
	$products->save();
	$this->request->redirect('code/usercode/0');
}
}