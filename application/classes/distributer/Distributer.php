<?php  defined('SYSPATH') or die('No direct script access.');

require APPPATH.'classes/phpQuery/phpQuery/phpQuery'.EXT;

class Distributer_Exception extends Exception{ }

abstract class Distributer_Distributer
{
    protected $user_id;
    protected $produc_code;
    protected $tovar_id;

    //ссылка на хост оптовика
    protected $url_base;
    //ссылка до искомого вхождения
    protected $url_part1;
    //ссылка после искомого вхождения
    protected $url_part2;
    //код оптовика
    protected $code_optovik;

    //генерируемая ссылка на страницу с описанией и картинкой
    protected $url;

    //полученный объект страницы при помощи phpQuery
    protected $page_document;
    //выдранное описание из страницы
    protected $description = '';
    //выдранный url картинки
    protected $picture = '';

    /**
     * описываем логику отда тянуть описание и записываем описание в свойство $this->description
     * Обязательный метод в потомке
     * @return mixed
     */
    abstract public function searchDescription();

    /**
     * описываем логику отда тянуть картинку и записываем url в свойство $this->picture
     * Обязательный метод в потомке
     * @return mixed
     */
    abstract public function searchPicture();

    /**
     * Ощищает код товара от лищних частей
     * обязательный метод в патомке
     */
    abstract public function sanitiseTovarCode($param);

    public static function factory($distr_name)
    {
        $class = 'Distributer_'.$distr_name;
        return new $class;
    }

    public function setUserId($u_id)
    {
        $this->user_id = $u_id;
    }

    public function setTovarId($id)
    {
        $this->tovar_id = $id;
    }

    /**
     * поиск товаров без картинок или описаний у себя и у определенного оптовика
     * @return Database_Result
     */
    public function findTovars()
    {
        return ORM::factory('tovar')
            ->where('user_id', '=', $this->user_id)
            ->and_where_open()
                ->where("pic", "=", "")
                ->or_where("description", "=", "")
            ->and_where_close()
            ->and_where("optovik", "=", $this->code_optovik)
            ->order_by( DB::expr('RAND()') )
            ->limit(2)
            ->find_all();
    }

    /**
     * скачивает страницу с описанием и создает из нее объект phpQuery
     */
    public function parsePage()
    {
        if($page = @file_get_contents($this->url)){
            sleep(1);
            $this->page_document = phpQuery::newDocument($page);
        } else {
            throw new Distributer_Exception('Не смог зайти на страницу '.$this->url);
        }
    }

    /**
     * создает ссылку страницы с описанием и картинкой товара
     * @param $param
     */
    public function createUrl($param)
    {
        $this->produc_code = $param;
        $param = $this->sanitiseTovarCode($param);
        $this->url = $this->url_part1.$param.$this->url_part2;
    }

    public function saveDescription()
    {
        $tovar = ORM::factory('tovar', $this->tovar_id);
        $tovar->description = $this->description;
        $tovar->save();
    }

    /**
     * по найденой url картинки скачивает ее в директории категорий и записываем в базу данных
     * @param $cat_id string номер категории товара
     */
    public function uploadImage($cat_id)
    {
        $picture = pathinfo($this->picture);

        $dir = DOCROOT.DIRECTORY_SEPARATOR."media/uploads/eshop/".$cat_id."/";
        if (!is_dir($dir)) {
            @mkdir($dir, 0777);
        };
        if($this->picture[0] == '/'){
            $image_path = substr($this->picture, 1);
        } else {
            $image_path = $this->picture;
        }

        $picture_url = $this->url_base.$image_path;
        $pic_name = $this->produc_code.'_'.date('Y_m_d_h_i').'.'.$picture['extension'];
        $pic_name_s = 'small_'.$pic_name;

        if (!@copy($picture_url, $dir.$pic_name)) {
            throw new Distributer_Exception('Не удалось скачать картинки '.$picture_url);
        } else {
            $im = Image::factory($dir.$pic_name);
            if($im->width > 500){
                $im->resize(500, 500)->save($dir.$pic_name);
            }
            Image::factory($dir.$pic_name)->resize(150,150)->save($dir.$pic_name_s);

            //запись в базу картинки
            $tovar = ORM::factory('tovar', $this->tovar_id);
            $tovar->pic = $cat_id.'/'.$pic_name;
            $tovar->pic_small = $cat_id.'/'.$pic_name_s;
            $tovar->save();

        }
    }
}
