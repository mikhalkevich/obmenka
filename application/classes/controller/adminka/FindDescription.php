<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Adminka_FindDescription extends Controller_Adminka_Main
{
    public function action_index() {
        $user = Auth::instance()->get_user();


        //поиск всех нпоставщиков по которым написан класс для поиска у них данных по товарам
        $distributer_folder = new DirectoryIterator(APPPATH.'classes'.DIRECTORY_SEPARATOR.'distributer');
        $distributers = array();
        $restricted_destributers = array('Google', 'Distributer');
        foreach($distributer_folder as $distributer_file){
            if($distributer_file->isFile() and !in_array($distributer_file->getBasename(EXT), $restricted_destributers)){
                $distributers[] =  $distributer_file->getBasename(EXT);
            }
        }

        $none_picture_count = ORM::factory('tovar')
            ->where('pic', '=', '')
            ->and_where('user_id', '=',$user->id)
            ->count_all();
        $none_description_count = ORM::factory('tovar')
            ->where('description', '=', '')
            ->and_where('user_id', '=',$user->id)
            ->count_all();
        $content = View::factory('adminka/v_find_description')
            ->bind('none_picture_count', $none_picture_count)
            ->bind('none_description_count', $none_description_count)
            ->bind('distributers', $distributers);
        $this->template->block_center = array($content);
    }
}
