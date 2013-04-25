$(function(){
        $('#multi').MultiFile({
          accept:'csv', max:1, STRING: {
            remove:'&times;',
            selected:'Выбраны: $file',
            denied:'Неверный тип файла: $ext!',
            duplicate:'Этот файл уже выбран:\n$file!'
        }});
    });