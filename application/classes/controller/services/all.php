<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_All extends Controller_Index{
    
    public function before() 
    {
        parent::before();
    }
    
    public function action_index()
    {
        $all_skill = ORM::factory('userskill')->find_all();
       
        $content = View::factory('services/v_services_allskills')
                ->bind('all_skills', $all_skill);
        $this->template->block_center = array($content);
    }
}