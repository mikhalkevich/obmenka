<?php defined('SYSPATH') or die('No direct script access.');

class Model_Thema extends ORM_MPTT {
    protected $_has_many = array(
        'themablogs'=>array(
            'model'=>'themablog',
            'foreign_key'=>'thema_id'
        )
    );
        public function rules(){
        return array (
            'name' => array(array('not_empty')),
            'user_id' => array(array('not_empty')),
            
        );
    }
  public function labels()
    {
        return array(
            'name' => 'Рубрика',
        );
    }
} 
