<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Books_Mybook extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }


    public function action_index() {
       $cat_all = ORM::factory('thema')
               ->where('parent_id', '=', '0')
               ->find_all();
       if($cat_all){
           $cat_all_arr = '';
           foreach($cat_all as $cat_one){
               $cat_all_arr .="'".$cat_one->name."',";
           }
       }
       if(isset($_POST['submit'])){
           $data = Arr::extract($_POST, array('category','name','author','year','wishes','images'));
           $data['category'] = @ereg_replace("script", "<span>script</span>", $data['category']);
           $data['name'] = @ereg_replace("script", "<span>script</span>", $data['name']);
           $data['author'] = @ereg_replace("script", "<span>script</span>", $data['author']);
           $data['year'] = @ereg_replace("script", "<span>script</span>", $data['year']);
           $data['wishes'] = @ereg_replace("script", "<span>script</span>", $data['wishes']);
           $data['images'] = @ereg_replace("script", "<span>script</span>", $data['images']);
           try{
                 $im_db = ORM::factory('thema')
                         ->where('name', '=', $data['category'])
                         ->find();
           if(!$im_db->id){
                     $im_db = ORM::factory('thema');
                     $im_db->user_id = $this->user->id;
                     $im_db->name = $data['category'];
                     $im_db->lastvisit = date('Y-m-d h:i:s');
                     $im_db->putdate = date('Y-m-d');
                     $im_db->make_root();
                     $im_db = ORM::factory('thema')
                             ->where('name', '=', $data['category'])
                             ->find();
                 } 
                 $id = $im_db->id;
                 $mybook = ORM::factory('ebook');
                 $mybook->user_id = $this->user->id;
                 $mybook->cat_id = $id;
                 $mybook->name = $data['name'];
                 $mybook->author = $data['author'];
                 $mybook->description = $data['wishes'];
                 $mybook->year = $data['year'];
                 $mybook->putdate = date('y-m-d');
                 $mybook->save();
                 $book = ORM::factory('ebook')
                         ->where('name', '=', $data['name'])
                         ->and_where('author', '=', $data['author'])
                         ->and_where('year', '=', $data['year'])
                         ->find();

                 $this->request->redirect('books/findpicture/'.$book->id);
           }
           catch (ORM_Validation_Exception $e) {
               $errors = $e->errors('Validation');
           }
       }
       $content = View::factory('books/v_mybooks')
               ->bind('cat_all_arr', $cat_all_arr)
               ->bind('errors', $errors);
       $this->template->block_center = array($content);
    }


}