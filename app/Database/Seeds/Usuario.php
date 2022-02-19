<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        // Populate database
        $data = [
            [
                'nome_completo'    => 'admin',
                'username'         => 'admin',
                'password'         => password_hash('admin',PASSWORD_DEFAULT),
                'isAdmin'          => '0',
                'firstLogin'       => '0'
            ],[
                'nome_completo' => 'Alessadro Amorim',
                'password' => null,
                'username' => 'alessandro.amorim',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Auta Oliveira',
                'password' => null,
                'username' => 'auta.oliveira',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Jessica Oliveira',
                'password' => null,
                'username' => 'jessica.oliveira',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Juhliana Nunes',
                'password' => null,
                'username' => 'juhliana.nunes',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Karen Jullia',
                'password' => null,
                'username' => 'karen.jullia',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Lidiane Correia',
                'password' => null,
                'username' => 'lidiane.correia',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Natalia Viana',
                'password' => null,
                'username' => 'natalia.viana',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Renan Santos',
                'password' => null,
                'username' => 'renan.santos',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Suelen Silva',
                'password' => null,
                'username' => 'suelen.silva',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
            [
                'nome_completo' => 'Thaís Costa',
                'password' => null,
                'username' => 'thais.costa',
                'isAdmin' => '1',
                'firstLogin' => '1'
            ],
        ];

        // Running query
        $this->db->table('usuarios')->insertBatch($data);
    }
}
