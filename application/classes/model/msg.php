<?php defined('SYSPATH') or die('No direct script access.');

class Model_Msg extends ORM {
	protected $_table_name = 'msg';

        
        protected $_belongs_to = array(
        'id_from' => array(
            'model' => 'userimage',
            'foreign_key' => 'id_from',
        ),
        'id_to' => array(
            'model' => 'userimage',
            'foreign_key' => 'id_to',
        ),
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'id_from',
        ),
        'user_to' => array(
            'model' => 'user',
            'foreign_key' => 'id_to',
        ),
	);
        
        public function labels()
        {
                return array(
                    'msg'=>'Сообщение',
                );
        }
            
	 public function rules()
	{
		return array(
			'msg' => array(
				array('not_empty'),
				//array('regex', array(':value', '[^script]')),
			),
		);
	}
} 
