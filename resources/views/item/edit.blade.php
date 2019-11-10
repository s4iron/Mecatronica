@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1 style="color:MidnightBlue;font-family:verdana;">{{$item->item}}</h1></div> <!-- 25% -->
        <div class="col-7"></div> <!-- 75% -->
        <div class="col-1"><h1><a class="btn btn-secondary" href="/items">Atras</a></h1></div> <!-- 25% -->
</div> 



<form action="/items/{{$item->id}}" method="POST">
    @csrf
    @method('put')

    <div class="row">

        <div class="col-12">
        <label for="category">Item: </label><input type="text"  class="form-control" id="item" name="item" value="{{$item->item}}">
        </div>

        <div class="col-12">
                <label for="description">Descripcion: </label><input type="text"  class="form-control" id="description" name="description" value="{{$item->description}}">
                <br>
        </div>
    <div class="col-11">Cantidad:{{$item->quantity}}</button></div>
    <div class="col-1"><button type="submit" class="btn btn-primary">Guardar</button></div>
</form>

<div class="col-12">
    <a href="/items/{{$item->id}}/edit/categories" class="btn btn-primary">Agregar Categoria</a>
</div>

    <p><br></p>
    <div class="table-responsive-xl">
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-6">Categoria</th>
                            <th scope="col-6">Borrar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($item->categories as $item->category)

                            <tr>
                                <div class="col-3"><td ><a href="/categories/{{$item->category->id}}/edit">{{$item->category->category}}</a></td></div>
                                <div class="col-9">
                                    <td>
                                        <form action="/items/{{$item->id}}/deleteCategory/{{$item->category->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </div>
                            </tr>
                        @endforeach   
                    </tbody>
                </table>
          </div>
   
            
    </div>
@endsection