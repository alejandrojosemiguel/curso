<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //por ahora solo devolvemos cadenas de texto
    public function index(){
        return view('Cursos/index');
    }

    public function create(){
        return view('Cursos/create');
    }

    public function show($curso){
        // envio array con variables key => value o utilizo compact('curso')
        return view('Cursos/show',['curso'=>$curso]);
    }
}
