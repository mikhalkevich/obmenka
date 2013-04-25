<?php defined('SYSPATH') or die('No direct script access.');

class Model_Text extends Model {

    // Все новости
    public function all_text()
    {
        return array(
                'Изображение 1' => 'Название товара',
                'Изображение 2' => 'Название второго товара',
                'Изображение 3' => 'Третий товар',
            );
    }

} 
