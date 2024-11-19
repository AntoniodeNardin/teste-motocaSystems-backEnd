<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriaRepository;
use App\Http\Requests\CategoriaStoreRequest;
use App\Http\Requests\CategoriaUpdateRequest;

class CategoriaController extends Controller
{
    protected $categoriaRepository;

    public function __construct(CategoriaRepository $categoriaRepository)
    {
        $this->categoriaRepository = $categoriaRepository;
    }

    // Retorna todas as categorias
    public function index()
    {
        $categorias = $this->categoriaRepository->all();
        return response()->json($categorias);
    }

    // Cria uma nova categoria
    public function store(CategoriaStoreRequest $request)
    {
        $categoria = $this->categoriaRepository->create($request->validated());
        return response()->json($categoria, 201);
    }

    // Retorna uma categoria específica
    public function show($id)
    {
        $categoria = $this->categoriaRepository->find($id);
        if ($categoria) {
            return response()->json($categoria);
        }
        return response()->json(['message' => 'Categoria não encontrada'], 404);
    }

    // Atualiza uma categoria
    public function update(CategoriaUpdateRequest $request, $id)
    {
        $categoria = $this->categoriaRepository->update($id, $request->validated());
        return response()->json($categoria);
    }

    // Deleta uma categoria
    public function destroy($id)
    {
        $this->categoriaRepository->delete($id);
        return response()->json(['message' => 'Categoria deletada com sucesso']);
    }
}
