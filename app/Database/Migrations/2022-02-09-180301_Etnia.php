<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Etnia extends Migration
{
    public function up()
    {
        // create table
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
        $this->forge->createTable('etnia');
    }

    public function down()
    {
        // Drop table
        $this->forge->dropTable('etnia');
    }
}
