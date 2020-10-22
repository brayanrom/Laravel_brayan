<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\API\PersonasController;

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
Route::get('holacontroller', HomeController::class);
Route::get('curso', [CursoController::class,'index']);
Route::get('curso/create', [CursoController::class,'create']);
Route::get('curso/{curso}', [CursoController::class,'show']);
Route::get("personas",[PersonasController::class,'showPersona']);


