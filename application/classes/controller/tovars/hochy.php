<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Hochy extends Controller_Auth_Account {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
	$products = ORM::factory('hotelki');
	$products -> products_id = $this->request->param('id');
	$products -> user_id = $this->user->id;
	$products -> status = 'wont';
	$products -> sell_obmen = 'obmen';
        $products -> putdate = date('y-m-d');
        if ($products->product->user->email){
            $to      = $products->product->user->email;
            $subject = 'Сообщение от '.$products->product->user->first_name ;
            $message = '<p>Здравствуйте, <b>'.$products->product->user->first_name.'</b>, 
                пользователь XXX хочет обменять ваш
                <b>'.$products->product->name.'</b> на один из своих товаров.</p>
                <p>С товарами XXX вы можете ознакомиться по этой ссылке:</p>
<a href="http://'.$_SERVER["HTTP_HOST"].'/tovars/subcat/'.$products->product->user->id.'/usertovars"> 
    Товары пользователя</a>
';
            $headers = 'From: webmaster@example.com' . "\r\n" .
                       'Reply-To: webmaster@example.com' . "\r\n" .
                       'Content-type: text/html; charset=iso-8859-1' .
                       'X-Mailer: PHP/' . phpversion();
           @mail($to, $subject, $message, $headers);
        }
	$products -> save();
	$this->request->redirect(Request::initial()->referrer());
	}
        
        public function action_sell() {
            $products = ORM::factory('hotelki');
	    $products -> products_id = $this->request->param('id');
	    $products -> user_id = $this->user->id;
	    $products -> status = 'wont';
	    $products -> sell_obmen = 'sell';
	    $products -> putdate = date('y-m-d');
	    $products -> save();
	    $this->request->redirect(Request::initial()->referrer());
        }

}