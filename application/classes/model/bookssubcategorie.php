<?php defined('SYSPATH') or die('No direct script access.');

class Model_Bookssubcategorie extends ORM {
     protected $_belongs_to = array(
        'categories' => array(
            'model' => 'bookscategorie',
            'foreign_key' => 'category_id',
        ),
	);
} 
