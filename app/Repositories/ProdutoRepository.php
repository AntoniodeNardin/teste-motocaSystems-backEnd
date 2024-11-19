<?php

namespace App\Repositories;

use App\Models\Produto;

class ProdutoRepository extends BaseRepository
{
    public function __construct(Produto $produto)
    {
        parent::__construct($produto);


    }
    public function all()
    {
        return Produto::with('categoria')->get(); // Eager loading para carregar a categoria junto
    }

    // Retorna um produto específico com a categoria associada
    public function find($id)
    {
        return Produto::with('categoria')->find($id); // Eager loading para carregar a categoria junto
    }

}
