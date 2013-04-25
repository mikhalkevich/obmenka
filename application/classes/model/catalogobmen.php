<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalogobmen extends ORM_MPTT {
    public function labels()
    {
        return array(
            'name' => 'Категория',
        );
    }
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
        );
    }
    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'name' => array(
                array('strip_tags'),
            ),
        );
    }
} 
