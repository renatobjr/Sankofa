<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Boolena extends Migration
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
            'descricao' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ]
        ]);
        // Set Primary Key
        $this->forge->addKey('id', true);
        // Create table
        $this->forge->createTable('sim_nao');
    }

    public function down()
    {
        // Drop table
        $this->forge->dropTable('sim_nao');
    }
}
