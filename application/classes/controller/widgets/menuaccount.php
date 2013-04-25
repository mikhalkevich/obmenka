<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Widgets_Menuaccount extends Controller_Template {
//определение шаблона по-умолчанию
 public $template = 'widget/v_widgetaccount'; 
 public function action_index() {
$this->template->block_my = null;
$this->template->me = Auth::instance()->get_user();
    }
}
