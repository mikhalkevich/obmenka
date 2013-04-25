<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */

class Controller_Adminka_Price_Mainprice extends Controller_Adminka_Main {

    public function before(){
        parent::before();
    }

 
    public function action_index() {
		$this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
		$this->template->scripts[] = 'media/js/upload_one_csv.js';
		$neznakomka = array();
	if($_FILES){
		$tmp_name = $_FILES['images']['tmp_name'][0];
		$name = $_FILES['images']['name'][0];
		$dir = $_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/price/";
						 if (!is_dir($dir)) {
                          @mkdir($dir, 0777);
						 }
		if(is_uploaded_file($tmp_name)){
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($tmp_name, $dir.$name);
   } else {
      echo("Ошибка загрузки файла");
   }
		
		$handle = fopen($dir.$name, "r");
			$data = array();
			$array_value = array();
			$k = 0;
			while (!feof($handle)){
			$data[$k] = fgetcsv($handle, 1000, "\n");
			unset ($data[0][0]); 
				if($data[$k]){
				foreach ($data[$k] as $key=>$value){
					$array_value = explode(";", $value, 7);
                                        $vv0 = $array_value[0]; //категория
					$vv1 = $array_value[1]; //название товара
					$vv2 = $array_value[2]; //код товара
					$vv3 = $array_value[3]; //цена
                                        $vv4 = $array_value[4]; //оптовик
                                        $vv5 = $array_value[5]; //статус ('в наличии','нет на складе','едет на склад')
                                        if(!$vv5){
                                            $vv5 = 'под заказ';
                                        }
					$catalog = ORM::factory('catalog')
					          ->where("name", "=", $vv0)
						  ->find();
					 if($catalog->name) {
					 $products = ORM::factory('tovar');
							$products->name = $vv1;
							$products->price = $vv3;
							$products->user_id = $this->user->id;
							$products->cut_id = $catalog->id;
							$products->putdate = date("Y-m-d");
							$products->product_code = $vv2;
                                                        $products->optovik = $vv4;
                                                        $products->status = $vv5;
						 $prod_already = ORM::factory('tovar')
					          ->where("product_code", "=", $vv2)
						  ->find();
                            if(!$prod_already->product_code) {
								try{
									 $products->save();
									}
								catch (ORM_Validation_Exception $e) {				
										$errors = $e->errors('validation');
								 }
							} else {
                                                 // обновить запись
                                                        $product_edit = ORM::factory('tovar', $prod_already->id)
		                                               ->where('id', '=', $prod_already->id);
                                                        $product_edit->name = $vv1;
							$product_edit->price = $vv3;
							$product_edit->user_id = $this->user->id;
							$product_edit->cut_id = $catalog->id;
							$product_edit->putdate = date("Y-m-d");
                                                        $product_edit->optovik = $vv4;
                                                        $product_edit->status = $vv5;
                                                        try{
							  $product_edit->save();
							 }
							catch (ORM_Validation_Exception $e) {				
							  $errors = $e->errors('validation');
							 }
							}
						} else {
						 $neznakomka[] = "<b>незнакомая категория: ".$vv0."</b>";
						}
					 }
					}
			$k++;
			}
fclose($handle); 
	}
        $neznakomka = array_unique($neznakomka);
	$menu = View::factory('adminka/price/v_menu', array('controller'=>'forum3'));
	$content = View::factory('adminka/price/v_price')
			->bind('menu', $menu)
			->bind('neznakomka', $neznakomka)
			->bind('errors', $errors);
        $this->template->title = 'Загурзка прайса';
        $this->template->site_name = 'Загрузка прайса';
        $this->template->block_center = array($content);
	}
 

}