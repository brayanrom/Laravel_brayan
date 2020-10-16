<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{                     //invoke solo funciona con una unica ruta
    public function __invoke(){
        return view('home');
    }
}
