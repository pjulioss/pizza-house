@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            Confira os sabores
        </div>
        @foreach ($pizzas as $pizza)
        <p><span>{{$pizza->type}}</span> - <strong>Ingredientes: </strong>{{$pizza->base}} - R$ {{$pizza->price}},00</p>
        @endforeach
    </div>
</div>

@endsection
