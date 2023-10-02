<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Security;

class SecurityController extends Controller
{
    public function index() {
        $security = Security::find(1);
        dump($security);
        $security = Security::find(2);
        dump($security);
    }
}
