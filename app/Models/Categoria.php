<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Relacionamento com produtos.
     * Uma categoria pode ter muitos produtos.
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
