<form>
	<fieldset class="control-group">
		<legend>
			Поиск
		</legend>
		<div>
			<?=Form::label('date_of', 'С какого времени')?>
			<?=Form::input('date_of','',array('type'=>'date'))?>
		</div>
		<div>
			<?=Form::label('date_on', 'До какого времени')?>
			<?=Form::input('date_on','',array('type'=>'date'))?>
		</div>
		<div>
			<?=Form::label('country', 'Страна')?>
			<select name="country" size = "1">
				<?foreach($countries as $country){
					echo "<option value=\"country_$country->id\">$country->name</option>";
					foreach($country->city->find_all() as $city){
    					echo "<option value=\"city_$city->id\">--$city->name</option>";
    				}
				}
				?>
			</select>
		</div>
		<button type="submit" class="btn">Искать!</button>
	</fieldset>
</form>