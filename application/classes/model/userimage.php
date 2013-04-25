<?php defined('SYSPATH') or die('No direct script access.');

class Model_Userimage extends ORM {

    protected $_belongs_to = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
        ),
    );
    
    protected $_has_many = array(
        'messagesfrom' => array(
            'model' => 'msg',
            'foreign_key' => 'id_from',
        )
	);

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
        );
    }
} 