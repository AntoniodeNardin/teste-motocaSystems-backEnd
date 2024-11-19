<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    // Construtor recebe o modelo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Busca todos os registros
    public function all()
    {
        return $this->model->all();
    }

    // Busca um registro pelo ID
    public function find($id)
    {
        return $this->model->find($id);
    }

    // Cria um novo registro
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // Atualiza um registro
    public function update($id, array $data)
    {
        $model = $this->model->findOrFail($id);
        $model->update($data);
        return $model;
    }

    // Deleta um registro
    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        return $model->delete();
    }
}
