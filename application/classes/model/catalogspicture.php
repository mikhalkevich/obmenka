<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalogspicture extends ORM {
  protected $_belongs_to = array(
        'vip' => array(
            'model' => 'catalog',
            'foreign_key' => 'id_category',
        )
    );
} 
