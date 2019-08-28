@extends('layouts.base')
@section('content')

    <div class="row">
        <div class="col-3"><h1>Categorias</h1></div> <!-- 25% -->
        <div class="col-6"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-primary" href="/categories/create">Agregar categorias</a></h1></div> <!-- 25% -->
      </div> 

    <div class="row">
            <table class='table'>

                @foreach($categories as $category)
                    <tr>
                        <td class="col-9"><a href="/categories/{{$category->id}}">{{ $category->category }}</a></td>
                        <td class="col-1"><a href="/categories/{{$category->id}}/edit">Editar</a></td>
                        <td class="col-2"><a href="/categories/{{$category->id}}/confirmDelete" class="btn btn-danger">Borrar</a></td>
                    </tr>
                @endforeach
                
            </table>
    </div>

@endsection