<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services_Ajaxedit extends Controller_Template {
    
    public $template = 'services/v_ajaxedit';
    
    public function before() {
        parent::before();
    }
    
    public function action_index() {
        
        $skill_id = Arr::extract($_POST, array(
            'id'
        ));
        
        $data_for_edit = ORM::factory('userskill')
            ->where('skill_id', '=', $skill_id['id'])
            ->find();
        $this->template = View::factory('services/v_ajaxedit')
                ->bind('data', $data_for_edit)
                ->bind('skill_id', $skill_id['id']);
        
        if(isset($_POST['submit'])){
            $data = Arr::extract($_POST, array(
                'skill',
                'description',
                'skill_id'
            ));
            $change_data = ORM::factory('userskill')
                    ->where('skill_id', '=', $data['skill_id'])
                    ->find();
            $change_data->set('description', $data['description']);
            $change_data->update();
            $this->request->redirect('services/services');
        }
    }
}
