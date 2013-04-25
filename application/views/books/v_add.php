Добавление новой книги.

<?=Form::open( 'books/add', array(
    'class' => 'addform',
    'enctype' => 'multipart/form-data'
))?>
<?

?>
<?=Form::input('name')?>
<?=Form::input('author')?>
<?=Form::input('year')?>
<?=form::file('image')?>
<?=form::textarea('discriprion')?>
<?=Form::select('subcategory', $cater)?>
<?=form::input('sostoyanie')?>
<?=Form::submit('', 'Добавить')?>
<?=form::close()?>

