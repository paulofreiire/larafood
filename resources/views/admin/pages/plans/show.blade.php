@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do Plano <b>{{ $plan->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{$plan->name}}
                </li>
                <li>
                    <strong>Url:</strong> {{$plan->url}}
                </li>
                <li>
                    <strong>Preço:</strong> {{number_format($plan->price, 2, ',', '.')}}
                </li>
                <li>
                    <strong>Descrição:</strong> {{$plan->description}}
                </li>
            </ul>

            <form action="{{ route('plans.destroy', $plan->url) }}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">DELETAR O PLANO {{ $plan->name }}</button>
            </form>
        </div>
    </div>
@endsection
