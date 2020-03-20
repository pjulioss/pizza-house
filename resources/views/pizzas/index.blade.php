@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
    <h1>Cardápio</h1>
    @foreach ($pizzas as $pizza)
    <div class="pizza-item">
        <img src="img/pizza.png" alt="pizza">
        <p><a href="{{ route('pizzas.show', $pizza->id) }}"><span>{{$pizza->name}}</span></a> - <strong>Ingredientes: </strong>{{$pizza->base}}</p>
    </div>
    @endforeach
    <a href="/">Inicio</a>

    <a href="/pizzas/create">Nova pizza</a>
</div>


@endsection
