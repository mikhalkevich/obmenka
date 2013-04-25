<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Adminka_Hotelka extends Controller_Adminka_Main {
 public function before(){
        parent::before();
        $id= $this->request->param('id');
  }
 public function action_index() {}
 public function action_delete() {
       $id= $this->request->param('id');
	$hotelka = ORM::factory('hotelki', $id);
	$hotelka->delete();
	$this->request->redirect('adminka');
 }
 public function action_ok() {
       $this->template->scripts[] = 'media/ckeditor/ckeditor.js';
       $id= $this->request->param('id');
       $data = array();
       $hotelka = ORM::factory('hotelki')
               ->where('id', '=', $id)
               ->find();
       if($hotelka->tovar->pic_small){
           $picture =  '<img src="http://'.$_SERVER["SERVER_NAME"].'/media/uploads/eshop/'.$hotelka->tovar->pic_small.'" 
                />';
       } else {
           $picture = '';
       }
       $data['body'] = 'Здравствуйте, '.$hotelka->user->first_name . ', недавно
                вы сообщили нам, что хотите приобрести <b>' 
               .HTML::anchor('http://'.$_SERVER["SERVER_NAME"].'/tovars/sell/'.$hotelka->products_id.'/more', 
                $hotelka->tovar->name). '. </b>
                <p align="center">'.$picture.'</p>
                <p>Сообщаем вам, что товар будет Вам доставлен <em><mark>до конца следующей недели</mark></em>.</p>
                <p>Статус этого товара переведен с <b>ХОЧУ</b> на <b>ЖДУ</b>.</p>
                 <blockquote> В случае, если Вы передумали, просьба незамедлительно связаться с администрацией сайта obmenka.by.
                Либо самостоятельно отказаться от товара в своем кабинете пользователя.</blockquote> 
                <p>Более подробную информацию о процессе обработки ваших товаров, мы можете получить в своем кабинете пользователя.</p>
                <p>Напоминаем вам: кабинет пользователя доступен по ссылке: <b>http://obmenka.by/auth/login</b>.</p>
                <p>Ваш логин <b>'.$hotelka->user->username.'</b>.</p>';
       if(isset($_POST['send'])){
          $data = Arr::extract($_POST, array('body',));
          $hotelka = ORM::factory('hotelki', $hotelka->id);
          $hotelka->status = 'zdet';
          $hotelka->putdate_wait = date('y-m-d');
          $hotelka->save();
          $to = $hotelka->user->email;
          $subject = $hotelka->user->first_name. ', Вам сообщение с obmenka.by';
          $message = $data['body'];
                       $headers = 'From: vestkul@tut.by' . "\r\n" .
                        'Reply-To: vestkul@tut.by' . "\r\n" .
	                'Content-Type: text/html; charset=utf-8' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
         @mail($to, $subject, $message, $headers);
          $this->request->redirect('adminka/');
          
       }
       $shablon_user_one = View::factory('adminka/hotelki/v_shablon_user_one', array(
           'hotelka'=>$hotelka
       ));
       $content = View::factory('adminka/hotelki/v_ok')
                ->bind('data', $data)
                ->bind('hotelka', $hotelka)
                ->bind('shablon_user_one', $shablon_user_one)
                ->bind('errors', $errors);
        $this->template->block_center = array($content);
 }
}