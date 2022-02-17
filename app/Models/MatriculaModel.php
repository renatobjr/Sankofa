<?php

namespace App\Models;
use CodeIgniter\Model;

class MatriculaModel extends Model
{
    protected $table            = 'matricula';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement =  true;
    protected $protectFields    =  true;
    protected $allowedFields = [
        'nome_beneficiario',
        'nome_mae',
        'data_nascimento',
        'etnia',
        'idade',
        'sexo',
        'naturalidade',
        'uf',
        'certidao_nascimento',
        'folha_certidao_nascimento',
        'livro',
        'pessoa_deficiencia',
        'tipo_deficiencia',
        'nome_escola',
        'nivel_escolaridade',
        'ano_escolar',
        'turno',
        'eja',
        'confirma_vacina',
        'documentos_digitalizados',
        'auxilio_brasil',
        'servico_socioassistencial',
        'servico_socioassistencial_positivo',
        'nome_responsavel',
        'nis',
        'cpf_responsavel',
        'identidade_responsavel',
        'orgao_emissor_responsavel',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'tipo_moradia',
        'telefone_contato',
        'composicao_familiar',
        'quantidade_atividades_laborativas',
        'quantidade_vinculo_empregaticio',
        'beneficio_familia',
        'descricao_beneficios',
        'renda_total',
        'violacao_direitos',
        'turma'
    ];

    public function getMatricula($id)
    {

        $matricula = $this->asArray()
                    ->where(['id' => $id])
                    ->first();
        
        $matricula['etnia'] = $this->db->table('etnia')
                    ->select('descricao')
                    ->where(['id' => $matricula['etnia']])
                    ->get()
                    ->getRowArray();
        
        $matricula['sexo'] = $this->db->table('sexo')
                    ->select('descricao')
                    ->where(['id' => $matricula['sexo']])
                    ->get()
                    ->getRowArray();
        $matricula['uf'] = $this->db->table('uf')
                    ->select('descricao')
                    ->where(['id' => $matricula['uf']])
                    ->get()
                    ->getRowArray();
        $matricula['pessoa_deficiencia'] = $this->db->table('sim_nao')
                    ->select('descricao')
                    ->where(['id' => $matricula['pessoa_deficiencia']])
                    ->get()
                    ->getRowArray();
        $matricula['nivel_escolaridade'] = $this->db->table('nivel_escolaridade')
                    ->select('descricao')
                    ->where(['id' => $matricula['nivel_escolaridade']])
                    ->get()
                    ->getRowArray();
        $matricula['turno'] = $this->db->table('turno')
                    ->select('descricao')
                    ->where(['id' => $matricula['turno']])
                    ->get()
                    ->getRowArray();
        $matricula['eja'] = $this->db->table('sim_nao')
                    ->select('descricao')
                    ->where(['id' => $matricula['eja']])
                    ->get()
                    ->getRowArray();
        $matricula['confirma_vacina'] = $this->db->table('sim_nao')
                    ->select('descricao')
                    ->where(['id' => $matricula['confirma_vacina']])
                    ->get()
                    ->getRowArray();
        $matricula['turma'] = $this->db->table('turmas')
                    ->select('descricao')
                    ->where(['id' => $matricula['turma']])
                    ->get()
                    ->getRowArray();
        $matricula['auxilio_brasil'] = $this->db->table('sim_nao')
                    ->select('descricao')
                    ->where(['id' => $matricula['auxilio_brasil']])
                    ->get()
                    ->getRowArray();
        $matricula['servico_socioassistencial'] = $this->db->table('sim_nao')
                    ->select('descricao')
                    ->where(['id' => $matricula['servico_socioassistencial']])
                    ->get()
                    ->getRowArray();
        $matricula['tipo_moradia'] = $this->db->table('tipo_moradia')
                    ->select('descricao')
                    ->where(['id' => $matricula['tipo_moradia']])
                    ->get()
                    ->getRowArray();
        $matricula['beneficio_familia'] = $this->db->table('sim_nao')
                    ->select('descricao')
                    ->where(['id' => $matricula['beneficio_familia']])
                    ->get()
                    ->getRowArray();
        
        return $matricula;
    }

    public function getMatriculasTurma($turma)
    {
        echo $turma;
        $matricula = $this->select('nome_beneficiario,nome_mae,nome_responsavel,telefone_contato')
                          ->where(['turma' => $turma])
                          ->get()
                          ->getResultArray();
        return $matricula;
    }
}