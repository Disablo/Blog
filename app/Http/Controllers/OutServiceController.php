<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class OutServiceController extends Controller
{
    public function index() {
        $service = Service::find(1);
        dump($service);
        $service = Service::find(2);
        dump($service);
        $service = Service::find(3);
        dump($service);
        $service = Service::find(4);
        dump($service);
    }
}
