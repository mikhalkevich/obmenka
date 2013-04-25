<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Ajax extends Controller {

            public function action_index()
            {
                
            }
            
            public function action_tovarsajax()
            {
                        $products = ORM::factory('product')
                                ->where('id', '=', $_POST['id'])
                                ->find();
                        echo "<h1>".$products->name."</h1>" .
                         $products->description;
            }
        
            public function action_usermsg()
            {
		$messages = ORM::factory('msg')
                        ->where('id_to', '=', $_POST['id'])
			->and_where('id_from', '=', $this->user->id)
                        ->or_where('id_from', '=', $_POST['id'])
                        ->and_where('id_to', '=', $this->user->id)
                        ->order_by('putdate', 'AESC')
			->find();
                
                View::factory('ajax/v_msg', array(
                    'messages' => $messages
                ));
                
            }
        
	
}
?>