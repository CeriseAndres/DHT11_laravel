<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeatherFromApi () {
        $url = file_get_contents('https://www.prevision-meteo.ch/services/json/saint-etienne-42');
        
        $getWeather=json_decode($url); //true = tableau
        $getTemp=$getWeather->current_condition->tmp;
        
        return view('weather')->withGetWeather($getWeather);
        }
}
