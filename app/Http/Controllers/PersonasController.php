<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Modelos\Persona;

class PersonasController extends Controller
{
    public function showPersona(){
        return Persona::all();
    }
}
