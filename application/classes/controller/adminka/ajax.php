<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */
class Controller_Adminka_Ajax extends Controller {
 public function action_index() { 
 require APPPATH.'classes/phpQuery/phpQuery/phpQuery'.EXT;
 $pic = ORM::factory('tovar')
      ->where("pic", "=", "")
	  ->order_by( DB::expr('RAND()') )
	  ->limit(3)
	  ->find_all();
  foreach($pic as $pic_one){
      
  $str = @ereg_replace(" ", "+", $pic_one->name);
  
  $habrablog = file_get_contents('https://www.google.by/search?q='.$str.'&hl=ru&tbo=d&source=lnms&tbm=isch&sa=X&ei=bu_RUIyxJInusgaz_4HgBw&ved=0CAcQ_AUoAA&biw=1366&bih=664#q=Ch-300AXSN/Blue-JP-15-5+%D0%9A%D1%80%D0%B5%D1%81%D0%BB%D0%BE+%28%D1%81%D0%B8%D0%BD%D0%B5%D0%B5%29&hl=ru&tbo=d&tbs=isz:l&tbm=isch&source=lnt&sa=X&ei=oPDRUNfmH6iR4ATis4DwCw&ved=0CB4QpwUoAQ&bav=on.2,or.r_gc.r_pw.r_cp.r_qf.&bvm=bv.1355534169,d.Yms&fp=f3a635762d61d140&bpcl=40096503&biw=1366&bih=664');
  
  $document = phpQuery::newDocument($habrablog);
  
  $hentry = $document->find('.images_table a:eq(0)')->attr("href");
  if(!$hentry) {
   $hentry = $document->find('.images_table a:eq(1)')->attr("href");
  }
  
  $pieces = explode("&", $hentry);
  $pieces1 = explode("=", $pieces[0]);
  $result_img = @ereg_replace("%2520", " ", $pieces1[1]); 
 
	   $arr = explode('.', $result_img);
	   $fileend = end($arr);
	   $newarr = explode('/', prev($arr));
	   $fileprev = end($newarr);
	   $picture_name = @ereg_replace(" ", "_", $fileprev);
	   $pic_with = trim($pic_one->product_code."_".date('Y_m_d_h_i').".".$fileend);
	   $pic = @ereg_replace("/", "_", $pic_with);
	   $pic_small = "s_".$pic;
	   $dir =$_SERVER["DOCUMENT_ROOT"].Kohana::$base_url."media/uploads/eshop/".$pic_one->cut_id."/";
		$newfile = $dir.$pic;
		$newfile_small = $dir.$pic_small;
	 
		if (!is_dir($dir)) {
		 @mkdir($dir, 0777);
		 }
		//$im = Image::factory($result_img)->save($newfile);
		
		  if (!@copy($result_img, $newfile)) {
		   echo "не удалось скопировать $pic...\n";
		  } else {
		$im = Image::factory($newfile);
		  if($im->width > 500){
		     $im->resize(500, 500)->save($newfile);
		   }
		$im = Image::factory($newfile)->resize(150, 150)->save($newfile_small);
				$id = $pic_one->id;
		$a = ORM::factory("tovar", $id);
		$a ->pic = $pic_one->cut_id."/".$pic;
		$a ->pic_small = $pic_one->cut_id."/".$pic_small;
		$a -> save();
	         
		}
		if($pic){
		$picture = "<img src='".Kohana::$base_url."media/uploads/eshop/".$pic_one->cut_id."/".$pic."' />";
		} else {
		$picture = "<p class='red'>изображение не скачено</p>";
		}
	  echo "<h1>".$pic_one->product_code."</h1>";
	  echo $picture;
	  echo "<p class='green'><a href='".Kohana::$base_url."tovars/sell/".$pic_one->id."/more'>".$pic_one->name."</a></p>";
	  echo "<hr />";
 
    sleep(5);
  }
 }
 
