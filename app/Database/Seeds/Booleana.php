<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Booleana extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Sim'],
            ['descricao' => 'Não'],
        ];

        // Running query
        $this->db->table('sim_nao')->insertBatch($data);
    }
}
