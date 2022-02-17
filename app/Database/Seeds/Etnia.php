<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Etnia extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Amarela'],
            ['descricao' => 'Branca'],
            ['descricao' => 'Indígena'],
            ['descricao' => 'Negra'],
            ['descricao' => 'Parda'],
        ];

        // Running query
        $this->db->table('etnia')->insertBatch($data);
    }
}
