<?=Form::open('tovars/sell/mypar/search')?>
<div align="center">
<table>
 <tr>
  <td colspan="2" valign="top"><?=Form::input('namesearch', '', 
          array('class' => 'span5', 'placeholder'=>'Поиск по названию'))?></td>
 </tr>
 <tr>
  <td>
<div class="mysearch">
<label class="radio inline">
<input type="radio" name="optionsRadios" id="optionsRadios1" value="name" checked>
<div class="under_search">По названию</div>
</label>
<label class="radio inline">
<input type="radio" name="optionsRadios" id="optionsRadios2" value="code">
<div class="under_search">По коду товара</div>
</label>
</div>  
  </td>
  <td valign="top" class="forbtn" align="right"><?=Form::submit('submit', 'Искать', 
          array('class'=>'btn btn-primary'))?></td>
 </tr>
</table>
</div>
<?=Form::close()?>
