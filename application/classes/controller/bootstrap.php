<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Bootstrap extends Controller_Template {
        
    public $template = 'books/v_bootstrap';
    

    public function action_index()
	{
            $bootstrapStyles = array(
                'media/bootstrap/css/bootstrap-responsive.css',
                'media/bootstrap/css/bootstrap-responsive.min.css',
                'media/bootstrap/css/bootstrap.css',
                'media/bootstrap/css/bootstrap.min.css',
            );
    
            $bootstrapScripts = array (
                'media/bootstrap/js/bootstrap.js',
                'media/bootstrap/js/bootstrap.min.js',
            );
            
            $categories = ORM::factory('bookscategorie')->find_all();
    
            $this->template->bootstrapStyles = $bootstrapStyles;
            $this->template->bootstrapScripts = $bootstrapScripts;
            $this->template->categories = $categories;
            
            
	}
}