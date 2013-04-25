<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Libs extends Controller {
    public function action_index(){
        
    }
    public function action_ckupload(){
    $this->auth = Auth::instance();
    $this->user = $this->auth->get_user();
    $callback = $_GET['CKEditorFuncNum'];
    $file_name = date('y-m-d-h-i-').$_FILES['upload']['name'];
    $file_name_tmp = $_FILES['upload']['tmp_name'];
    $file_new_name = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url.'media/upload/'.$this->user->id.'/';
    if (!is_dir($file_new_name)) {
		 @mkdir($file_new_name, 0777);
    }
    $full_path = $file_new_name.$file_name;
    $http_path = '/media/upload/'.$this->user->id.'/'.$file_name;
    $error = '';
    if( move_uploaded_file($file_name_tmp, $full_path) ) {
    } else {
     $error = 'Some error occured please try again later';
     $http_path = '';
    }
    echo "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction(".$callback.",  \"".$http_path."\", \"".$error."\" );</script>";
    }
	public function action_chat(){
       header('Content-Type: text/event-stream');
       header('Cache-Control: no-cache');
        echo 'retry: 10000'.PHP_EOL;

        $user_from = $this->request->param('id');
        $last_message = $this->request->param('page');
        $user = Auth::instance()->get_user();
        //$start_time = time();
       // do {
          if(isset($_SERVER["HTTP_LAST_EVENT_ID"])){
             $asas = $_SERVER["HTTP_LAST_EVENT_ID"];
             $last_message = $_SERVER["HTTP_LAST_EVENT_ID"];
          } else {
             $asas = '';
          }
          
          $start_time = time();
        do{
          $message = ORM::factory('msg')
          ->where('id_from', '=', $user_from)
          ->and_where('id_to', '=', $user->id)
          ->and_where('id', '>', $last_message)
          ->find();
          
          if($message->loaded()){
            echo 'id: '.$message->id.PHP_EOL;
            echo 'data: '.$message->msg.PHP_EOL;
          }
          ob_flush();
          flush();
          
          $last_message = $message->id;
          
          unset($message);
          if((time() - $start_time) > 2){
              die();
          }
          sleep(2);
          
        } while (true);
	}
}