<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Requests\ProdutoUpdateRequest;

class ProdutoController extends Controller
{
    // Retorna uma lista de todos os produtos
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return response()->json($produtos);
    }

    // Cria um novo produto
    public function store(ProdutoStoreRequest $request)
    {
        $produto = Produto::create($request->validated());
        return response()->json($produto, 201);
    }

    // Retorna os detalhes de um produto específico
    public function show($id)
    {
        $produto = Produto::with('categoria')->findOrFail($id);
        return response()->json($produto);
    }

    // Atualiza um produto existente
    public function update(ProdutoUpdateRequest $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->validated());
        return response()->json($produto);
    }

    // Deleta um produto específico
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json(['message' => 'Produto deletado com sucesso.']);
    }
}
