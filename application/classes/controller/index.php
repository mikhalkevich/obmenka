<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Index extends Controller_Base {

    public function  before() {
        parent::before();
		$widget_leftmenu = REQUEST::factory('widgets/menuleftsell/sell')->execute();
		if ($this->auth->logged_in()) {
                    $widget = REQUEST::factory('widgets/menuaccount/index')->execute();//вызов виджета
                    $widget_top = REQUEST::factory('widgets/widgetaccount/topmessage')
                                ->execute();
                    $this->template->styles[] =  'media/css/style_account.css';
                } else {
		    $widget = REQUEST::factory('widgets/menu/index')->execute();
                    $widget_top = NULL;
		}

        $this->template->block_left  = array($widget_leftmenu);
        $this->template->block_right = array($widget);
        $this->template->top_message = $widget_top;
    }

    public function action_index() {
        $forma = View::factory('tovars/v_tovars_forma');
        $product_vip = ORM::factory('tovar')
                  ->where('vip', '=', '2')
	          ->find_all();
        $product_obmen_last = ORM::factory('product')
                  ->where('products_pic_small', '!=', '')
                  ->order_by('id', 'DESC')
                  ->limit(6)
	          ->find_all();
		$content = View::factory('v_center')
		         ->bind('product_obmen_last', $product_obmen_last)
		         ->bind('product_vip', $product_vip)
                         ->bind('forma', $forma);
        $this->template->block_center = array($content);
    }
}