<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cityssubcategorie extends ORM {
     protected $_belongs_to = array(
        'categories' => array(
            'model' => 'cityscategorie',
            'foreign_key' => 'category_id',
        ),
	);
} 
