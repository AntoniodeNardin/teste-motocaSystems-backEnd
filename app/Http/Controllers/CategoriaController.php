<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\CategoriaStoreRequest;
use App\Http\Requests\CategoriaUpdateRequest;


class CategoriaController extends Controller
{
    // Retorna uma lista de todas as categorias
    public function index()
    {
        $categorias = Categoria::with('produtos')->get();
        return response()->json($categorias);
    }

    // Cria uma nova categoria
    public function store(CategoriaStoreRequest $request)
    {
        $categoria = Categoria::create($request->validated());
        return response()->json($categoria, 201);
    }

    // Retorna os detalhes de uma categoria específica
    public function show($id)
    {
        $categoria = Categoria::with('produtos')->findOrFail($id);
        return response()->json($categoria);
    }

    // Atualiza uma categoria existente
    public function update(CategoriaUpdateRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->validated());
        return response()->json($categoria);
    }

    // Deleta uma categoria específica
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return response()->json(['message' => 'Categoria deletada com sucesso.']);
    }
}
