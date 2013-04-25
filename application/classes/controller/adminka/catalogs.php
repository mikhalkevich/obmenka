<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Catalogs extends Controller_Adminka_Main {
    public function before(){
        parent::before();
    }
 public function action_index() {
  $cat = ORM::factory('catalog');
  $cat_number = Arr::get($_POST, 'cat_number');

        if (isset($_POST['add']))
        {
            $name = Arr::get($_POST, 'name');

            $cat->name = $name;

            try
            {
                if (!$cat_number)
                {
                    $cat->make_root();
                }
                else
                {
                    $cat->insert_as_last_child($cat_number);
                }

                $this->request->redirect('adminka/catalogs');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
        }

        if (isset($_POST['delete']))
        {
            if ($cat_number)
            {
                ORM::factory('catalog', $cat_number)->delete();
            }

            $this->request->redirect('adminka/catalogs');
        }
 if (isset($_POST['vip']))
        {
         $this->request->redirect('adminka/catalogs/vipadd/'.$cat_number);
        }
        $menu = View::factory('adminka/catalogs/v_catalogs_menu', array('action'=>'index'));
        $cat = $cat->fulltree()->as_array();
        $content=View::factory('adminka/catalogs/v_catalogs')
		        ->bind('cat',$cat)
                        ->bind('menu',$menu)
		        ->bind('errors',$errors);
        $this->template->block_center=array($content);
    }
    
    public function action_obmen(){
     $cat = ORM::factory('catalogobmen');
     $cat_number = Arr::get($_POST, 'cat_number');
       if (isset($_POST['add']))
        {
            $name = Arr::get($_POST, 'name');

            $cat->name = $name;

            try
            {
                if (!$cat_number)
                {
                    $cat->make_root();
                }
                else
                {
                    $cat->insert_as_last_child($cat_number);
                }

                $this->request->redirect('adminka/catalogs/obmen');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors('validation');
            }
        }
        
         if (isset($_POST['delete']))
        {
            if ($cat_number)
            {
                ORM::factory('catalogobmen', $cat_number)->delete();
            }

            $this->request->redirect('adminka/catalogs');
        }
        
        $menu = View::factory('adminka/catalogs/v_catalogs_menu', array('action'=>'obmen'));
        $cat = $cat->fulltree()->as_array();
        $content=View::factory('adminka/catalogs/v_catalogs_obmen')
		        ->bind('cat',$cat)
                        ->bind('menu',$menu)
		        ->bind('errors',$errors);
        $this->template->block_center=array($content);
    }
    
    public function action_vipadd(){
		$this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
		$this->template->scripts[] = 'media/js/upload_one.js';
        $id = $this->request->param('id');
        $cat = ORM::factory('catalog')
             ->where('id', '=', $id)
             ->find();
        $cat_vip = ORM::factory('catalogspicture')
             ->where('id_category', '=', $id)
             ->find();
 
      if(isset($_FILES)){
          
         if (!empty($_FILES['images']['name'][0])){
               foreach ($_FILES['images']['tmp_name'] as $image){
                              if($cat_vip -> picture) {
					@unlink('media/images/'.$cat_vip -> picture);
					@unlink('media/images/small_'.$cat_vip -> picture);
				}
                   $filename = $this->_upload_img($image, 'media/images/');
                        // Запись в БД
                        $vip_cat = ORM::factory('catalogspicture', $cat_vip->id);
                        $vip_cat -> id_category = $id;
                        $vip_cat -> picture = $filename;
                        $vip_cat -> showhide = 'show';
			try{
                        $vip_cat -> save();		  
			$this->request->redirect('adminka/catalogs');
			}catch (ORM_Validation_Exception $e) {				
                          $errors = $e->errors('validation');
                        }
                }
	  }
      }
        $menu = View::factory('adminka/catalogs/v_catalogs_menu', array('action'=>'vipadd'));
        $content=View::factory('adminka/catalogs/v_catalogs_vip')
		        ->bind('cat',$cat)
                        ->bind('cat_vip',$cat_vip)
                        ->bind('menu',$menu)
		        ->bind('errors',$errors);
        $this->template->block_center=array($content);
    }
    public function action_vipall(){
    $cat_vip_all = ORM::factory('catalogspicture')->find_all();
        $menu = View::factory('adminka/catalogs/v_catalogs_menu', array('action'=>'vip'));
        $content=View::factory('adminka/catalogs/v_catalogs_vipall')
                        ->bind('cat_vip_all',$cat_vip_all)
                        ->bind('menu',$menu)
		        ->bind('errors',$errors);
       $this->template->block_center=array($content);
    }
    public function action_vipdell(){
        $cat_vip = ORM::factory('catalogspicture')
             ->where('id', '=', $this->request->param('id'))
             ->find();
        if($cat_vip->picture){
           @unlink('media/images/'.$cat_vip -> picture);
           @unlink('media/images/small_'.$cat_vip -> picture);
        }
     $vip_cat = ORM::factory('catalogspicture', $this->request->param('id'))->delete();
     $this->request->redirect('adminka/catalogs/vipall');
    }

}
