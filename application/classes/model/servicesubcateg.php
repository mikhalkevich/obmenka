<?php defined('SYSPATH') or die('No direct script access.');

class Model_Servicesubcateg extends ORM {
     protected $_belongs_to = array(
        'categories' => array(
            'model' => 'servicecateg',
            'foreign_key' => 'category_id',
        ),
	);
} 
