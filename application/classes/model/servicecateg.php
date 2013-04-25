<?php defined('SYSPATH') or die('No direct script access.');

class Model_Servicecateg extends ORM {
     protected $_has_many = array(

        'subcategories' => array(
            'model' => 'servicesubcateg',
            'foreign_key' => 'category_id',
        ),
	);
} 
