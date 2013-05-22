<div class="mytable_account">
	 <div class="foruser_account">
 
  	   <div class="foruser_account_btn">Мои книги</div>     
	</div>
<div class="maincode">
    <?if(isset($errors)):?>
    <?foreach($errors as $err):?>
    <div class="error"><?=$err?></div>
    <?endforeach?>
    <?endif?>
    <?=Form::open('books/mybook/0',array('method'=>'post','enctype'=>'multipart/form-data'));?>
    <table class="left_form" cellpadding="0" cellspacing="0">
       <tr> 
           <td class="first" width="200px" valign="top">
               Рубрика <b>*</b>
           </td>
           <td>
               <?=Form::input('category', '', array('id'=>'thema'));?>
             
           </td> 
       </tr>
       <tr>
           <td class="first" valign="top">
               Название книги <b>*</b>
           </td>
           <td>
               <?=form::input('name','')?>
           </td>
       </tr>
       <tr>
           <td class="first" valign="top">
               Автор
           </td>
           <td>
               <?=form::input('author','')?>
           </td>
       </tr>
       <tr>
           <td class="first" valign="top">
               Год, издательство
           </td>
           <td>
               <?=form::input('year','')?>
           </td>
       </tr>
       <tr>
           <td class="first" valign="top">
               Условия/пожелания
           </td>
           <td>
               <?=form::textarea('wishes','')?>
           </td>
       </tr>
       <tr>
           <td>
               &nbsp;
           </td>
           <td>
    <?=Form::submit('submit', 'Добавить',array('class'=>'btn'))?>
           </td>
       </tr>
    </table>
    <?=Form::close()?>
</div>
    <p align="center">$pagination</p>
    <br style="clear:both">
</div>
    <script>
        $(function(){
            var datar = [<?=$cat_all_arr?>];
            
            $("#thema").autocomplete(datar);
            
        });
    </script>