<?php defined('SYSPATH') or die('No direct script access.');

class Model_Product extends ORM {

    protected $_belongs_to = array(
        'subcat' => array(
            'model' => 'subcategorie',
            'foreign_key' => 'subcategory_id',
        ),
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
        'catalogobmen' => array(
            'model' => 'catalogobmen',
            'foreign_key' => 'subcategory_id',
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
            'name' => 'Название товара',
            'description' => 'Описание товара',
            'subcategories_id' => 'Категория',
        );
    }
  public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
			),
			'subcategory_id' => array(
				array('not_empty'),
			),
		);
	}
} 
