<!DOCTYPE html>
<html>
<head>
    
<?foreach ($bootstrapStyles as $style):?>
    <?=html::style($style)?>
<?endforeach?>
<?foreach ($bootstrapScripts as $script):?>
    <?=html::script($script)?>
<?endforeach?>

</head>
<body>
    
    <h2>Наше меню представленное при помощи bootstrap</h2>

    <ul class="nav nav-list">
        <li class="nav-header">Книги</li>
        <?foreach ($categories as $category):?>
        <li class="active"><a href=""><?=$category->name?></a></li>
            <?foreach ($category->booksubcategories->find_all() as $subcategory):?>
                <li><a href="">---<?=$subcategory->name?></a></li>
            <?endforeach?>
        <?endforeach?>
    </ul>

</body>
</html>