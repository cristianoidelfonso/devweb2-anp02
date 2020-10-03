<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function formCadastrar(){

        return view('admin.cursos.cadastrar_curso');

    }

    public function listar(){

        // Passando array como paramentro
        // $cursos = ['Curso 1','Curso 2','Curso 3','Curso 4','Curso 5'];

        // Obtendo todos os dados do DB atraves da método estático 'all'
        // `id`, `nome`, `carga_horaria`, `professor`, `preco`, `created_at`, `updated_at`
        $cursos = Curso::all();

        return view('admin.cursos.listar_cursos', compact('cursos') );
    }

    public function adicionarCurso(Request $request){

        // echo 'Adicionar curso'.'<br>';
        // $nome = $request->input('nome');
        // echo 'Nome: ' . $nome;

        // *****/ Sem usar o fillable na classe de modelo
        // $curso = new Curso();
        // $curso->nome = $request->input('nome');
        // $curso->carga_horaria = $request->input('carga_horaria');
        // $curso->professor = $request->input('professor');
        // $curso->preco = $request->input('preco');
        // $curso->updated_at = $request->input('updated_at');
        // $curso->created_at = $request->input('created_at');

        // $curso->save();


        // *****/ Usando o fillable na classe de modelo
        Curso::create( $request->all() );

        $request->session()->flash('sucesso', "O curso $request->nome foi salvo com sucesso!");

        return redirect()->route('listar');

    }

    public function deletarCurso($id_curso, Request $request){

        Curso::destroy($id_curso);

        $request->session()->flash('sucesso', 'Curso excluído com sucesso');

        return redirect()->route('listar');

    }

}
