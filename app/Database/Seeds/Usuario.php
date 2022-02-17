<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            'nome_completo'    => 'admin',
            'username'         => 'admin',
            'password'         => password_hash('admin',PASSWORD_DEFAULT),
            'isAdmin'          => '0',
            'firstLogin'       => '0'
        ];

        // Running query
        $this->db->table('usuarios')->insert($data);
    }
}
