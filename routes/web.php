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


//*****/ Controlador MainController
Route::get('/', [MainController::class, 'index']);

// Agrupamento de rotas
Route::prefix('/')->group(function(){
    Route::get('fale-conosco', [MainController::class, 'faleConosco']);
    Route::get('sobre-nos', [MainController::class, 'sobreNos']);
});

// Route::get('/fale-conosco', [MainController::class, 'faleConosco']);
// Route::get('/sobre-nos', [MainController::class, 'sobreNos']);



//*****/ Controlador CursoController
// Rotas nomeadas
Route::get('/listar-cursos', [CursoController::class, 'listar'])->name('listar');

Route::get('/cadastrar-curso', [CursoController::class, 'formCadastrar'])->name('cadastrar');

// Rota para salvar os dados
Route::post('/cadastrar-curso', [CursoController::class, 'adicionarCurso'])->name('adicionar');

// Rota para deletar um curso do banco de dados
Route::delete('/deletar-curso/{id}', [CursoController::class, 'deletarCurso'])->name('deletar');


// Route::post('/cadastrar-curso', [CursoController::class, 'adicionarCurso'])->name('adicionar');
