<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NivelEscolaridade extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Fundamental II'],
            ['descricao' => 'Médio'],
            ['descricao' => 'EJA'],
        ];

        // Running query
        $this->db->table('nivel_escolaridade')->insertBatch($data);
    }
}
