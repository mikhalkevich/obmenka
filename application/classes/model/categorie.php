<?php defined('SYSPATH') or die('No direct script access.');

class Model_Categorie extends ORM {
     protected $_has_many = array(

        'subcategories' => array(
            'model' => 'subcategorie',
            'foreign_key' => 'category_id',
        ),
	);
} 
