<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        // Create table
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'auto_increment'    => true,
                'constraint'        => 5

            ],
            'nome_completo' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'username' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'password' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'isAdmin' => [
                'type'              => 'INT',
                'constraint'        => 1
            ],
            'firstLogin' => [
                'type'              => 'INT',
                'constraint'        => 1
            ]
        ]);
        // Set Primary Key
        $this->forge->addKey('id', true);
        // Create table
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        // Drop table
        $this->forge->dropTable('usuarios');
    }
}
