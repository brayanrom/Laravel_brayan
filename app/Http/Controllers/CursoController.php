<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;
class CursoController extends Controller
{
    public function index(){
    $cursos=Curso::all();
        //return view('curso.index');
    }
public function create(){
    return view('curso.create');
}
public function show($curso){
    //['curso'=>$curso]
    //return view('curso.show',['curso'=>$curso]);
                            //para mandar la variable
    return view('curso.show',compact('curso'));
}
}