<?php defined('SYSPATH') or die('No direct script access.');

class Model_Hotelkinew extends ORM {
public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
			),
		);
	}
 public function labels()
    {
        return array(
            'name' => 'Наименование товара',
            'body' => 'Описание',
        );
    }
} 
