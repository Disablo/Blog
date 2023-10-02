<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weather;

class WeatherController extends Controller
{
    public function index() {
        $weather = Weather::find(1);
        dump($weather);
        $weather = Weather::find(2);
        dump($weather);
        $weather = Weather::find(3);
        dump($weather);
        $weather = Weather::find(4);
        dump($weather);
    }
}
