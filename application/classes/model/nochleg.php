<?php defined('SYSPATH') or die('No direct script access.');

class Model_Nochleg extends ORM {
protected $_table_name='nochleg';
protected $_primary_key='id';
protected $_db_group='default';

        protected $_belongs_to = array(
        'subcat' => array(
            'model' => 'cityssubcategorie',
            'foreign_key' => 'subcategory_id',
        ),
		'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
    );
}
?>
