<?php  defined('SYSPATH') or die('No direct script access.');

class Distributer_Google extends Distributer_Distributer
{
    protected $url_base = '';
    protected $url_part1 = '';
    protected $url_part2 = '';
    protected $code_optovik = 995;

    //очищает код - оставляем только целое число от него
    public function sanitiseTovarCode($param)
    {
        return $param;
    }

    public function searchDescription(){
        return false;
    }

    public function SearchPicture(){
        return false;
    }

    public function googleSearchPicture($request)
    {
        $request = str_replace(' ', '%20', $request);
        $jsrc = "http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=".$request;
        $json = file_get_contents($jsrc);
        $jset = json_decode($json, true);

        //поиск ссылки на картинку пока не получим нормальную без GET пораметров
        $pic_num = 0;
        do{
            if(isset($jset["responseData"]["results"][$pic_num]["url"])){
                $url = $jset["responseData"]["results"][$pic_num]["url"];
                $ext = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                $pic_num++;
            } else {
                throw new Distributer_Exception('Не удалось найти картинку на google.com');
            }
        }while(!in_array($ext, array('jpg','png', 'gif')));

        $url = str_replace('%2520', ' ', $url);
        $url = parse_url($url);
        $this->url_base = 'http://'.$url['host'].'/';
        $this->picture = $url['path'];


    }
}
