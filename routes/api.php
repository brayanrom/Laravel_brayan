<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PersonasController;//necesario para que funcione ;v
use App\Http\Controllers\ProductosController;
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
Route::get("/personas/{id?}",[PersonasController::class,'showPersona'])->where("id","[0-9]+");
//Route::get("/personas/{id?}","PersonasController@showPersona")->where("id","[0-9]+");  //no funciona de esta manera
Route::post("/personas/{id?}",[PersonasController::class,'savePersona']);
                            //PRODUCTOS
Route::get('/productos/{id?}',[ProductosController::class,'showProductos'])->where("id","[0-9]+");
Route::post("/productos/{id?}",[ProductosController::class,'saveProductos']);

                            
