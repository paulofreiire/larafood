@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.store') }}" class="form" method="post">
                @csrf
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:"/>
                </div>
                <div class="form-group">
                    <label>Preço:
                        <input type="text" name="price" class="form-control" placeholder="Price:"/>
                    </label>
                </div>
                <div class="form-group">
                    <label>Description:
                        <input type="text" name="description" class="form-control" placeholder="Descritpion:"/>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@stop
