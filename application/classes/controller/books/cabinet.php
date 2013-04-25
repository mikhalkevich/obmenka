<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Cabinet extends Controller_Auth_Account {

    public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleft/book')->execute();
		$this->template->block_left  = array($widget_leftmenu);
    }

 
    public function action_index() {
    $check=false;
        $this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
        $this->template->scripts[] = 'media/js/upload_one.js';
        $products = ORM::factory('book');
    if (isset($_POST['submit'])) {
      $data = Arr::extract($_POST, array(
									  'category', 
									  'subcategory_id', 
									  'name',
									  'author',
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
						 $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/books/".$this->user->id."/";
						 if (!is_dir($dir)) {
                          @mkdir($dir, 0777);
						 }
						  $filename = $this->_upload_img($image, 'media/uploads/books/'.$this->user->id);
						}
					 }
					 catch (ORM_Validation_Exception $e) {
					 exit('Ошибка добавления изображения... Попробуйте еще');
 
					 }
					}					
	    
				$products -> user_id = $this->user->id;
				$products -> subcategory_id = $data['subcategory_id'];
				$products -> name = $data['name'];
				$products -> author = $data['author'];
				$products -> description = $data['description'];
			if($filename) {
				$products -> picture = $this->user->id."/".$filename;
				$products -> picture_small = $this->user->id."/small_".$filename;
			}
				$products -> wishes = $data['wishes'];
				if($data['gift'] == true) {
				  $products -> gift = 'yes';
				  $check = true;
				} else {
				  $products -> gift = 'no';
				}
				$products -> vip = '1';
				$products -> putdate = date('Y-m-d');
			try {
			$products -> save();
			$this->request->redirect('books/managment');
			}
            catch (ORM_Validation_Exception $e) {
				if( $filename) {
					@unlink($dir.$filename);
					@unlink($dir."small_".$filename);
				}
                $errors = $e->errors('validation');
            }
		}
 
			  
	$categories = ORM::factory('bookscategorie')->find_all();
	$cat = array();
	foreach($categories as $index => $categorie){
	 $cat[$categorie->id] = $categorie->name;
	}
	
	$subcat = array();
	if(isset($data['bookscategory'])){
		$subcategories = ORM::factory('bookssubcategorie')
				->where('category_id', '=', $data['category'])
				->find_all();
		foreach($subcategories as $subindex => $subcategorie){
		 $subcat[$subcategorie->id] = $subcategorie->name;
		}
	}
$menu = View::factory('books/v_books_menu', array('controller'=>'cabinet'));
$content = View::factory('books/v_cabinet', array(
                                            'menu'=>$menu, 
                                            'cat'=>$cat, 
                                            'check'=>$check, 
											'subcat'=>$subcat))
	               ->bind('data', $data)
		           ->bind('errors', $errors);
        $this->template->title = 'Мои книги';
        $this->template->site_name = 'Мои книги';
        $this->template->block_center = array($content);
	}
}