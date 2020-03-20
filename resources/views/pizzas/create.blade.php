@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Adicionar nova pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf

        <label for="name">Nome da pizza: </label>
        <input type="text" id="name" name="name">

        <label for="type">Tipo de massa: </label>
        <select id="type" name="type">
            <option value="doce">Doce</option>
            <option value="salgada">Salgada</option>
            <option value="mista">Mista</option>
        </select>

        <label for="base">Ingredientes: </label>
        <textarea name="base" id="base" cols="30" rows="10"></textarea>

        <fieldset>
            <label>Adicionais</label>
            <input type="checkbox" name="toppings[]" value="azeitona">Azeitona<br>
            <input type="checkbox" name="toppings[]" value="alho">Alho<br>
            <input type="checkbox" name="toppings[]" value="pimentao">Pimentão<br>
            <input type="checkbox" name="toppings[]" value="milho">Milho<br>
            <input type="checkbox" name="toppings[]" value="ervilha">Ervilha<br>
            <input type="checkbox" name="toppings[]" value="cebola">Cebola<br>
            <input type="checkbox" name="toppings[]" value="cogumelo">Cogumelo<br>
        </fieldset>


        <button type="submit">Salvar</button>
    </form>
</div>
<a href="/">Inicio</a>
<br>
<a href="/pizzas">Cardápio</a>
@endsection