 public function action_desc() { 
 require APPPATH.'classes/phpQuery/phpQuery/phpQuery'.EXT;
 $pic = ORM::factory('tovar')
      ->where("description", "=", "")
	  ->and_where("product_code", "LIKE", "%1005")
	  ->order_by( DB::expr('RAND()') )
	  ->limit(3)
	  ->find_all();
  foreach($pic as $pic_one){
  $str = @ereg_replace("/1005", "", $pic_one->product_code);
  $link = 'http://www.nix.ru/autocatalog/dd/dd_'.$str.'.html';
  $link = @ereg_replace(" ", "", $link);
  $habrablog = file_get_contents($link);


  $document = phpQuery::newDocument($habrablog);
  
  $hentry = $document->find('#PriceTable');

  foreach ($hentry as $el) {
    $pq = pq($el); // Это аналог $ в jQuery
    $pq->find('a')->remove(); // удаляем ненужный элемент
  }

    $rezult = iconv("windows-1251", "utf-8", $hentry);
		$a = ORM::factory("tovar", $pic_one->id);
		$a ->description = $rezult;
		$a -> save(); 
	echo "<hr />";
	echo "<h1>".$pic_one->product_code."</h1>";
	echo HTML::anchor("tovars/sell/".$pic_one->id."/more", $pic_one->name, array('target'=>'_blank'));
    sleep(5);
		}
  }

    public function action_findDescription()
    {
        $user = Auth::instance()->get_user();
        $distributer_folder = APPPATH.'classes'.DIRECTORY_SEPARATOR.'distributer'.DIRECTORY_SEPARATOR;
        if(!empty($_POST['distributer']) and file_exists($distributer_folder.$_POST['distributer'].EXT)){
            $class = $_POST['distributer'];

            $distributer = Distributer_Distributer::factory($class);
            $distributer->setUserId($user->id);

            $report = array();
            $item = array();
            foreach($distributer->findTovars() as $tovar){
                $item['name'] = $tovar->name;

                try{
                    $distributer->setTovarId($tovar->id);
                    $distributer->createUrl($tovar->product_code);
                    $distributer->parsePage();

                    if(empty($tovar->description)){
                        if($distributer->searchDescription()){
                            $distributer->saveDescription();
                            $item['description'] = 'найдено';
                        } else{
                            $item['description'] = 'не найдено';
                        }
                    }

                    try{
                        if(empty($tovar->pic)){
                            if($distributer->searchPicture()){
                                $distributer->uploadImage($tovar->cut_id);
                                $item['picture'] = 'найдена';
                            } else {
                                $google = Distributer_Distributer::factory('Google');
                                $google->setTovarId($tovar->id);
                                $google->createUrl($tovar->product_code);
                                $google->googleSearchPicture($tovar->name);
                                $google->uploadImage($tovar->cut_id);
                                $item['picture'] = 'найдена';
                            }
                        }
                    } catch(Distributer_Exception $e){
                        $item['picture'] = $e->getMessage();
                    }

                }catch(Distributer_Exception $e){
                    $item['error'] = $e->getMessage();
                }
                $report[$tovar->id] = $item;
                $item = array();
                sleep(3);
            }

            if(!empty($report)){
                foreach($report as $item_id => $item_data){
                    echo '<hr/>';
                    echo HTML::anchor('tovars/sell/'.$item_id.'/more', 'Товар: '.$item_id.' '.$item_data['name']), '<br/>';
                    if(isset($item_data['error'])){
                        echo $item_data['error'].'<br/>';
                    }
                    if(isset($item_data['description'])){
                        echo 'Описание: ',$item_data['description'].'<br/>';
                    }
                    if(isset($item_data['picture'])){
                        echo 'Картинка: ',$item_data['picture'];
                    }
                }
            } else {
                echo "У вас нет товаров от выбранного поставщика";
            }
        } else {
            echo "нет правил для этого поставщика";
        }
    }
 
}