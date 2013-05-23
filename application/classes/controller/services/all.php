<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_All extends Controller_Index{
    
    public function before() 
    {
        parent::before();
    }
    
    public function action_index()
    {
        // exit($this->request->param("id"));
        // Количество записей на страницу
        $count = ORM::factory('userskill')->count_all();
        
        $pagination = Pagination::factory(array('total_items'=>$count))
                ->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));
        
        $all_skill = ORM::factory('userskill')
                ->limit($pagination->items_per_page)
                ->offset($pagination->offset)
                ->find_all();
       
        $content = View::factory('services/v_services_allskills')
                ->bind('all_skills', $all_skill)
                ->bind('pagination',$pagination);
        
        // Выводим в шаблон
        $this->template->site_title = "Все умения";
        $this->template->block_center = array($content);
    }
}