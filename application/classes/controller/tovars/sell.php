<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Tovars_Sell extends Controller_Index {

   public function before(){
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleftsell/sell')->execute();
		$this->template->block_left  = array($widget_leftmenu);
		$this->template->styles[] =	'media/css/jquery.lightbox-0.5.css';
		$this->template->scripts[] ='media/js/jquery.lightbox-0.5.min.js';
    }
   public function action_index(){
   $sub_id = $this->request->param('id');
   $andwhere = array();
   if($sub_id == 'all') {
    $andwhere[] = 'id';
    $andwhere[] = '>';
    $andwhere[] = '0';
   } else {
    $andwhere_id = array($sub_id);
    $andwhere[] = 'cut_id';
    $andwhere[] = 'IN';

			$catalog = ORM::factory('catalog')
                          ->where('id', '=', $sub_id)
	                  ->find();
	                $cat_big = ORM::factory('catalog')
                          ->where('id', '=', $sub_id)
	                  ->find_all()
			  ->as_array();
             foreach ($cat_big as $cat) {
             if($cat->parent($sub_id)){
               $parent_cat =  $cat->parent($cat->children())->name;
               $parent_id =  $cat->parent($cat->children())->id;
             }
                   if($cat->has_children()){
                       foreach($cat->children() as $catchild){
                          $andwhere_id[] = $catchild->id;

                            if($catchild->has_children()){
                                foreach($catchild->children() as $catchild2){
                                   $andwhere_id[] = $catchild2->id;

                                        if($catchild2->has_children()){
                                            foreach($catchild2->children() as $catchild3){
                                               $andwhere_id[] = $catchild3->id;

                                            }
                                        }
                                   
                                }
                            }
                          
                       }
                   }
               }
     $andwhere[] = $andwhere_id;
   }
	 $count_all = ORM::factory('tovar')
				->where('showhide', '=', 'show')
				->and_where($andwhere['0'], $andwhere['1'], $andwhere['2'])
				->count_all();
				
        $pagination = Pagination::factory(array(
            'total_items' => $count_all,
        ))
		->route_params(array(
                  'directory' => Request::current()->directory(),
		  'controller' => Request::current()->controller(),
		  'action' => Request::current()->action(),
                  'id' => $this->request->param('id'),
		));

			$products = ORM::factory('tovar')
                          ->where('showhide', '=', 'show')
			  ->and_where($andwhere['0'], $andwhere['1'], $andwhere['2'])
                          ->and_where('price', '!=', '0')
			  ->limit ($pagination->items_per_page)
                          ->offset($pagination->offset)
			  ->order_by('name', 'DESC')
	                  ->find_all();
        $this->template->site_name = "<b>Демографически Обусловленные</b> Товары на продажу";
	$forma = View::factory('tovars/v_tovars_forma');
        if ($this->auth->logged_in()) {
         $user_id = $this->user->id;
	}else{
	 $user_id = null;
	}
        $content = View::factory('tovars/v_tovars_sell')
	          ->bind('products', $products)
	          ->bind('catalog', $catalog)
                  ->bind('user_id', $user_id)
                  ->bind('count_all', $count_all) 
	          ->bind('cat_big', $cat_big)
                  ->bind('parent_cat', $parent_cat)
                  ->bind('forma', $forma)
                  ->bind('parent_id', $parent_id)
		  ->bind('pagination', $pagination);
        $this->template->block_center = array($content);
    }
    public function action_more() {
        
	$id_tov = $this->request->param('id');
	$product = ORM::factory('tovar')
              ->where('id', '=', $id_tov)
	      ->find();
        if ($this->auth->logged_in()) {
         $user_id = $this->user->id;
	}else{
            $user_id = null;
            $ip = ORM::factory('ip')
                  ->where('ip', '=', $_SERVER['REMOTE_ADDR'])
                  ->find();
                if(!$ip->id){
                    $ip = ORM::factory('ip');
                    $ip->ip = $_SERVER['REMOTE_ADDR'];
                    $ip->save();
                }
            $prod_ip = ORM::factory('ipproduct')
                  ->where('ip_id', '=', $ip->id)
                  ->and_where('prod_id', '=', $id_tov)
                  ->find();
                if(!$prod_ip->id){
                    $prod_ip = ORM::factory('ipproduct');
                    $prod_ip->ip_id = $ip->id;
                    $prod_ip->prod_id = $id_tov;
                    $prod_ip->putdate = date('y-m-d');
                    $prod_ip->save();
                }
	}
         $this->template->title = $product->name;
         $this->template->site_name = $product->name;
         $this->template->site_description = 'Огромный выбор товаров бытовой и электронной техники. Только на нашем сайте вы сможете как обменять, так и купить любой вид товаров.';
	 $content = View::factory('tovars/v_tovars_sell_more')
                           ->bind('user_id', $user_id)
	                   ->bind('product', $product);
	 $this->template->block_center = array($content);
    }
    public function action_search(){
            if(isset($_POST['namesearch'])){
               $post_in = $_POST['namesearch'];
               if($_POST['optionsRadios'] == 'code'){
                   $namecode = 'product_code';
               } elseif($_POST['optionsRadios'] == 'name') {
                   $namecode = 'name';
               }
               $search_tov = ORM::factory('tovar')
                       ->where($namecode, 'LIKE', '%'.$post_in.'%')
                       ->limit(200)
                       ->find_all();
               $forma = View::factory('tovars/v_tovars_forma');
              
            }
             $content = View::factory('tovars/v_tovars_sell_search')
                       ->bind('post_in', $post_in)
                       ->bind('search_tov', $search_tov)
                       ->bind('forma', $forma);
               $this->template->block_center = array($content);
    }

}