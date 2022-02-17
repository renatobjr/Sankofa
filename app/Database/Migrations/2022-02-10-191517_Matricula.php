<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matricula extends Migration
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
            'nome_beneficiario' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'nome_mae' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'data_nascimento' => [
                'type'              => 'date'
            ],
            'etnia' => [
                'type'              => 'INT'
            ],
            'idade' => [
                'type'              => 'INT'
            ],
            'sexo' => [
                'type'              => 'INT'
            ],
            'naturalidade' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'uf' => [
                'type'              => 'INT'
            ],
            'certidao_nascimento' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'folha_certidao_nascimento' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'livro' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'pessoa_deficiencia' => [
                'type'              => 'INT'
            ],
            'tipo_deficiencia' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'nome_escola' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'nivel_escolaridade' => [
                'type'              => 'INT'
            ],
            'ano_escolar' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'turno' => [
                'type'              => 'INT'
            ],
            'eja' => [
                'type'              => 'INT'
            ],
            'turma' => [
                'type'              => 'INT'
            ],
            'confirma_vacina' => [
                'type'              => 'INT'
            ],
            'documentos_digitalizados' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'auxilio_brasil' => [
                'type'              => 'INT'
            ],
            'servico_socioassistencial' => [
                'type'              => 'INT'
            ],
            'servico_socioassistencial_positivo' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'nome_responsavel' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'nis' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'cpf_responsavel' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'identidade_responsavel' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'orgao_emissor_responsavel' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'cep' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'endereco' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'numero' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'bairro' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'tipo_moradia' => [
                'type'              => 'INT'
            ],
            'telefone_contato' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'composicao_familiar' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'quantidade_atividades_laborativas' => [
                'type'              => 'INT'
            ],
            'quantidade_vinculo_empregaticio' => [
                'type'              => 'INT'
            ],
            'beneficio_familia' => [
                'type'              => 'INT'
            ],
            'descricao_beneficios' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'renda_total' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
            'violacao_direitos' => [
                'type'              => 'VARCHAR',
                'constraint'        => '120'
            ],
        ]);
        // Set Primary Key
        $this->forge->addKey('id', true);
        // Create table
        $this->forge->createTable('matricula');
    }

    public function down()
    {
        // Drop table
        $this->forge->dropTable('matricula');
    }
}
