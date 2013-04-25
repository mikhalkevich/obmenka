<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Auth_Account extends Controller_Index {

    public function before(){
        parent::before();
        if (!$this->auth->logged_in()) {
            $this->request->redirect('auth/login');
        }
        $widget_au = REQUEST::factory('widgets/menuaccount/index')->execute();
        $this->template->block_right = array("Кабинет пользователя" => $widget_au);
    }

    public function action_cabinet() {
        $sell_obmen = $this->request->param('id');
        $hotelki = ORM::factory('hotelki')
		          ->where('user_id', '=', $this->user->id)
                          ->where('sell_obmen', '=', $sell_obmen)
			  ->find_all();
        $menu = View::factory('account/v_account_hotelki_menu', array('controller'=>'account/cabinet/'.$sell_obmen))
                             ->bind('sell_obmen', $sell_obmen);
        
        if($sell_obmen == 'sell') {
            $content = View::factory('account/v_account_index_sell')
		              ->bind('hotelki', $hotelki)
		              ->bind('menu', $menu);
        } elseif($sell_obmen == 'obmen') {
            $content = View::factory('account/v_account_index')
		              ->bind('hotelki', $hotelki)
		              ->bind('menu', $menu); 
        } else {
            $hotelki_obmen_darom_all = ORM::factory('hotelki')
		          ->where('user_id', '=', $this->user->id)
                          ->where('sell_obmen', '=', 'obmen')
			  ->find_all();
            $hot_arr = array();
            $prod_arr = array();
            $prod_hotelka_fio = array();
            foreach($hotelki_obmen_darom_all as $hot_one):
                if($hot_one->product->gift == 'yes'):
                 $hot_arr[] = $hot_one->product->id;
                endif;
            endforeach;
            $hot_darom_all = count($hot_arr);
            $my_products = ORM::factory('product')
 	          ->where('user_id', '=', $this->user->id)		  
                  ->find_all();
            foreach($my_products as $my_product):
                  foreach($my_product->hotelka->find_all() as $my_product_hotelka):
                    $prod_arr[] = $my_product_hotelka->id;
                    $prod_hotelka_fio[] = $my_product_hotelka->user;
                 endforeach;
            endforeach;
            $my_tov_hotelka = count($prod_arr);
            $hotelki_sell_all = ORM::factory('hotelki')
		          ->where('user_id', '=', $this->user->id)
                          ->where('sell_obmen', '=', 'sell')
			  ->count_all();
            $hotelki_obmen_all = ORM::factory('hotelki')
		          ->where('user_id', '=', $this->user->id)
                          ->where('sell_obmen', '=', 'obmen')
			  ->count_all();
            // формируем постраничную навигацию
            $count_all = ORM::factory('hotelkinew')->count_all();
            $pagination = Pagination::factory(array(
            'total_items' => $count_all,
             )) ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));
            	$hot_new_all = ORM::factory('hotelkinew')
                    -> where('user_id', '=', $this->user->id)	
                    -> limit ($pagination->items_per_page)
                    -> offset($pagination->offset)
                    -> order_by('id', 'DESC')
                    -> find_all();
            // обработка
             if (isset($_POST['tovar_send'])) {
                    $data = Arr::extract($_POST, array(
					 'wont', 
					 'about'
					 ));
                   $data['about'] = @ereg_replace("script", "<sapn>script</span>", $data['about']);
                   $data['wont'] = @ereg_replace("script", "<sapn>script</span>", $data['wont']);
                   $hotelka_new = ORM::factory('hotelkinew');
                   $hotelka_new -> user_id = $this->user->id;
                   $hotelka_new -> name = $data['wont'];
                   $hotelka_new -> body = $data['about'];
                   $hotelka_new -> putdate = date('y-m-d');
                   try {
                    $hotelka_new -> save();  
                    $this->request->redirect('account/cabinet/0');
                   }
                   catch (ORM_Validation_Exception $e) {
                      $errors = $e->errors('validation');
                   }
          }
            $content = View::factory('account/v_cabinet')
		              ->bind('hot_darom_all', $hot_darom_all)
		              ->bind('hotelki_sell_all', $hotelki_sell_all)
		              ->bind('hotelki_obmen_all', $hotelki_obmen_all)
		              ->bind('my_tov_hotelka', $my_tov_hotelka)
		              ->bind('my_products', $my_products)
		              ->bind('prod_hotelka_fio', $prod_hotelka_fio)
		              ->bind('hot_new_all', $hot_new_all)
		              ->bind('pagination', $pagination)
		              ->bind('errors', $errors)
		              ->bind('menu', $menu);
        }
         
        // Выводим в шаблон
        $this->template->title = 'Я хочу';
        $this->template->site_name = 'Я хочу';
        $this->template->block_center = array($content);
    }
	
	  public function action_abcabinet() {
        $hotelki = ORM::factory('abonement')
		          ->where('user_id', '=', $this->user->id)
			  ->find_all();
		
        $content = View::factory('account/v_account_abon_index')
		              ->bind('abonement', $hotelki);
                        

        // Выводим в шаблон
        $this->template->title = 'Личный кабинет';
        $this->template->site_name = 'Личный кабинет';
        $this->template->block_center = array($content);
	}	
	



    public function action_profile() {
        if (isset($_POST['submit'])) {
                    $users = ORM::factory('user');

                    try {
                        $users->where('id', '=', $this->user->id)
                                ->find()
                                ->update_user($_POST, array(
                                    'password',
                                    'first_name',
                                    'email',
                                ));

                        $this->request->redirect('account/index');
                    }
                    catch (ORM_Validation_Exception $e) {
                        $errors = $e->errors('auth');
                    }
                }


        $content = View::factory('account/v_account_profile')
                        ->bind('user', $this->user)
                        ->bind('errors', $errors);

        // Выводим в шаблон
        $this->template->title = 'Профиль';
        $this->template->page_title = 'Профиль';
        $this->template->block_center = array($content);
    }
 public function action_more() {
        $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
        $this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
        $this->template->scripts[] = 'media/js/upload_one.js';
        $usermore = ORM::factory('usermore')
		       ->where('user_id', '=', $this->user->id)
                       ->find();
	$data = $usermore->as_array();
        if (isset($_POST['submit'])) {
		$filename = $data['pic'];
			if (!empty($_FILES['images']['name'][0]))
					{
					if( $data['pic']) {
					$file = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/users/";
					@unlink($file.$data['pic']);
					@unlink($file."small_".$data['pic']);
					}
					try {
						foreach ($_FILES['images']['tmp_name'] as $image)
						{
						
						  $filename = $this->_upload_img($image, 'media/uploads/users');
						}
					 }
					 catch (ORM_Validation_Exception $e) {
					 exit('Ошибка добавления изображения... Попробуйте еще');
 
					 }
					}					
				$usermore -> user_id = $this->user->id;
				$usermore -> skype = $_POST['skype'];
				$usermore -> phone = $_POST['phone'];
				$usermore -> city = $_POST['city'];
				$usermore -> daterod = $_POST['putdate'];
				$usermore -> moreinfo = $_POST['about'];
				$usermore -> pol = $_POST['pol'];
				$usermore -> pic = $filename;
			try {
			$usermore -> save();
			$this->request->redirect('account/cabinet');
			}
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
		}
        $content = View::factory('account/v_account_more')
		           ->bind('data', $data)
		           ->bind('errors', $errors);
        // Выводим в шаблон
        $this->template->title = 'Расширенный аккаунт';
        $this->template->site_name = 'Расширенный аккаунт';
        $this->template->block_center = array($content);
    }
       public function action_pismo() {
        $count_all = ORM::factory('msg')
                   ->where('id_to', '=', $this->user->id) 
                   ->count_all();	
	$pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))->route_params(array(
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
	));
        $user_msg = ORM::factory('msg')
                  ->where('id_to', '=', $this->user->id)
                  ->order_by('id', 'DESC')
                  ->limit($pagination->items_per_page)
	          ->offset($pagination->offset)
                  ->find_all();
        $content = View::factory('account/v_account_pismo')
		       ->bind('user_msg', $user_msg)
                       ->bind('pagination', $pagination);
        // Выводим в шаблон
        $this->template->title = 'Моя переписка с пользователями';
        $this->template->site_name = 'Моя переписка';
        $this->template->block_center = array($content);
       }
	
	//Удаление из хотелки
	public function action_deletehotelka() {
		$hot = $this->request->param('id');
		$prodt = ORM::factory('hotelki')
				  ->where('id', '=', $hot)
				  ->and_where('user_id', '=', $this->user->id)
				  ->find();
                $for_link = $prodt->sell_obmen;
		$prodt->delete();
	    $this->request->redirect('account/cabinet/'.$for_link);
	}
	
	//Удаление из абонемента
	public function action_deleteabonement() {
		$hot = $this->request->param('id');
		$prodt = ORM::factory('abonement')
				  ->where('id', '=', $hot)
				  ->and_where('user_id', '=', $this->user->id)
				  ->find();
		$prodt->delete();
	        $this->request->redirect('account/cabinet/'.$for_link);
	}
	public function action_friends() {
        $count_all = ORM::factory('friend')
                   ->where('user_id', '=', $this->user->id) 
                   ->count_all();	
	$pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))->route_params(array(
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
	));
		$friends = ORM::factory('friend')
				  ->where('user_id', '=', $this->user->id)
                                  ->order_by('id', 'DESC')
                                  ->limit($pagination->items_per_page)
	                          ->offset($pagination->offset)
				  ->find_all();
                $content = View::factory('account/v_account_friends')
                                  ->bind('friends', $friends)
                                  ->bind('pagination', $pagination);
                $this->template->block_center = array($content);
	}
}