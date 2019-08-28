@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1>Borrar {{$category->category}}</h1></div> <!-- 25% -->
        <div class="col-5"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-secondary" href="/categories">Atras</a></h1></div> <!-- 25% -->
</div> 

<p>Descripsion: {{$category->description}}</p>
        
<form action="/categories/{{$category->id}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Confirmar Borrado</button>
</form>

@endsection