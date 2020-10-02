<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index']);

Route::get('/fale-conosco', [MainController::class, 'faleConosco']);

Route::get('/sobre-nos', [MainController::class, 'sobreNos']);

Route::get('/listar-cursos', [CursoController::class, 'listar']);

Route::get('/cadastrar-curso', [CursoController::class, 'cadastrar']);
