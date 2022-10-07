@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')
    <h1>Cargos</h1>
    <a href="{{ route('cargos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $cargos as $cargo )
                <tr>
                    <td>{{$cargo->id}}</td>
                    <td>{{$cargo->descricao}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
