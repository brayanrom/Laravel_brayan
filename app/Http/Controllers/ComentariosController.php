<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Modelos\Comentario;
class ComentariosController extends Controller
{
    public function showComentarios($id=null){
        if($id)
           return response()->json(["Comentario"=>Comentario::find($id)],200);
        return response()->json(["Comentarios"=>Comentario::all()],200);
    }
    public function saveComentarios(Request $request){
        $guardComentarios=new Comentario();
        $guardComentarios->comentario=$request->comentario;
        $guardComentarios->id_Producto=$request->id_Producto;
        $guardComentarios->id_Persona=$request->id_Persona;

        if($guardComentarios->save())
        return response()->json(["Comentario"=>$guardComentarios],201);
        return response()->json(null,400);
    }



    public function editComentarios(Request $request, $id){
        $guardComentarios=new Comentario();
        $guardComentarios=Comentario::find($id);

        $guardComentarios->comentario=$request->comentario;
        $guardComentarios->id_Producto=$request->id_Producto;
        $guardComentarios->id_Persona=$request->id_Persona;

        if($guardComentarios->update())
            return response()->json(["Comentario"=>$guardComentarios],201);
        return response()->json([null,400]);
    }
    public function deleteComentarios($id=null){
        $guardComentarios=Comentario::find($id);
        if($guardComentarios->delete())
            return response()->json(["Comentario"=>Comentario::all()],200);
        return response()->json([null,400]);
    }









    
}