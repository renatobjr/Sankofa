<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CadastroReserva extends Migration
{
    public function up()
    {
        // create table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'constraint' => 5
            ],
            'nome_beneficiario' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],
            'telefone_contato' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ],
            'observacoes' => [
                'type' => 'VARCHAR',
                'constraint' => 120
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cadastro_reserva');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('cadastro_reserva');
    }
}
