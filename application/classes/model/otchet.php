<?php defined('SYSPATH') or die('No direct script access.');

class Model_Otchet extends ORM {
   protected $_belongs_to = array(
       'getUser' => array(
           'model' => 'user',
           'foreign_key' => 'user_id',
       ),
   );
   
    public function rules(){
        return array (
            'body' => array(array('not_empty')),
            'putdate' => array(array('not_empty')),
            'user_id' => array(array('not_empty')),
            
        );
    }
   
   public function filter(){
       return array (
           TRUE => array ('trim')
       );
   }
}
?>
