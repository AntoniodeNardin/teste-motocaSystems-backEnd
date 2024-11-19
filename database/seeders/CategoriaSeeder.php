<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Execute as sementes do banco de dados.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['nome' => 'Eletrônicos'],
            ['nome' => 'Vestuário'],
            ['nome' => 'Alimentos'],
            ['nome' => 'Móveis'],
            ['nome' => 'Ferramentas'],
        ]);
    }
}
