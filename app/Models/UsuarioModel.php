<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
  // Set table model name and other stuffs
  protected $table            = 'usuarios';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $protectFields    = true;
  // Allowed fields
  protected $allowedFields = [
    'nome_completo',
    'username',
    'password',
    'isAdmin',
    'firstLogin'
  ];
}
