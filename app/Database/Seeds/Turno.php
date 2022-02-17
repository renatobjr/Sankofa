<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Turno extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Manhã'],
            ['descricao' => 'Tarde'],
            ['descricao' => 'Noite'],
        ];

        // Running query
        $this->db->table('turno')->insertBatch($data);
    }
}
