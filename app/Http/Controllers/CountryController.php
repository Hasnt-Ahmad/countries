<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
class CountryController extends Controller
{
    //
    public function displayCountry(Request $request){

        $country=Country::join('states', 'countries.id', '=', 'states.country_id')
        ->join('cities', 'cities.state_id', '=', 'states.id')->select("states.name as state_name","cities.name as city_name","countries.name as country_name")->get();
        $groupedData = [];

        foreach ($country as $item) {
            $countryName = $item['country_name'];
            $stateName = $item['state_name'];
            $cityName = $item['city_name'];

            if (!isset($groupedData[$countryName])) {
                $groupedData[$countryName] = [];
            }

            if (!isset($groupedData[$countryName][$stateName])) {
                $groupedData[$countryName][$stateName] = [];
            }

            $groupedData[$countryName][$stateName][] = $cityName;
            }
            

        return view("country",["groupedData"=>$groupedData]);
    }
}
