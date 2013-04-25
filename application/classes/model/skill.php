<?php defined('SYSPATH') OR die('No direct script access.');
class Model_Skill extends ORM{
    protected $_has_many = array(
        'userskills'=>array(
            'model'=>'userskill',
            'foreign_key'=>'skill_id'
        )
    );
    public function rules() {
        return array(
            'skill'=>array(
                array('not_empty'),
                array('min_length', array(':value', 3)),
            ),
        );
    }
    
    public function labels() {
        return array(
            'skill'=>'Я умею',
        );
    }
}
