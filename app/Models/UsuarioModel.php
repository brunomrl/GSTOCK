<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioMOdel extends Model
{
    protected $table            = 'usuarios';
    protected $returnType       = 'objects';
    protected $useSoftDeletes   = true; //explicar depois
    protected $allowedFields    = [
        'nome',
        'email',
        'password',
        'reset_hash',
        'reset_expira_em',
        'imagem',
        //Não colocaremos o campo ativo...pois existe a manipulação de formulário
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'uatualizado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    // Callbacks
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
}
