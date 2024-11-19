<?php

namespace App\Repositories;

use App\Models\Categoria;

class CategoriaRepository extends BaseRepository
{
    public function __construct(Categoria $categoria)
    {
        parent::__construct($categoria);
    }

    // Adicione aqui métodos específicos para a Categoria, se necessário
}
