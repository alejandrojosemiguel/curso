<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso2Controller extends Controller
{
    //por ahora solo devolvemos cadenas de texto
    public function index(){
        return view('Cursos2/index');
    }

    public function create(){
        return view('Cursos2/create');
    }

    public function show($curso){
        // envio array con variables key => value o utilizo compact('curso')
        return view('Cursos2/show',['curso'=>$curso]);
    }
}
