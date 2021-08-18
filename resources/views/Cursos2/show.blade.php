@extends('layouts.plantilla')
@section('title','cursos '.$curso)

@section('content')
<h1>Bienvenido a la pagina de <?php echo $curso;?></h1>
<h1>Bienvenido a la pagina de {{$curso}}</h1>
@endsection