<?php defined('SYSPATH') or die('No direct script access.');

class Model_Themablog extends ORM {
  protected $_belongs_to = array(
        'themas' => array(
            'model' => 'thema',
            'foreign_key' => 'thema_id',
        ),
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
   ); 
  public function rules(){
        return array (
            'body' => array(array('not_empty'))            
        );
    }
} 
?>
