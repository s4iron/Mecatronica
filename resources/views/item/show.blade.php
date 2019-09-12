@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1 style="color:MidnightBlue;font-family:verdana;">{{$item->item}}</h1></div> <!-- 25% -->
        <div class="col-5"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-secondary" href="/items">Atras</a></h1></div> <!-- 25% -->
</div> 

<h4>Categorias pertenecientes</h4>
<br>

    <div class="row">
        <div class="col-12"><p>Cantidad: {{$item->quantity}}</p></div>
        <table class='table'>
            @foreach ($item->categories as $item->category)
                <tr>
                    <td class="col-9"><p>{{$item->category->category}}</p></td>
                </tr>
            @endforeach           
        </table>        
    </div>

@endsection