<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */

class Controller_Adminka_Otchet extends Controller_Adminka_Main {

    public function before() {
        parent::before();
    }

    public function action_index() {
    $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
        /*
         * Обработчик удаления
         */
        if (isset($_POST['delete']))
        {
            $data = ORM::factory('otchet', $_POST['otchet_id']);
            $data->delete();
            $data = array(
                   'title' => 'Отчёт удалён',
                   'body' => 'Отчёт удалён',
               );
        }
         /*
        * Обработчик добавления отчёта
        */
        if (isset($_POST['add']))
        {
         $data = Arr::extract($_POST, array(
									  'body'
									));
            $data_otchet = ORM::factory('otchet');
            $data_otchet->body = $data['body'];
            $data_otchet->putdate = date('Y-m-d H:i:s');
            $data_otchet->showhide = 'y';
            $data_otchet->user_id = $this->user->id;
           try { 
            $data_otchet->save();
           }
           catch (ORM_Validation_Exception $e) {
               $errors = $e->errors('validation');
           }
        }
        /*
         * Вывод всех отчётов
         */
        $otchetList = ORM::factory('otchet')->order_by('putdate', 'DESC')->find_all();
        $content = View::factory('adminka/v_otchet_list')
                ->bind('otchetList', $otchetList)
                ->bind('data', $data)
                ->bind('errors', $errors);
        $this->template->block_center = array($content);
    }

    
  

}
?>