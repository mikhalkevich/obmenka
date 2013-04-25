<?php defined('SYSPATH') or die('No direct script access.');

class Model_Hotelki extends ORM {
  protected $_table_name = "hotelki";
  protected $_belongs_to = array(
        'product' => array(
            'model' => 'product',
            'foreign_key' => 'products_id',
        ),
        'tovar' => array(
            'model' => 'tovar',
            'foreign_key' => 'products_id',
        ),
       'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
   );
} 
