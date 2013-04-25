<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Services_Services extends Controller_Auth_Account{
    public function before()
    {
        parent::before();
        $widget_au = REQUEST::factory('widgets/menuaccount/index')->execute();
        $this->template->block_right = array("Кабинет пользователя" => $widget_au);
    }

    public function action_index()
    {
        $autocomplite = ORM::factory('skill')->find_all();
        $data_complite = "";
            foreach($autocomplite as $one){
                $data_complite .= "'".$one->skill."', ";
            }
        $icanoffer_need = $this->request->param('id');
        if(!Auth::instance()->logged_in())
        {
            $this->request->redirect('account/cabinet');
        }
        if(isset($_POST['submit']))
        {
            $data = Arr::extract($_POST, array(
                'skill',
                'description',
            ));
            if(is_array($data) AND !empty($data))
            {
               $skill = ORM::factory('skill')->where('skill', '=', $data['skill'])->find();
                    if(!$skill->id) { // ТУТ НАДО ДОРАБОТАТЬ!!!!!!!!!!!
                        $skill = ORM::factory('skill');
                        $skill->skill = $data['skill'];
                        // $skill->user_id = $this->user->id;
                        try{
                         $skill->save();
                         
                            $user = ORM::factory('userskill');
                            $user->description = $data['description'];
                            $user->user_id = $this->user->id;
                            $user->put_date = date('Y-m-d');
                            $user->skill_id = $skill->id;
                            try{
                                $user->save();
                                $this->request->redirect('services/services/');
                            }catch(ORM_Validation_Exception $e){
                                $errors = $e->errors('validation');
                            }
                        }
                        catch (ORM_Validation_Exception $e) {
                         $errors = $e->errors('validation');
                        }
                    }else{
                        $users_skills = ORM::factory('userskill');
                        $users_skills->user_id = $this->user->id;
                        $users_skills->skill_id = $skill->id;
                        $users_skills->description = $data['description'];
                        $users_skills->put_date = date('Y-m-d');
                        try{
                            $users_skills->save();
                            $this->request->redirect('services/services/');
                        }catch(ORM_Validation_Exception $e){
                            $errors = $e->errors('validation');
                        }
                    }
            }
        }
        
        // делаем список с умениями для редоктировани
        $list_off_skills = ORM::factory("userskill")
                ->where('user_id', '=', $this->user->id)
                ->find_all();
        // ==================================================
        
        $menu = View::factory('services/v_services_serv_menu', array(
                        'controller'=>'services/services/'.$icanoffer_need));
        $content = View::factory('services/v_services_serv')
                ->bind('data', $data)
                ->bind('errors', $errors)
                ->bind('data_complite', $data_complite)
                ->bind('menu', $menu)
                ->bind('list_off_skills', $list_off_skills);
        if($icanoffer_need == 'needs'){
            $content = View::factory('services/v_services_need')
                ->bind('data', $data)
                ->bind('errors', $errors)
                ->bind('data_complite', $data_complite)
                ->bind('menu', $menu);
        }
        
        // Выводим в шаблон
        $this->template->site_title = 'Услуга';
        $this->template->block_center = array($content);
    }
    
    public function action_needs(){
        if(isset($_POST['submit'])){
            $data = Arr::extract($_POST, array(
                '',
            ));
            echo "I'm here!!!";
        }
    }
    
    public function action_delete(){
        $skill_id = $this->request->param("id");
        $delete_skill = ORM::factory('userskill')
                ->where('skill_id', '=', $skill_id)
                ->find();
        $delete_skill->delete();
        $this->request->redirect('services/services');
    }
}