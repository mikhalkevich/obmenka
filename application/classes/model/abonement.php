<?php defined('SYSPATH') or die('No direct script access.');

class Model_Abonement extends ORM {
  protected $_table_name = "abonement";
  protected $_belongs_to = array(
        'book' => array(
            'model' => 'book',
            'foreign_key' => 'products_id',
        ),
	);
} 
