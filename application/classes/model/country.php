<?php defined('SYSPATH') or die('No direct script access.');

class Model_Country extends ORM {
    protected $_table_name = 'countrys';

    protected $_has_many=array(
        'city'=>array(
            'model'=>'city',
            'foreign_key'=>'country_id'
        )
    );
}