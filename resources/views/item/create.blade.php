@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1>Nueva Equipo</h1></div> <!-- 25% -->
        <div class="col-5"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-secondary" href="/items">Atras</a></h1></div> <!-- 25% -->
</div> <br>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/items" method="POST">
    @csrf
    <div class="form-group">

        <div class="row"> 
            <div class="col-1">
                <label for="item">Equipo</label>
                <label for="description">Descripsion</label>
            </div>
            <div class="col-11">
                <input type="text"  class="form-control" id="item" name="item" value="{{old('item')}}">
                <input type="text"  class="form-control" id="description" name="description" value="{{old('description')}}">
            </div>
        </div>

        <br>
        <h3>Pertenece a las siguientes Categorias:</h3>
        <br>

        <div class="form-check">
                @foreach ($categories as $category)
                    <input class="form-check-input" type="checkbox" value="{{$category->id}}" id='{{$category->id}}' name='categories[{{ $category->id }}]'>
                    <label class="form-check-label" for="{{$category->id}}">
                        {{$category->category}} 
                    </label><br>
                @endforeach    
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
       

@endsection