<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnObservacaoMatricula extends Migration
{
    public function up()
    {
        // add column
        $field = [
            'observacoes' => [
                'type' => 'VARCHAR',
                'constraint' => 120    
            ],
            'criado_por' => [
                'type' => 'INT'
            ]
        ];
        $this->forge->addColumn('matricula', $field);
    }

    public function down()
    {
        // Drop table
        $this->forge->dropTable('matricula');
    }
}
