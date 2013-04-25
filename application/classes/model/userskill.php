<?php defined('SYSPATH') OR die('No direct script access.');
class Model_Userskill extends ORM{
    protected $_belongs_to = array(
        'skills'=>array(
            'model'=>'skill',
            'foreign_key'=>'skill_id'
        ),
        'users'=>array(
            'model'=>'user',
            'foreign_key'=>'user_id',
        ),
    ); 
}