<?php

namespace App\Models;
use CodeIgniter\Model;

class CadastroReservaModel extends Model
{
  // Set table model name and other stuffs
  protected $table            = 'cadastro_reserva';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $protectFields    = true;
  // Allowed fields
  protected $allowedFields = [
    'id',
    'nome_beneficiario',
    'telefone_contato',
    'observacoes',
  ];

  public function getReservas()
  {
    $query = $this->get();
    return $query->getResultArray();
  }
}
