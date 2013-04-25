<?php  defined('SYSPATH') or die('No direct script access.');

class Distributer_Nix extends Distributer_Distributer
{
    protected $url_base = 'http://www.nix.ru/';
    protected $url_part1 = 'http://www.nix.ru/autocatalog/dd_';
    protected $url_part2 = '.html';
    protected $code_optovik = 1005;

    //сслыка на папку где лежат картинка для данного товара
    private $picture_link;

    //очищает код - оставляем только целое число от него
    public function sanitiseTovarCode($param)
    {
        $tovar_id = UTF8::str_ireplace('/1005', '', $param);
        $tovar_id = filter_var($tovar_id, FILTER_SANITIZE_NUMBER_INT);
        return $tovar_id;
    }

    public function searchDescription()
    {
        $this->description = $this->page_document->find('#PriceTable');
        $this->description->find('a')->remove();
        if(!empty($this->description)){
            $this->description = iconv("windows-1251", "utf-8", $this->description);
            return true;
        } else {
            return false;
        }
    }

    public function searchPicture()
    {
        $picture_name = $this->page_document->find('#link_to_view_photo img')->attr('src');

        $this->picture = $this->picture_link.'/'.$picture_name;

        if(!empty($this->picture)){
            return true;
        } else {
            return false;
        }
    }

    public function createUrl($tovar_code){
        $this->produc_code = $tovar_code;
        $tovar_code = $this->sanitiseTovarCode($tovar_code);

        //получили содержание страницы в которой находиться js который перезагружает страницу
        /*** Приме полученной страницы
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
        <html>
        <head>
        </head>
        <body>
        <script>
        var goods_href = "as222tve222/as222tve222_notebook/AS222tve222_K95V_90NB00C1M00710_i7_3610QM_750_DVDRW_GT635M_WiFi_BT_Win8_18.4_4.15_146772.html";
        var Hjsj = goods_href.replace(/222tve222/g, "us");
        //	alert(Hjsj);
        window.location.replace("http://www.nix.ru/autocatalog/"+Hjsj);
        </script>
        </body>
        </html>
         * ***/
        if(!$page1 = @file_get_contents('http://www.nix.ru/2id.php?i='.$tovar_code)){
            throw new Distributer_Exception('Не смог зайти на страницу http://www.nix.ru/2id.php?i='.$tovar_code);
        }

        $temp = array();
        //получаем сслыку goods_href
        preg_match('/(?<=goods_href = ")((\S|\s)*?)(?=";)/', $page1, $temp);
        $new_link = $temp[0];

        //получаем строку шаблона замены
        preg_match('/(?<=goods_href.replace\(\/)((\S|\s)*)(?=\/g,)/', $page1, $temp);
        $what = $temp[0];

        //получаем строку на что заменяют
        preg_match('/(?<=\/g, ")((\S|\s)*)(?="\);)/', $page1, $temp);
        $to =  str_replace('\.', '.', $temp[0]);;

        //в итоге получена правильная ссылка
        $link = str_replace($what, $to, $new_link);


        //приводим относительную ссылку к абсолютной
        $this->url = $this->url_base.'autocatalog/'.$link;

        //получаем путь к папке где картинки храняться
        $this->picture_link = dirname('autocatalog/'.$link);
    }
}
