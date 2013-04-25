<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {

    protected $_has_one = array(
        'userone' => array(
            'model' => 'userimage',
            'foreign_key' => 'user_id',
        ),
        'usermore' => array(
            'model' => 'usermore',
            'foreign_key' => 'user_id',
        ),
    );
    
 
 
  public function labels()
    {
        return array(
            'username' => 'Логин',
            'email' => 'E-mail ы',
            'first_name' => 'ФИО',
            'password' => 'Пароль в',
            'password_confirm' => 'Повторить пароль',
        );
    }

    public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 32)),
				array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
                array(array($this, 'uniq_alias'), array(':value', ':field')),
			),
            'first_name' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
				array('max_length', array(':value', 32)),
			),
			'email' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 127)),
				array('email'),
                array(array($this, 'uniq_alias'), array(':value', ':field')),
			),
		);
	}
	public static function get_password_validation($values)
	{
		return Validation::factory($values)
			->rule('password', 'min_length', array(':value', 4))
			->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
	}
 public function uniq_alias($value, $field)
    {
        $page = ORM::factory($this->_object_name)
                ->where($field, '=', $value)
                ->and_where($this->_primary_key, '!=', $this->pk())
                ->find();
        
        if ($page->pk())
        {
            return false;
        }
        
        
        return true;
    }
} 
