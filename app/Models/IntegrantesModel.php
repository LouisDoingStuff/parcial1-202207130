<?php

namespace App\Models;

use CodeIgniter\Model;

class IntegrantesModel extends Model
{
    protected $table            = 'integrantes';
    protected $primaryKey       = 'integrante_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['integrante_id', 'nombre', 'apellido', 'fecha_nacimiento', 'fecha_muerte','web_oficial', 'pais_nacimiento'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
}