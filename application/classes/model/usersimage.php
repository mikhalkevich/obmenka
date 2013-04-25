<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usersimage extends ORM {

   protected $_table_name = 'users';
 
     protected $_has_many = array(

        'images' => array(
            'model' => 'userimage',
            'foreign_key' => 'user_id',
        ),
          'messages_from' => array(
            'model' => 'msg',
            'foreign_key' => 'id_from',
        )
    );
	protected $_has_one = array (
       'friends' => array(
            'model' => 'friend',
            'foreign_key' => 'friend_id',
        ),
	 'userone' => array(
            'model' => 'usermore',
            'foreign_key' => 'user_id',
        ),
	);
} 
