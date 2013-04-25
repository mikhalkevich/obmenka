<h1>Поиск ночлега</h1>

<?foreach ($overnights as $overnight):?>
<table class="table">
    <tbody>
        <tr>
            <td rowspan="7"><span class="image"><img src="<?=$overnight->pic?>" /></span></td>
            <td align="center" colspan="2"><h4><?=$overnight->name?></h4></td>
       </tr>
       <tr>
            <td>Описание</td>
            <td><?=$overnight->description?></td>
       </tr>
       <tr>
            <td>Адрес</td>
            <td><?=$overnight->address?></td>
       </tr>
       <tr>
            <td>Дата заезда</td>
            <td><?=$overnight->date_of?></td>
       </tr>
       <tr>
            <td>Дата отъезда</td>
            <td><?=$overnight->date_to?></td>
       </tr>
       <tr>
            <td>Количество человек</td>
            <td><?=$overnight->kolichestvo?></td>
       </tr>
       <tr>
            <td>Правила проживания</td>
            <td><?=$overnight->rules?></td>
       </tr> 
    </tbody>
</table>
<button type ="submit" class="btn">Хочу!</button>
<hr>
<?endforeach?>




