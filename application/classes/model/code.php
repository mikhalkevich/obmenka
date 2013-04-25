<?php defined('SYSPATH') or die('No direct script access.');

class Model_Code extends ORM {
  protected $_belongs_to = array(
        'codecatalog' => array(
            'model' => 'codecatalog',
            'foreign_key' => 'cat_id',
        ),
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
   ); 
 public function rules()
	{
		return array(
			'opisanie' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
			),
			'code' => array(
				array('not_empty'),
			),
			'cat_id' => array(
				array('not_empty'),
			),
		);
	}
 public function labels()
    {
        return array(
            'opisanie' => 'Описание',
            'code' => 'Код',
            'cat_id' => 'Категория',
        );
    }
}