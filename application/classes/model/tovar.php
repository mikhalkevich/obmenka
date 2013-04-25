<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tovar extends ORM {
    protected $_belongs_to = array(
        'catalog' => array(
            'model' => 'catalog',
            'foreign_key' => 'cut_id',
        ),
    );
    protected $_has_many= array(
        'hotelka' => array(
            'model' => 'hotelki',
            'foreign_key' => 'products_id',
        ),
    );
	public function labels()
    {
        return array(
		    'cut_id'=>'ID категории',
            'name' => 'Название',
            'description' => 'Описание',
            'price' => 'Цена',
        );
    }
	 public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
			),
			'cut_id' => array(
				array('not_empty'),
				array('numeric'),
			),
			'price' => array(
				array('not_empty'),
			),
		);
	}
} 
