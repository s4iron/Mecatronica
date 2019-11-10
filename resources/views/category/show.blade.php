@extends('layouts.base')
@section('content')
    
<div class="row">
        <div class="col-4"><h1>{{$category->category}}</h1></div> <!-- 25% -->
        <div class="col-5"></div> <!-- 75% -->
        <div class="col-3"><h1><a class="btn btn-secondary" href="/categories">Atras</a></h1></div> <!-- 25% -->
</div> 

<p>{{$category->description}}</p>

<table class="table">
        <thead>
                <tr>
                        <th scope="col-6"> <a href="/items">Items </a></th>
                        <th scope="col-3">Cantidad</th>
                </tr>
        </thead>
<tbody>
        @foreach ($items as $item)
                <tr>
                        <div class="col-3"><td >{{$item->item}}</td></div>
                        <div class="col-3"><td >{{$item->quantity}}</td></div>
                </tr>
        @endforeach   
</tbody>
        </table>
@endsection