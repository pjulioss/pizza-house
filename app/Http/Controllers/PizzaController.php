<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //protege todos as rotas/controladoras pedindo login para serem vistas
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        $pizzas = Pizza::all(); //pega todas os dados no banco
        // $pizzas = Pizza::orderBy('type','desc')->get(); //pega os dados ordenado pelo 'type' ordem descrecente
        // $pizzas = Pizza::where('price','25')->get(); //pega apenas os dados que baterem com o que foi expecificado

        return view("pizzas.index", ['pizzas' => $pizzas]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);

        return view("pizzas.show",['pizza'=>$pizza]);
    }

    public function create(){
        return view("pizzas.create");
    }

    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        // error_log(request('toppings'));
        $pizza->save();

        return redirect('/')->with('msg', 'Nova sabor adicionado ao cardápio!');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
