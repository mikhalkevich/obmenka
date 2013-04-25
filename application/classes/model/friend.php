<?php defined('SYSPATH') or die('No direct script access.');

class Model_Friend extends ORM {
    protected $_belongs_to = array(
        'userss' => array(
            'model' => 'user',
            'foreign_key' => 'friend_id',
        ),
        'usersimage' => array(
            'model' => 'usersimage',
            'foreign_key' => 'friend_id',
        ),
    );
} 
?>
