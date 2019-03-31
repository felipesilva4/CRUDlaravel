<?php

namespace App\Http\Controllers;
use App\Http\Requests\produtosRequests;
use Illuminate\Http\Request;
use App\Produtos;


class ProdutosController extends Controller
{
    public function index()
    {
        $produtos=Produtos::all();
        return view('index', compact('produtos')) ;
    }

    public function new()
    {
     return view ('store');    
    }

    public function store (Request $request)
    {
        $produtosData = $request->all();
        $produtos = new Produtos();
        $produtos->create($produtosData);

        flash('Produto criado com sucesso!')->success();

        return redirect ()->route('produtos.index');
    }
    public function edit(Produtos $produtos)
    {
        return view ('edit', compact ('produtos'));
    }

    public function update (Request $request, $id)
    {
        $produtosData = $request->all();

        $produtos = Produtos::findOrFail($id);
        $produtos->update($produtosData);

        flash('Produto atualizado com sucesso!')->success();

        return redirect ()->route('produtos.index');
    }

    public function delete($id)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->delete();
        flash('Produto removido com sucesso!')->success();

        return redirect ()->route('produtos.index');
    }

}
