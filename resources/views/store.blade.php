@extends('layouts.app')

@section('content')
<div class="container">
    <h3>cadastrando Produtos</h3>

    <hr>
    <form action="{{route('produtos.store')}}" method="post">
        {{csrf_field()}}
        <p>
            <label> Nome do produto</label><br>
            <input type="text" name="nome">
        <p>
            <label>Preço</label><br>
            <input type="float" name="preco">
        <p>
            <label>Descrição do produto</label><br>
            <textarea name="descricao" id="" cols="60" rows="20"></textarea>
        <p>
        <input type="submit" value="Salvar">
    </form>
</div>
@endsection

