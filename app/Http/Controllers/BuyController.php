<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy;

class BuyController extends Controller
{
    public function index() {
        $buy = Buy::find(1);
        dump($buy);
        $buy = Buy::find(2);
        dump($buy);
        $buy = Buy::find(3);
        dump($buy);
        $buy = Buy::find(4);
        dump($buy);
        $buy = Buy::find(5);
        dump($buy);

    }
}
