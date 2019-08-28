@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1>Editar {{$category->category}}</h1></div> <!-- 25% -->
        <div class="col-5"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-secondary" href="/categories">Atras</a></h1></div> <!-- 25% -->
</div> 

           
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

<form action="/categories/{{$category->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <div class="row"> 

            <div class="col-1">
                    <label for="category">Categoria</label>
                    <label for="description">Descripsion</label>
            </div>

            <div class="col-11">
                <input type="text"  class="form-control" id="category" name="category" value="{{old('category')}}">
                <input type="text"  class="form-control" id="description" name="description" value="{{old('description')}}">
            </div>
    
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
       

@endsection