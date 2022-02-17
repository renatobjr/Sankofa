<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoMoradia extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Próprio'],
            ['descricao' => 'Alugada'],
            ['descricao' => 'Cedida'],
            ['descricao' => 'Outros'],
        ];

        // Running query
        $this->db->table('tipo_moradia')->insertBatch($data);
    }
}
