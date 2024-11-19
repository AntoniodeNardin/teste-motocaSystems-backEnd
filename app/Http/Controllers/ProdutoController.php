<?php

namespace App\Http\Controllers;

use App\Repositories\ProdutoRepository;
use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Requests\ProdutoUpdateRequest;

class ProdutoController extends Controller
{
    protected $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    // Retorna todos os produtos
    public function index()
    {
        $produtos = $this->produtoRepository->all();
        return response()->json($produtos);
    }

    // Cria um novo produto
    public function store(ProdutoStoreRequest $request)
    {
        $produto = $this->produtoRepository->create($request->validated());
        return response()->json($produto, 201);
    }

    // Retorna um produto específico
    public function show($id)
    {
        $produto = $this->produtoRepository->find($id);
        if ($produto) {
            return response()->json($produto);
        }
        return response()->json(['message' => 'Produto não encontrado'], 404);
    }

    // Atualiza um produto
    public function update(ProdutoUpdateRequest $request, $id)
    {
        $produto = $this->produtoRepository->update($id, $request->validated());
        return response()->json($produto);
    }

    // Deleta um produto
    public function destroy($id)
    {
        $this->produtoRepository->delete($id);
        return response()->json(['message' => 'Produto deletado com sucesso']);
    }
}
