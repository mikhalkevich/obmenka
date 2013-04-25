<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usercomment extends ORM {
        protected $_belongs_to = array(
         'user_commentator' => array(
            'model' => 'user',
            'foreign_key' => 'user_commentator_id',
         ),
         'user_main' => array(
            'model' => 'user',
            'foreign_key' => 'user_id',
         ),
    );
	public function labels()
    {
        return array(
		    'about'=>'Содержимое',
        );
    }
	 public function rules()
	{
		return array(
			'about' => array(
				array('not_empty'),
				array('min_length', array(':value', 10)),
			),
			'user_id' => array(
				array('not_empty'),
			),
			'user_commentator_id' => array(
				array('not_empty'),
			),
		);
	}
} 
?>
