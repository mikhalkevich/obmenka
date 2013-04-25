<h1>
<?php

foreach($countries as $country){
    echo html::anchor('/',$country->name)."<br />";
    foreach($country->city->find_all() as $city){
        echo "--".html::anchor('/',$city->name)."<br />";
    }
}
?>
</h1>