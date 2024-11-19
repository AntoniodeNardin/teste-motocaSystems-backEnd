<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Execute as sementes do banco de dados.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'nome' => 'Smartphone X100',
                'descricao' => 'Smartphone com tela de 6.5 polegadas, 128GB de armazenamento.',
                'preco' => 1500.00,
                'categoria_id' => 1, // Eletrônicos
            ],
            [
                'nome' => 'Camiseta Polo',
                'descricao' => 'Camiseta de algodão, disponível em várias cores.',
                'preco' => 79.90,
                'categoria_id' => 2, // Vestuário
            ],
            [
                'nome' => 'Cadeira de Escritório',
                'descricao' => 'Cadeira ergonômica com ajuste de altura.',
                'preco' => 350.00,
                'categoria_id' => 4, // Móveis
            ],
            [
                'nome' => 'Martelo de Ferro',
                'descricao' => 'Martelo de 500g, ideal para trabalhos gerais.',
                'preco' => 45.00,
                'categoria_id' => 5, // Ferramentas
            ],
            [
                'nome' => 'Arroz Branco',
                'descricao' => 'Arroz branco, pacote de 5kg.',
                'preco' => 15.50,
                'categoria_id' => 3, // Alimentos
            ],
        ]);
    }
}
