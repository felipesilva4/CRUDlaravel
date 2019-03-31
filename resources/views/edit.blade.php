<h1>Alterando Produtos</h1>

<hr>
<form action="{{route('produtos.update', ['produtos'=>$produtos->id])}}" method="post">
    {{csrf_field()}}
    <p>
        <label> Nome do produto</label>
        <input type="text" name="nome" value="{{$produtos->nome}}">
    <p>
        <label>Preço</label>
        <input type="float" name="preco" value="{{$produtos->preco}}">
    <p>
        <label>Descrição do produto</label><br>
        <textarea name="descricao" id="" cols="30" rows="10">{{$produtos->descricao}}</textarea>
    <p>
    <input type="submit" value="Salvar">
</form>