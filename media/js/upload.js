$(function(){
        $('#multi').MultiFile({
          accept:'jpg|gif|bmp|png|jpeg', max:15, STRING: {
            remove:'&times;',
            selected:'Выбраны: $file',
            denied:'Неверный тип файла: $ext!',
            duplicate:'Этот файл уже выбран:\n$file!'
        }});
    });