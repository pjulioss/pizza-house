@extends('layouts.app')

@section('content')

<div class="wrappep pizza-details">
    <h1>Pizza: {{$pizza->name}}</h1>
    <p class="type">Tipo de massa - {{$pizza->type}}</p>
    <p class="base">Ingredientes - {{$pizza->base}}</p>
    <form action="{{route('pizzas.destroy', $pizza->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Apagar pizza</button>
    </form>
</div>
<a href="/pizzas">Cardápio</a>

@endsection
