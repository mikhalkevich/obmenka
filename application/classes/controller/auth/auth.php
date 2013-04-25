<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Auth_Auth extends Controller_Index {


    public function action_index() {
        $this->action_login();
    }

    public function action_login() {
  if(Auth::instance()->logged_in()) {
            $this->request->redirect('account/cabinet');
        }

        if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = $this->auth->login($data['username'], $data['password'], true);

            if ($status){
                $this->request->redirect('account/more');
            }
            else {
                $errors = array(Kohana::message('auth/user', 'no_user'));
            }
        }

        $content = View::factory('auth/v_auth_login')
                    ->bind('errors', $errors)
                    ->bind('data', $data);
        
        // Выводим в шаблон
        $this->template->site_title = 'Вход';
        $this->template->block_center = array($content);
    }

    public function action_register() {

        if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'first_name', 'password_confirm', 'email'));
            $users = ORM::factory('user');

            try {
                $users->create_user($_POST, array(
                    'username',
                    'first_name',
                    'password',
                    'email',
                ));

                $role = ORM::factory('role')->where('name', '=', 'login')->find();
                $users->add('roles', $role);
                $this->action_login();
                $this->request->redirect('login');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('auth');
            }
        }

        $content = View::factory('auth/v_auth_register')
                            ->bind('errors', $errors)
                            ->bind('data', $data);

        // Выводим в шаблон
        $this->template->site_title = 'Регистрация';
        $this->template->block_center =  array($content);
    }

    public function action_logout() {
	 if(Auth::instance()->logout()) {
        $this->request->redirect('/');
	 }
    }

    public function action_remember() {
     if (isset($_POST['submit'])){
          $data = Arr::extract($_POST, array('username', 'first_name',));
           
          $users = ORM::factory('user')->where('username', '=', $data['username'])->find();
          
                  // Генерируем случайное название
        $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';

        $filename = '';
        for($i = 0; $i < 5; $i++)
        {
            $filename .= rand(1, strlen($symbols));
        }
        $_POST['password'] = $filename;
        $_POST['password_confirm'] = $filename;

            try {
             $to = $users->email;
             $login = $users->username;
             $subject = 'Новый пароль для obmenka.by';
             $users->update_user($_POST, array(
                                    'password',
                              ));
             $message = '
                  <p>Логин: <b>'.$login. '</b></p>
                  <p>Ваш новый пароль: <b>'.$filename. '</b></p>
                  <p><a href="http://obmenka.by/auth/login">Вход на сайт</a></p>
                  <p><em>Администрация сайта obmenka.by</em></p>';
             $headers = 'From: vestkul@tut.by' . "\r\n" .
                        'Reply-To: vestkul@tut.by' . "\r\n" .
	                'Content-Type: text/html; charset=utf-8' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
             mail($to, $subject, $message, $headers);
             $this->request->redirect('auth/rememberend');

            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('auth');
            }
        }
        $content = View::factory('auth/v_auth_remember')
                            ->bind('errors', $errors)
                            ->bind('data', $data);

        // Выводим в шаблон
        $this->template->site_title = 'Восстановить пароль';
        $this->template->block_center =  array($content);
    }
    public function action_rememberend(){
        $blago = ORM::factory('maintext')
                          ->where('id', '=', 2)
	                  ->find();
       	$content = View::factory('main/v_maintext', array('blago'=>$blago));
        $this->template->title = 'Восстановление пароля';
        $this->template->site_name = 'Восстановление пароля';
        $this->template->block_center = array($content); 
    } 

}
