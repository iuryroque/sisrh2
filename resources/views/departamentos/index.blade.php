@extends('layouts.default')

@section('title', 'Departamentos')

@section('conteudo')
    <h1>Departamentos</h1>
    <a href="{{ route('departamentos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $departamentos as $departamento )
                <tr>
                    <td>{{$departamento->id}}</td>
                    <td>{{$departamento->nome}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
