@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1 style="color:MidnightBlue;font-family:verdana;">{{$item->item}}</h1></div> <!-- 25% -->
        <div class="col-5"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-secondary" href="/items">Atras</a></h1></div> <!-- 25% -->
</div> 

<div><p>Cantidad: {{$item->quantity}}</p></div>

<h5>Categorias pertenecientes</h5>

<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col-6">Categoria</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($item->categories as $item->category)

            <tr>
                <div class="col-3"><td >{{$item->category->category}}</td></div>
            </tr>
        @endforeach   
    </tbody>
</table>

<form action="/items/{{$item->id}}" method="POST">
    @csrf
    @method('delete')
    <p>Sera eliminado el elemento con todas su relaciones e hijos</p>
    <button type="submit" class="btn btn-danger">Confirmar Borrado</button>
</form>

@endsection