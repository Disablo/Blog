<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function index() {
        $login = Login::find(1);
        dump($login);
        $login = Login::find(2);
        dump($login);
        $login = Login::find(3);
        dump($login);
        $login = Login::find(4);
        dump($login);
        $login = Login::find(5);
        dump($login);
        $login = Login::find(6);
        dump($login);
    }
}
