@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de controle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Login realizado com sucesso!</p>
                    <p><a href="/">Inicio</a></p>
                    <p><a href="{{route('pizzas.index')}}">Cardápio</a></p>
                    <p><a href="{{route('pizzas.create')}}">Nova Pizza</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
