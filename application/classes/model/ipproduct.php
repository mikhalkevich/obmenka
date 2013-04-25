<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ipproduct extends ORM {
     protected $_belongs_to = array(
        'tovars' => array(
            'model' => 'tovar',
            'foreign_key' => 'prod_id',
        ),);
}