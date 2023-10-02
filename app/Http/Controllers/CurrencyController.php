<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index() {
        $currency = Currency::find(1);
        dump($currency);
        $currency = Currency::find(2);
        dump($currency);
        $currency = Currency::find(3);
        dump($currency);
        $currency = Currency::find(4);
        dump($currency);
    }
}
