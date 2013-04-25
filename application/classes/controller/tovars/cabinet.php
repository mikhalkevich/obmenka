<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Tovars_Cabinet extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

    public function action_index() {
    $check=false;
        $this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
        $this->template->scripts[] = 'media/js/upload_one.js';
        $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
        $products = ORM::factory('product');
    if (isset($_POST['submit'])) {
      $data = Arr::extract($_POST, array(
					 'category', 
					 'subcategory_id', 
					 'name', 
					 'description', 
					 'wishes', 
					 'gift'
					 ));
			$filename = '';
			if (!empty($_FILES['images']['name'][0]))
			{ 
                            try {
                                    foreach ($_FILES['images']['tmp_name'] as $image)
                                    {
                                     $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/tovars/".$this->user->id."/";
                                     if (!is_dir($dir)) {
                                       @mkdir($dir, 0777);
                                     }
                                      $filename = $this->_upload_img($image, 'media/uploads/tovars/'.$this->user->id);
                                    }
                             }
                             catch (ORM_Validation_Exception $e) {
                             exit('Ошибка добавления изображения... Попробуйте еще');
                             }
			}					
	    
				$products -> user_id = $this->user->id;
				$products -> subcategory_id = $data['subcategory_id'];
				$products -> name = $data['name'];
				$products -> description = $data['description'];
			if($filename) {
				$products -> products_pic = $this->user->id."/".$filename;
				$products -> products_pic_small = $this->user->id."/small_".$filename;
			}
				$products -> wishes = $data['wishes'];
				if($data['gift'] == true) {
				  $products -> gift = 'yes';
				  $check = true;
				} else {
				  $products -> gift = 'no';
				}
				$products -> vip = '1';
				$products -> put_date = date('Y-m-d');
			try {
			$products -> save();
			$this->request->redirect('tovars/managment');
			}
            catch (ORM_Validation_Exception $e) {
				if( $filename) {
					@unlink($dir.$filename);
					@unlink($dir."small_".$filename);
				}
                $errors = $e->errors('validation');
            }
		}
 
			  
	 $categories = ORM::factory('catalogobmen');
	 $categories = $categories->fulltree()->as_array();
	$cat = array();
	foreach($categories as $index => $categorie){
	 $cat[$categorie->root->id] = $categorie->root->name;
	}
	$subcat = array();
	if(isset($data['catalog'])){
		$subcategories = ORM::factory('catalogobmen')
			->where('parent_id', '=', 0);
		$subcategories = $subcategories->fulltree()->as_array();
		foreach($subcategories as $subindex => $subcategorie){
		 $subcat[$subcategorie->id] = $subcategorie->name;
		}
	}
      $menu = View::factory('account/v_account_hotelki_menu', array('controller'=>'tovars/cabinet'));
      $content = View::factory('tovars/v_cabinet', array(
                                            'menu'=>$menu, 
                                            'cat'=>$cat, 
                                            'check'=>$check, 
					    'subcat'=>$subcat))
	                   ->bind('data', $data)
		           ->bind('errors', $errors);
        $this->template->title = 'Мои товары';
        $this->template->site_name = 'Мои товары';
        $this->template->block_center = array($content);
   }
}