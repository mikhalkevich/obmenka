<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Country_Main extends Controller_Index{


    public function before() {

        parent::before();
        $countries = ORM::factory('country')->find_all();
        $country=View::factory('blocks/v_block_country')
                    ->bind('countries', $countries);
        $this->template->block_center=$country;
    }

    public function action_index(){

        //foreach($countries as $country){
          //  echo $country->name."<br />";
            //foreach($country->city->find_all() as $city){
              //  echo "--".$city->name."<br />";
            //}
        //}

    }

}