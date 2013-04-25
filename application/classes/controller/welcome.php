<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
		public function action_main()
	{
    $view = View::factory('index');
    $view->name1 = "Some title";
    $view->name2 = "это я";
	$this->response->body($view);
	}

} // End Welcome
