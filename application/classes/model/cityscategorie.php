<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cityscategorie extends ORM {
     protected $_has_many = array(

        'subcategories' => array(
            'model' => 'cityssubcategorie',
            'foreign_key' => 'category_id',
        ),
	);
} 
