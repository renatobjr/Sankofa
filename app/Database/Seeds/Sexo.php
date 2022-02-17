<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sexo extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Feminino'],
            ['descricao' => 'Masculino'],
        ];

        // Running query
        $this->db->table('sexo')->insertBatch($data);
    }
}
