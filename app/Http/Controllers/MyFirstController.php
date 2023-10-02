<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\First;

class MyFirstController extends Controller
{
    public function index() {
        $first = First::find(1);
        dump($first);
    }
}
