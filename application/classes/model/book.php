<?php defined('SYSPATH') or die('No direct script access.');

class Model_Book extends ORM {
        protected $_belongs_to = array(
        'subcat' => array(
            'model' => 'bookssubcategorie',
            'foreign_key' => 'subcategory_id',
        ),
		'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
		'owner' => array(
            'model' => 'user',
            'foreign_key' => 'owner_id',
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
		    'author'=>'Автор книги',
            'name' => 'Название книги',
            'description' => 'Описание книги',
            'subcategory_id' => 'Категория',
        );
    }
	 public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
			),
			'description' => array(
				array('not_empty'),
			),
			'subcategory_id' => array(
				array('not_empty'),
			),
		);
	}
} 
?>
