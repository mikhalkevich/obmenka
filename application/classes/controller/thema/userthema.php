<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Thema_Userthema extends Controller_Auth_Account {

    public function before(){
        parent::before(); 
    }

     public function action_index() {
        $this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
        $this->template->scripts[] = 'media/js/upload.js';
        $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
        $cat_all = ORM::factory('thema')
                ->where('parent_id', '=', '0')
                ->find_all();
        if($cat_all){
		$cat_all_arr = "";
		foreach($cat_all as $cat_one){
		 $cat_all_arr .= "'".$cat_one->name."', ";
		}
        }
       if (isset($_POST['submit'])) {
           $data = Arr::extract($_POST, array('name', 'statia', 'name_image', 'video'));
           $data['name'] = @ereg_replace("script", "<sapn>script</span>", $data['name']);
           $data['name_image'] = @ereg_replace("script", "<sapn>script</span>", $data['name_image']);
           
                        $im_db = ORM::factory('thema');
                        $im_db->user_id = $this->user->id;
                        $im_db->name = $data['name'];
                        $im_db->lastvisit = date('Y-m-d h:i:s');
                        $im_db->putdate = date('Y-m-d');
            try {
                $allready_ext = ORM::factory('thema')
                             ->where('name', '=', $data['name'])
                             ->find();
                if($allready_ext->id){
                   $im_db = ORM::factory('thema', $allready_ext->id);
                   $im_db->lastvisit = date('Y-m-d h:i:s');
                   $im_db->save();
                }else{
                   $im_db->make_root(); 
                }
                // добавляем статью
                if($data['statia'] != ''){
                   $data['statia'] = @ereg_replace("script", "<sapn>script</span>", $data['statia']);
                   $blog = ORM::factory('themablog');
                   $blog->thema_id = $allready_ext->id;
                   $blog->user_id = $this->user->id;
                   $blog->putdate = date('Y-m-d');
                   $blog->showhide = 'show';
                   $blog->body=$data['statia'];
                   $blog->razdel = 'Статья';
                   $blog->save();
                }

               if($data['video'] != ''){
                   $data['video'] = @ereg_replace("script", "<sapn>script</span>", $data['video']);
                   $blog = ORM::factory('themablog');
                   $blog->thema_id = $allready_ext->id;
                   $blog->user_id = $this->user->id;
                   $blog->putdate = date('Y-m-d');
                   $blog->showhide = 'show';
                   $blog->body=$data['video'];
                   $blog->razdel = 'Видео';
                   $blog->save();
                }
                // добавляем изображения
                if (!empty($_FILES['images']['name'][0]))
                {
                try {
                    foreach ($_FILES['images']['tmp_name'] as $image)
                     {
                      $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/content/".$allready_ext->id."/";
                         if (!is_dir($dir)) {
                          @mkdir($dir, 0777);
                         }
                          $filename = $this->_upload_img($image, 'media/uploads/content/'.$allready_ext->id);
                          $im = Image::factory('media/uploads/content/'.$allready_ext->id."/small_".$filename, $driver = NULL)
                                ->crop(200, 200)
                                ->save();
                          $blog_pic = ORM::factory('themablog');
                          $blog_pic->thema_id = $allready_ext->id;
                          $blog_pic->user_id = $this->user->id;
                          $blog_pic->putdate = date('Y-m-d');
                          $blog_pic->showhide = 'show';
                          $blog_pic->body=$filename;
                          $blog_pic->razdel = 'Изображение';
                          $blog_pic->save();
                     }
                 }
                 catch (ORM_Validation_Exception $e) {
                 exit('Ошибка добавления изображения... Попробуйте еще');
                 }
                }
                $this->request->redirect('thema/userthema');
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
	   }
        $count_all = ORM::factory('themablog')
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
        $mycode = ORM::factory('themablog')
                ->where('user_id', '=', $this->user->id)
                ->limit ($pagination->items_per_page)
                ->offset($pagination->offset)
                ->order_by('id', 'DESC')
                ->find_all();
        $content = View::factory('thema/v_user_themas')
                 ->bind('cat_all_arr', $cat_all_arr)
                 ->bind('data', $data)
                 ->bind('pagination', $pagination)
                 ->bind('mycode', $mycode)
                 ->bind('errors', $errors);
        
        // Выводим в шаблон
        $this->template->title = 'Рyбрикация';
        $this->template->site_name = 'Рyбрикация';
        $this->template->block_center = array($content);
    }
     public function action_delete() {
	$id = $this->request->param('id');		
	$products = ORM::factory('themablog', $id)->where('user_id', '=', $this->user->id);
        if($products->loaded()){
            if($products->razdel == 'Изображение') {
                $dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/content/".$products->thema_id."/";
	        $pic_big = $dir.$products->body;
	        $pic_small = $dir."small_".$products->body;
                @unlink($pic_small);
	        @unlink($pic_big);
            }
       	 $products->delete();
        }
	$this->request->redirect('thema/userthema/0');
 }
}