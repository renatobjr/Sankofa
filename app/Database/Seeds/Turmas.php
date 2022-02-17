<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Turmas extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'Turma 1: 11 a 12 Anos - Manhã', 'totalAlunos' => '0', 'color' => 'df3a28'],
            ['descricao' => 'Turma 2: 13 a 14 Anos - Manhã', 'totalAlunos' => '0', 'color' => 'ec8c23'],
            ['descricao' => 'Turma 3: 15 a 17 Anos - Manhã', 'totalAlunos' => '0', 'color' => '653358'],
            ['descricao' => 'Turma 4: 11 a 12 Anos - Tarde', 'totalAlunos' => '0', 'color' => 'ff3a28'],
            ['descricao' => 'Turma 5: 13 a 14 Anos - Tarde', 'totalAlunos' => '0', 'color' => 'ff8c23'],
            ['descricao' => 'Turma 6: 15 a 17 Anos - Tarde', 'totalAlunos' => '0', 'color' => 'a53358'],
        ];

        // Running query
        $this->db->table('turmas')->insertBatch($data);
    }
}
