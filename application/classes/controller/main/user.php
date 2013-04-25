<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Main_User extends Controller_Index {

 public function action_plus() {
   $this->f_plusminus('plus');
 }
  public function action_minus() {
   $this->f_plusminus('minus');
 }
 
 protected function f_plusminus($var) {
    $a = ORM::factory('reiting');
	$a -> user_id = $this->request->param('id');
	$a -> user_sender_id = $this->user->id;
	$a -> plus_minus = $var;
	$a -> putdate = date('Y-m-d');
        $a -> save();
	$this->request->redirect('userone/'.$this->request->param('id'));
 }
 
 
 protected function b_plusminus($var) {
    $a = ORM::factory('booksreiting');
	$a -> user_id = $this->request->param('id');
	$a -> user_sender_id = $this->user->id;
	$a -> plus_minus = $var;
	$a -> putdate = date('Y-m-d');
	$a -> gettdate = date('Y-m-d');
	$a -> vozvrat = date('Y-m-d');
        $a -> save();
	$this->request->redirect('userone/'.$this->request->param('id'));
 }
 
}