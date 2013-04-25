<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Account extends Controller_Index {

    public function before(){
        parent::before();
        if (!$this->auth->logged_in()) {
            $this->request->redirect('login');
        }
        $content = View::factory('account/v_account_menu');
        $this->template->block_left=$content;
        $this->template->styles[] =  'media/css/style_account.css';
    }

    public function action_account() {
        
        $content = View::factory('account/v_account_index');
                        

        // Выводим в шаблон
        $this->template->title = 'Личный кабинет';
        $this->template->block_center = $content;
      //  $content=View::factory('account/v_account_login_menu');	
       // $this->template->block_login=$content;
    }

    public function action_orders() {
        
        $content = View::factory('account/v_account_orders');
        
        // Выводим в шаблон
        $this->template->title = 'Заказы';
        $this->template->site_name = 'Заказы';
        $this->template->block_center = $content;
    }

    public function action_profile() {
        if (isset($_POST['submit'])) {
                    $users = ORM::factory('user');

                    try {
                        $users->where('id', '=', $this->user->id)
                                ->find()
                                ->update_user($_POST, array(
                                    'username',
                                    'first_name',
                                    'email',
                                ));

                        $this->request->redirect('account/profile');
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
        $this->template->block_center = $content;
    }

}