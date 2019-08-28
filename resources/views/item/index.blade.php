@extends('layouts.base')
@section('content')

    <div class="row">
        <div class="col-3"><h1>Equipos</h1></div> <!-- 25% -->
        <div class="col-6"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-primary" href="/items/create">Agregar equipo</a></h1></div> <!-- 25% -->
      </div> 

    <div class="row">
            <table class='table'>

                @foreach($items as $item)
                    <tr>
                        <td class="col-9"><a href="/items/{{$item->id}}">{{ $item->item }}</a></td>
                        <td class="col-1"><a href="/items/{{$item->id}}/edit">Editar</a></td>
                        <td class="col-2"><a href="/items/{{$item->id}}/confirmDelete" class="btn btn-danger">Borrar</a></td>
                    </tr>
                @endforeach
                
            </table>
    </div>

@endsection