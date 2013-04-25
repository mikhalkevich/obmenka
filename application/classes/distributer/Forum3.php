<?php  defined('SYSPATH') or die('No direct script access.');

class Distributer_Forum3 extends Distributer_Distributer
{
    protected $url_base = 'http://www.forum3.ru/';
    protected $url_part1 = 'http://www.forum3.ru/?cmd=show_tovar&code=';
    protected $url_part2 = '&prn=1';
    protected $code_optovik = 995;

    //очищает код - оставляем только целое число от него
    public function sanitiseTovarCode($param)
    {
        return filter_var($param, FILTER_SANITIZE_NUMBER_INT);
    }

    public function searchDescription()
    {
        $this->description = $this->page_document->find('.characteristicBox table')->html();
        if(!empty($this->description)){
            $this->description = iconv("windows-1251", "utf-8", '<table>'.$this->description.'</table>');
            return true;
        } else {
            return false;
        }
    }

    public function searchPicture()
    {
        $this->picture = $this->page_document->find('a.fancybox_tovar_galery img')->attr('src');

        if(!empty($this->picture)){
            //если на сайте нет фотки а стандартная картинка то ищем в google
            if(strpos($this->picture, 'nophoto_500_500.png')){
                return false;
            }
            return true;
        } else {
            return false;
        }
    }
}
