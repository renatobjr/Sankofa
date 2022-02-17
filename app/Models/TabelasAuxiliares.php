<?php

namespace App\Models;
use CodeIgniter\Model;

class TabelasAuxiliares extends Model
{
    // Get the boolean data
    public function getBooleana()
    {
        $query = $this->db->table('sim_nao')->get();
        return $query->getResultArray();
    }
    // Get the etnia data
    public function getEtnia()
    {
        $query = $this->db->table('etnia')->get();
        return $query->getResultArray();
    }
    // Get the sexo data
    public function getSexo()
    {
        $query = $this->db->table('sexo')->get();
        return $query->getResultArray();
    }
    // Get the uf data
    public function getUf()
    {
        $query = $this->db->table('uf')->get();
        return $query->getResultArray();
    }
    // Get the nivel_escolaridade data
    public function getNivelEscolaridade()
    {
        $query = $this->db->table('nivel_escolaridade')->get();
        return $query->getResultArray();
    }
    // Get the turno data
    public function getTurno()
    {
        $query = $this->db->table('turno')->get();
        return $query->getResultArray();
    }
    // Get the tipo_moradia data
    public function getTipoMoradia()
    {
        $query = $this->db->table('tipo_moradia')->get();
        return $query->getResultArray();
    }
    // Get the turma data
    public function getTurma()
    {
        $query = $this->db->table('turmas')->get();
        return $query->getResultArray();
    }
    // Counting matriculas
    public function countMatriculas($turma) {
        $query = $this->db->table('turmas')
                          ->select('totalAlunos')
                          ->where('id',$turma)
                          ->get();
        return $query->getRowArray();
    }
    // Insert increment 
    public function addTotalAlunos($turma, $total)
    {
        $data = [
            'totalAlunos' => $total
        ];

        $this->db->table('turmas')
                 ->where('id',$turma)
                 ->update($data);
        
        return true;

    }
}