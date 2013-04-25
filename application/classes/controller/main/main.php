<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Main_Main extends Controller_Index {

    public function action_users() {
        $user_skill = ORM::factory('userskill')->find_all();
	$count_all = ORM::factory('user')->count_all();	
	$pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))->route_params(array(
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id')
	));
	$users = ORM::factory('usersimage') 
	       ->limit($pagination->items_per_page)
	       ->offset($pagination->offset)
               ->order_by('last_login', 'DESC')
	       ->find_all();
        if(Auth::instance()->logged_in()) {
            $me = $this->user->id;
        } else {
            $me = 0;
        }
	$content = View::factory('main/v_users', array(
		'users'=>$users,
		'pagination' => $pagination,
                'me' => $me,
                'user_skill'=>$user_skill,
	));
        $this->template->title = 'Пользователи';
        $this->template->site_name = 'Пользователи';
        $this->template->block_center = array($content);
        
         
	$id = $this->request->param('id');
	$userone = ORM::factory('usersimage') 
	        ->where("id", "=", $id)
		->find();
				
	if(Auth::instance()->logged_in()) {
		 $user_for = View::factory('main/v_users', array(
		 'user_id'=>$id, 
		 'sender'=>$this->user->id)
		 )->bind('dialog', $dialog)
		  ->bind('user1', $user1)
		  ->bind('user2', $user2)
                  ->bind('errors', $errors);
		$user1 = ORM::factory('usersimage')
					->where('id', '=', $this->user->id)
					->find_all();
		$user2 = ORM::factory('usersimage')
					->where('id', '=', $id)
					->find_all();
		$dialog = ORM::factory('msg')
			->where('id_to', '=', $id)
			->and_where('id_from', '=', $this->user->id)
			->or_where('id_from', '=', $id)
			->and_where('id_to', '=', $this->user->id)
			->order_by('putdate', 'DESC')
			->find_all();
        }
		
		if(isset($_POST['add'])){
		$msg = ORM::factory('msg');
		$data = Arr::extract($_POST, array('msg'));
		$msg->msg = $data['msg'];
		$msg->putdate = date('Y-m-d H:i:s');
		$msg->id_from = $this->user->id;
		$msg->id_to = $id;
		 try{
		  if ($this->auth->logged_in()) {
			  $msg->save();
			}
			$this->request->redirect('users/'.$id);
		 }catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
                
         }
		}
	
	}

    public function action_userone() {
        $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
        $this->template->scripts[] = 'media/js/jquery.jqplot.min.js';
        $this->template->scripts[] = 'media/js/jqplot.pieRenderer.min.js';
        $this->template->styles[] = 'media/js/jquery.jqplot.min.css';
        $id = $this->request->param('id');
        
        if(isset($_POST['submit'])){
	    $data = Arr::extract($_POST, array('about',));
            $data['about'] = @ereg_replace("script", "<sapn>script</span>", $data['about']);
            $msg = ORM::factory('usercomment');
            $msg->about=$data['about'];
            $msg->user_id=$id;
            $msg->user_commentator_id=$this->user->id;
            $msg->putdate=date('y-m-d');
            try {
               $msg->save();
               $this->request->redirect('userone/'.$id);
             }catch (ORM_Validation_Exception $e) {
                   $errors = $e->errors('validation');
             }
        }
        
	$userone = ORM::factory('usersimage') 
	         ->where("id", "=", $id)
		 ->find();
	if(Auth::instance()->logged_in()) {
	$send = ORM::factory('reiting') 
	       ->where("user_id", "=", $id)
		   ->and_where('user_sender_id', '=', $this->user->id)
		   ->and_where('putdate', '=', date('Y-m-d'))
		   ->find();
        $sender = $send->id;
	  if($this->user->id == $id){
		$sender = 'i_am';
	   }	
	}
	$plus = ORM::factory('reiting') 
	       ->where("user_id", "=", $id)
		   ->and_where('plus_minus', "=", 'plus')
		   ->count_all();
	$minus = ORM::factory('reiting') 
	       ->where("user_id", "=", $id)
		   ->and_where('plus_minus', "=", 'minus')
		   ->count_all();
 
                if(Auth::instance()->logged_in()) {
                    $msg = ORM::factory('usercomment')
                         ->where('user_id', '=', $id)->find_all();
                         $user_for = View::factory('main/v_user_for_regist', array(
                         'user_id'=>$id, 
                         'first_name' => $userone->first_name, 
                         'sender'=>$sender, 
                         'plus'=>$plus, 
                         'minus'=>$minus)
                         )->bind('errors',$errors)
                          ->bind('msg', $msg);
                }
		else {
		 $user_for = View::factory('main/v_user_for_none_regist');
		}
	$id = $this->request->param('id');
        $user_skill = ORM::factory('userskill')
                    ->where('user_id', '=', $id)
                    ->find_all();
        $hotnew = ORM::factory('hotelkinew')
                    ->where('user_id', '=', $id)
                    ->find_all();
	$content = View::factory('main/v_userone', array(
		'usermore'=>$userone,
		'hotnew'=>$hotnew,
                'user_skill'=>$user_skill,
	));
        $this->template->title = 'Страница пользователя';
        $this->template->site_name = 'Страница пользователя';
        $this->template->block_center = array($content,  $user_for);
	}
	
