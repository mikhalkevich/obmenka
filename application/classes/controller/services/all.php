<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Services_All extends Controller_Index{
    public function before()
    {
        parent::before();
        $widget_au = REQUEST::factory('widgets/menuaccount/index')->execute();
        $this->template->block_right = array("Кабинет пользователя" => $widget_au);
    }
    
    public function action_index()
    {
        $all_skill = ORM::factory("skill")->find_all();
        
        // $content = View::factory();
    }

    
}