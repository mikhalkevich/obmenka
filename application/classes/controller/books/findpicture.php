<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Findpicture extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }


    public function action_index() {
        require APPPATH.'classes/phpQuery/phpQuery/phpQuery'.EXT;
        $id = $this->request->param('id');
        $mybook = ORM::factory('ebook')
                ->where('id', '=', $id)
                ->find();
        $str_name = @ereg_replace(' ', '+', $mybook->name);
        $str_author = @ereg_replace(' ', '+', $mybook->author);
        $str_year = @ereg_replace(' ', '+', $mybook->year);
        $str= 'книга+'.$str_name;
        if(isset($str_author)){
         $str .= '+'.$str_author;
        }
        if(isset($str_year)){
         $str .= '+'.$str_year;
        }
        $hub = file_get_contents('http://www.google.by/search?q='.$str.'&client=firefox-a&hs=ijB&rls=org.mozilla:ru:official&source=lnms&tbm=isch&sa=X&ei=39mcUaKUFsfbsgbKpIDwBg&ved=0CAoQ_AUoAQ&biw=1280&bih=661');
        $document = phpQuery::newDocument($hub);
        $books_picture = array();
        for($a=0;$a<4;$a++){
            $hentry = $document->find('.images_table a:eq('.$a.')')->attr("href");
            $pieces = explode("&", $hentry);
            $pieces1 = explode("=", $pieces[0]);
            if(isset($pieces1[1])){
            $books_picture[]=$pieces1[1];
            }
        }
               $content = View::factory('books/v_find_picture')
               ->bind('books_picture', $books_picture)
               ->bind('mybook', $mybook);
       $this->template->block_center = array($content);
    }
}     