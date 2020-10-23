<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelos\Persona;//tambien obligatorio para referenciar
class PersonasController extends Controller
{
    public function showPersonas($id=null){
        if($id)
           return response()->json(["Persona"=>Persona::find($id)],200);
        return response()->json(["Personas"=>Persona::all()],200);
        //return Persona::all();   //lo mismo de arriba
    }
    public function savePersonas(Request $request){
        $guardpersonas=new Persona();
        $guardpersonas->NombrePersona=$request->NombrePersona;
        $guardpersonas->ApellidoPaPersona=$request->ApellidoPaPersona;
        $guardpersonas->ApellidoMaPersona=$request->ApellidoMaPersona;

        if($guardpersonas->save())
        return response()->json(["Personas"=>$guardpersonas],201);
        return response()->json(null,400);
    }

    public function editPersonas(Request $request, $id){
        $guardpersonas=new Persona();
        $guardpersonas=Persona::find($id);

        $guardpersonas->NombrePersona=$request->NombrePersona;
        $guardpersonas->ApellidoPaPersona=$request->ApellidoPaPersona;
        $guardpersonas->ApellidoMaPersona=$request->ApellidoMaPersona;

        if($guardpersonas->update())
            return response()->json(["Personas"=>$guardpersonas],201);
        return response()->json([null,400]);
    }
    public function deletePersonas($id=null){
        $guardpersonas=Persona::find($id);
        if($guardpersonas->delete())
            return response()->json(["Personas"=>Persona::all()],200);
        return response()->json([null,400]);
    }












}