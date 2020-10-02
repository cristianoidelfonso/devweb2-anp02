<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function cadastrar(){
        return view('admin.cursos.cadastrar_curso');
    }

    public function listar(){
        return view('admin.cursos.listar_cursos');
    }

}
