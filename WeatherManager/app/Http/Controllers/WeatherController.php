<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $client = new Client();
        $weatherToDay = $client->get('https://api.openweathermap.org/data/2.5/weather?q=Hanoi&appid=055b98c98827766723f092cf46e685b6');
        $dataWeather = $weatherToDay->getBody();
        $dataJson = $dataWeather->getContents();
        $weather = json_decode($dataJson);
        dd($weather);
        $th = date('l');
        $date = date('jS M Y');

        return view('index',compact('weather','th','date'));
    }
}
