<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PersonasController;//necesario para que funcione ;v
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ComentariosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return "hola mundo";
});
//Route::get('holacontroller', HomeController::class);
//Route::get('curso', [CursoController::class,'index']);
//Route::get('curso/create', [CursoController::class,'create']);
//Route::get('curso/{curso}', [CursoController::class,'show']);


                            //PERSONAS
Route::get("/personas/{id?}",[PersonasController::class,'showPersonas'])->where("id","[0-9]+");
//Route::get("/personas/{id?}","PersonasController@showPersona")->where("id","[0-9]+");  //no funciona de esta manera
Route::post("/personas/{id?}",[PersonasController::class,'savePersonas']);
Route::put("/personas/{id?}",[PersonasController::class,'editPersonas'])->where("id","[0-9]+");
Route::delete("/personas/{id?}",[PersonasController::class,'deletePersonas'])->where("id","[0-9]+");


                            //PRODUCTOS
Route::get('/productos/{id?}',[ProductosController::class,'showProductos'])->where("id","[0-9]+");
Route::post("/productos/{id?}",[ProductosController::class,'saveProductos']);
Route::put('/productos/{id?}',[ProductosController::class,'editProductos'])->where("id","[0-9]+");
Route::delete('/productos/{id?}',[ProductosController::class,'deleteProductos'])->where("id","[0-9]+");


                            //COMENTARIOS
Route::get('/comentarios/{id?}',[ComentariosController::class,'showComentarios'])->where("id","[0-9]+");
Route::post('/comentarios/{id?}',[ComentariosController::class,'saveComentarios']);
Route::put('/comentarios/{id?}',[ComentariosController::class,'editComentarios'])->where("id","[0-9]+");
Route::delete('/comentarios/{id?}',[ComentariosController::class,'deleteComentarios'])->where("id","[0-9]+");
