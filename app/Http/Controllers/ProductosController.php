<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelos\Producto;
class ProductosController extends Controller
{
    public function showProductos($id=null){
        if($id)
           return response()->json(["producto"=>Producto::find($id)],200);
        return response()->json(["productos"=>Producto::all()],200);
    }
    public function saveProductos(Request $request){
        $guardproductos=new Producto();
        $guardproductos->NombreProducto=$request->NombreProducto;
        if($guardproductos->save())
        return response()->json(["Productos"=>$guardproductos],201);
        return response()->json(null,400);
    }
    public function editProductos(Request $request, $id){
        $guardproductos=new Producto();
        $guardproductos=Producto::find($id);

        $guardproductos->NombreProducto = $request->NombreProducto;

        if($guardproductos->update())
            return response()->json(["Productos"=>$guardproductos],201);
        return response()->json([null,400]);
    }
    public function deleteProductos($id=null){
        $guardproductos=Producto::find($id);
        if($guardproductos->delete())
            return response()->json(["Productos"=>Producto::all()],200);
        return response()->json([null,400]);
    }
}