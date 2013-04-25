<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Add extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }


    public function action_index() {
        $categories = ORM::factory('bookscategory')->find_all();
        $cater = $this->obj2arr($categories);
	$users = ORM::factory('usersimage') -> find_all();
	$content = View::factory('books/v_add', array('users'=>$users, 'cater'=>$cater));
        $this->template->title = 'КНИГИ  Добавление';
        $this->template->site_name = 'Добавление новой книги';
        $this->template->block_center = array($content);




        if($_POST){
            $data = Arr::extract($_POST, array ('name', 'author', 'year',
                'image', 'discription', 'sostoyanie'));
            $a = ORM::factory('book');
            $a->name = $data['name'];
            $a->author = $data['author'];
            $a->year = $data['year'];
            $a->image = '-';
            $a->discription = $data['discription'];
            $a->sostoyanie = $data['sostoyanie'];
            $a->subcategory_id = '1';
            $a->save();

	}
    }


}