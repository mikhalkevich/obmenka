<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Nochleg_Main extends Controller_Index {

    public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleft/city')->execute();
		$widget_poisk = 'Шаблон поиска';
		$this->template->block_left  = array($widget_poisk,$widget_leftmenu);
    }

 
    public function action_index() {
	$count_all = ORM::factory('nochleg')->count_all();	
	$pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))
		->route_params(array(
		  'directory'=>Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
		));
	$nochleg = ORM::factory('nochleg') //записи, которые выводим на экран
	       ->limit($pagination->items_per_page)
	       ->offset($pagination->offset) //с этой записи начинается отсчет
	       -> find_all();
		   
	$content = View::factory('main/v_nochleg',array(
		'nochleg'=>$nochleg,
		'pagination' => $pagination,
	));
        $this->template->title = 'Место ночлега';
        $this->template->site_name = 'Место ночлега';
        $this->template->block_center = array($content);
	}

}