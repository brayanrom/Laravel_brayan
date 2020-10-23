<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelos\Persona;//tambien obligatorio para referenciar
class PersonasController extends Controller
{
    public function showPersona($id=null){
        if($id)
           return response()->json(["Persona"=>Persona::find($id)],200);
        return response()->json(["Personas"=>Persona::all()],200);
        //return Persona::all();   //lo mismo de arriba
    }
    public function savePersona(Request $request){
        $guardpersonas=new Persona();
        $guardpersonas->NombrePersona=$request->NombrePersona;
        $guardpersonas->ApellidoPaPersona=$request->ApellidoPaPersona;
        $guardpersonas->ApellidoMaPersona=$request->ApellidoMaPersona;

        if($guardpersonas->save())
        return response()->json(["productos"=>$guardpersonas],201);
        return response()->json(null,400);
    }
}