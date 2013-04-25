<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
    
public $template = 'v_base'; 
public $count_all = NULL; 

public function before() {
        parent::before();
		Cookie::$salt = 'asd12d2';
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
 
        $config = Kohana::$config->load('settings');

        //$this->template->user = $this->user->username;
        $this->template->site_name = 'Obmenka.BY';
        $this->template->site_description = 'Добро пожаловать на сайт';
        $this->template->site_title = 'Продажа, покупка, обмен, даром';
        $this->template->top_message = NULL;

 
        $this->template->styles = array(
			'media/bootstrap/css/bootstrap.min.css',
			'media/css/style.css',
			'media/css/jquery.autocomplete.css',
		);
        $this->template->scripts = array(
			'http://code.jquery.com/ui/1.10.0/jquery-ui.js',
			'media/js/jquery.autocomplete.js',
			'media/bootstrap/js/bootstrap.min.js',

		);
        
        if(Auth::instance()->logged_in()) {
		 $top = View::factory('v_top_register');
		 $username = $this->user->username;
        }
		else {
		 $top = View::factory('v_top_noregister');
		}
 
        $count_all = ORM::factory('user')->count_all();	
        
		$this->template->all_users = $count_all;
        $this->template->block_top = $top;
        $this->template->block_left = null;
        $this->template->block_center = array();
        $this->template->block_right = null;
    }
public function _upload_img($file, $directory = NULL, $ext = NULL){

        if($directory == NULL)
        {
            $directory = 'media/uploads';
        }

        if($ext== NULL)
        {
            $ext= 'jpg';
        }

 $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';
 $rand = '';
 for($i = 0; $i < 2; $i++)
  {
    $rand .= rand(1, strlen($symbols));
  }
            $filename = $this->user->id."_".$rand.time();

        // Изменение размера и загрузка изображения
        $im = Image::factory($file);

        if($im->width > 150)
        {
            $im->resize(150);
        }
        $im->save("$directory/small_$filename.$ext");

        $im = Image::factory($file);
        if($im->width > 600)
        {
            $im->resize(600);
        }
        $im->save("$directory/$filename.$ext");

        return "$filename.$ext";
    }
}
