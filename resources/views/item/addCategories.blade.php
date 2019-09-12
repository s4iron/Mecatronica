@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1 style="color:MidnightBlue;font-family:verdana;">{{$item->item}}</h1></div> <!-- 25% -->
        <div class="col-7"></div> <!-- 75% -->
        <div class="col-1"><h1><a class="btn btn-secondary" href="/items">Atras</a></h1></div> <!-- 25% -->
</div> 

<h3>Asignar categorias</h3>

<form action="/items/{{$item->id}}/edit/addCategories" method="POST">
    @csrf
    <div class="form-group">
        <div class="form-check">
                @foreach ($categories as $category)
                    <input class="form-check-input" type="checkbox" value="{{$category->id}}" id='{{$category->id}}' name='categories[{{ $category->id }}]'>
                    <label class="form-check-label" for="{{$category->id}}">
                        {{$category->category}} 
                    </label><br>
                @endforeach    
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Actualizar categorias</button>
</form>     
@endsection