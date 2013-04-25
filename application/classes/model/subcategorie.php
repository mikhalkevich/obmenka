<?php defined('SYSPATH') or die('No direct script access.');

class Model_Subcategorie extends ORM {
     protected $_belongs_to = array(
        'categories' => array(
            'model' => 'categorie',
            'foreign_key' => 'category_id',
        ),
	);
} 
