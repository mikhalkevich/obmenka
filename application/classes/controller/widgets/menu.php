<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu extends Controller_Template {

 public $template = 'widget/v_widget'; 
 public function action_index() {
    $ip = ORM::factory('ip')
             ->where('ip', '=', $_SERVER['REMOTE_ADDR'])->find();
    $prods_for_ip = ORM::factory('ipproduct')
             ->where('ip_id','=', $ip->id)
             ->order_by('id', 'DESC')
             ->limit(7)
             ->find_all();

        $arr = array();
        foreach($prods_for_ip as $prods){
         $arr[] = $prods->prod_id;        
        }
    if(!empty($arr)){
       $rand_tov = ORM::factory('tovar')
                ->where('id', 'IN', $arr)
                ->order_by('id', 'DESC')
                ->limit(7)
                ->find_all();
       $this->template->title = "Ранее просмотренные";
    } else {
       $rand_tov = ORM::factory('tovar')
               ->where("pic", "!=", "")
               ->order_by(DB::expr('RAND()') )
               ->limit(7)
               ->find_all();
       $this->template->title = "Выбор администрации";
    }
   $this->template->rand_tov = $rand_tov;
   }
}
