@extends('layouts.app')

@section('content')
<h1>Usuários</h1>
<div class ="container">
<a href="{{route('user.new')}}" class="btn btn-success">Novo</a>
<hr>
<table>
    <thead>
    <tr>
        
        <th>#</th>
        <th>nome</th>
        <th>Criado em</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $u)
            <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->created_at}}</td>
            
            <td>
                <a href = "{{route('user.edit' , ['user'=>$u->id])}}"class="btn btn-info">Editar</a>
                <a href = "{{route('user.remove', ['id'=>$u->id])}}"class="btn btn-danger">Remover</a>
            </td>
            </tr>

        @endforeach
    </tbody>

</table>
</div>
@endsection