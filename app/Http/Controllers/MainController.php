<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('admin.layouts.index');
    }

    public function faleConosco(){
        return view('admin.layouts.fale_conosco');
    }

    public function sobreNos(){
        return view('admin.layouts.sobre');
    }
}
