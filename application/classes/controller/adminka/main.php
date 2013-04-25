<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Main extends Controller_Base {
     public function before(){
        parent::before();
		$this->template->styles[] =	'media/css/adminka.css';
        if (!$this->auth->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }
        $widget_leftmenu = REQUEST::factory('widgets/menuleftsell/sell')->execute();
		$this->template->block_left  = array($widget_leftmenu);
        $menu=View::factory('adminka/v_utils_menu');
        $this->template->block_right = array($menu);
        $this->template->title = 'Добро пожаловать в админку!';
        $this->template->site_name = 'Система администрирования MIKHALKEVICH 2.0';
        $this->template->site_description = 'Система администрирования обслуживается и поддерживается Mikhalkevich.<br /> По всем вопросам обращаться по тел. 8(029)-763-93-82, e-mail: <a href="mailto:mikhalkevich@ya.ru">mikhalkevich@ya.ru</a>';
    }
	
 public function action_index() {
     $this->template->scripts[] = 'media/js/account.js';
 	 $count_all = ORM::factory('hotelki')
				->where('sell_obmen', '=', 'sell')
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
        $hotelka = ORM::factory('hotelki')
                 ->where('sell_obmen', '=', 'sell')
                 ->limit ($pagination->items_per_page)
                 ->offset($pagination->offset)
                 ->order_by('id', 'DESC')
                 ->find_all();
        $content=View::factory('adminka/v_main')
                 ->bind('pagination', $pagination)
                 ->bind('hotelki',$hotelka);
        $this->template->block_center=array($content);
    }
}
