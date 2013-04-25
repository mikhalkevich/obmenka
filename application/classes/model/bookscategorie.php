<?php defined('SYSPATH') or die('No direct script access.');

class Model_Bookscategorie extends ORM {
     protected $_has_many = array(

        'subcategories' => array(
            'model' => 'bookssubcategorie',
            'foreign_key' => 'category_id',
        ),
	);
} 
