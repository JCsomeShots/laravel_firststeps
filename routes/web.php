<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('/shop', [ShopController::class, 'index']);



//grupo de rutas

// Route::get('/cursos', [CursoController::class, 'index']);
// Route::get('cursos/create', [CursoController::class, 'create']);
// Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show']);

Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}/{categoria?}', 'show');
    
});



Route::get('prueba', function () {
    return "has accedido a esta ruta";
})->middleware('age');

Route::get('no-autorizado', function () {
    return "usted no es mayor de edad";
});



// Route::get('/cursos/{curso}/{categoria?}', function ($curso , $categoria = null) {
//     if($categoria){
//         return "Bienvenido al curso : $curso, de la categoria $categoria";
//     }else {
//         return "Bienvenido al curso : $curso";
//     }
// });

