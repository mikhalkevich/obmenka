<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usermore extends ORM {
    
    protected $_belongs_to = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
    );

  public function labels()
    {
        return array(
            'phone' => 'телефон',
            'city'  => 'город',
            'about'  => 'Прочая информация',
        );
    }
 public function rules()
	{
		return array(
			'city' => array(
				array('min_length', array(':value', 2)),
				array('max_length', array(':value', 34)),
			),
			'about' => array(
				array('min_length', array(':value', 4)),
			),
			'skype' => array(
				array('min_length', array(':value', 2)),
			),
		);
	}
} 