public function action_msg(){
	$this->template->scripts[] = 'media/ckeditor/ckeditor.js';
	$id = $this->request->param('id');
        
	$userone = ORM::factory('usersimage') 
	       ->where("id", "=", $id)
	       ->find();
				
	if(Auth::instance()->logged_in()) {
		$user1 = ORM::factory('usersimage')
					->where('id', '=', $this->user->id)
					->find_all();
		$user2 = ORM::factory('usersimage')
					->where('id', '=', $id)
					->find_all();
                
            $count_all = ORM::factory('msg')
                ->where('id_to', '=', $id)
		->and_where('id_from', '=', $this->user->id)
		->or_where('id_from', '=', $id)
		->and_where('id_to', '=', $this->user->id)
		->order_by('putdate', 'DESC')
                ->count_all();	
            $pagination = Pagination::factory(array(
                'total_items' => $count_all,
            ))->route_params(array(
                      'controller' => Request::current()->controller(),
                      'action' => Request::current()->action(),
                      'id'=>$this->request->param('id')
            ));
		$dialog = ORM::factory('msg')
			->where('id_to', '=', $id)
			->and_where('id_from', '=', $this->user->id)
			->or_where('id_from', '=', $id)
			->and_where('id_to', '=', $this->user->id)
                        ->limit ($pagination->items_per_page)
                        ->offset($pagination->offset)
			->order_by('putdate', 'DESC')
			->find_all();
		 $user_for = View::factory('main/v_user_msg', array(
		 'user_id'=>$id, 
		 'sender'=>$this->user->id)
		 )->bind('dialog', $dialog)
		  ->bind('user1', $user1)
		  ->bind('user2', $user2)
		  ->bind('pagination', $pagination)
                  ->bind('errors', $errors);
        }
		else {
		 $user_for = View::factory('main/v_user_for_none_regist');
		}
		if(isset($_POST['add'])){
		$msg = ORM::factory('msg');
		$data = Arr::extract($_POST, array('msg',));
                $data['msg'] = @ereg_replace("script", "<sapn>script</span>", $data['msg']);
		$msg->msg = $data['msg'];
		$msg->putdate = date('Y-m-d H:i:s');
		$msg->id_from = $this->user->id;
		$msg->id_to = $id;
		 try{
		  if ($this->auth->logged_in()) {
			  $msg->save();
             $to = $msg->user_to->email;
             $fio_to = $msg->user_to->first_name;
             $fio_from = $msg->user->first_name;
             $subject = $fio_to. ' Вам сообщение с obmenka.by';
             $message = '<p>'. $fio_from. ' оставил вам сообщение на obmenka.by. 
                  Для просмотра сообщения перейдите по ссылке http://obmenka.by/auth/login</p>
                 <p>Ваш логин для входа на сайт: <b>'.$msg->user_to->username.'</b></p>
                 <p>А вот ваш пароль никому, кроме вас не известен, даже администрации сайта.
                 Если вы забыли свой пароль, то сможете легко его восстановить по своему логину</p>';
             $headers = 'From: vestkul@tut.by' . "\r\n" .
                        'Reply-To: vestkul@tut.by' . "\r\n" .
	                'Content-Type: text/html; charset=utf-8' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
             @mail($to, $subject, $message, $headers);
			}
		  $this->request->redirect('msg/'.$id);
		 }catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
                
         }
		}
	$content = View::factory('main/v_userone', array(
		'usermore'=>$userone,
		'user_skill'=>NULL,
	))->bind('errors', $errors);
	$this->template->block_center = array($content, $user_for);
}
asdf
public function action_addFriend(){
	$friend_id = $this->request->param('id');
        if($friend_id){
            if(Auth::instance()->logged_in()) {
                $addfriend = ORM::factory('friend');
                $addfriend -> user_id = $this->user->id;
                $addfriend -> friend_id = $friend_id;
                $addfriend -> putdate = date('y-m-d');
                $addfriend -> save();
                $this->request->redirect('account/friends/0');
            } else {
                $this->template->site_name = "Только для зарегистрированных пользователей";
                $this->template->block_center = array($content="Только для зарегистрированных пользователей");
            }
        }
}

}