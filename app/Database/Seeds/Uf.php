<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Uf extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            ['descricao' => 'AC'],
            ['descricao' => 'AL'],
            ['descricao' => 'AM'],
            ['descricao' => 'AP'],
            ['descricao' => 'BA'],
            ['descricao' => 'CE'],
            ['descricao' => 'DF'],
            ['descricao' => 'ES'],
            ['descricao' => 'GO'],
            ['descricao' => 'MA'],
            ['descricao' => 'MG'],
            ['descricao' => 'MS'],
            ['descricao' => 'MT'],
            ['descricao' => 'PA'],
            ['descricao' => 'PB'],
            ['descricao' => 'PE'],
            ['descricao' => 'PI'],
            ['descricao' => 'PR'],
            ['descricao' => 'RJ'],
            ['descricao' => 'RN'],
            ['descricao' => 'RO'],
            ['descricao' => 'RR'],
            ['descricao' => 'RS'],
            ['descricao' => 'SC'],
            ['descricao' => 'SE'],
            ['descricao' => 'SP'],
            ['descricao' => 'TO'],
        ];

        // Running query
        $this->db->table('uf')->insertBatch($data);
    }
}