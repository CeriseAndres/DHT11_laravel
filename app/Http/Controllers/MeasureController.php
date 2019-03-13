<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Donnees;

class MeasureController extends Controller
{
    public function show()
    {   
        $measures=DB::select('select id, date, temperature, humidite from Donnees_MyDHT11');
        return view('thermometer')->with('measures', $measures);
        
    }
    public function getLastMeasure()
    {
        $lastMeasure=DB::select('select id, date, temperature, humidite from Donnees_MyDHT11 ORDER BY id DESC LIMIT 1');
        
        $getWeather=$this->getWeatherFromApi();
        return view('thermometer')->with('measures', $lastMeasure)->withGetWeather($getWeather);
        
    }
    public function getWeatherFromApi () {
        $url = file_get_contents('https://www.prevision-meteo.ch/services/json/saint-etienne-42');
        
        $getWeather=json_decode($url); //true = tableau
        
        //return view('weather')->withGetWeather($getWeather)-;
        return $getWeather;
    }
    public function chart()
    {
        $result = DB::select('select id, date, temperature, humidite from Donnees_MyDHT11 ORDER BY id DESC LIMIT 24');
        return response($result);
    }
}