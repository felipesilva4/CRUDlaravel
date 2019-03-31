@extends('layouts.app')
@section('content')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="container">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Criado em</th>
                <th>Ações</th>
        </thead>
        <tbody>
        @foreach ($produtos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->created_at}}</td>
                    <td>
                        <a href="{{route('produtos.edit', ['produto' => $p->id])}}"class="btn btn-success">Editar</a>
                        <a href="{{route('produtos.remove', ['id' => $p->id])}} "class="btn btn-danger" >Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('produtos.new')}}"class="btn btn-primary">Novo</a>
<div>
@endsection