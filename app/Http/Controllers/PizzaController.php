<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all(); //pega todas os dados no banco
        // $pizzas = Pizza::orderBy('type','desc')->get(); //pega os dados ordenado pelo 'type' ordem descrecente
        // $pizzas = Pizza::where('price','25')->get(); //pega apenas os dados que baterem com o que foi expecificado

        return view("pizzas", ['pizzas' => $pizzas]);
    }

    public function show($id){
        return view("details",['id'=>$id]);
    }
}
