<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'consultas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'fecha', 'hora', 'detalle', 'observaciones', 'modalidad', 'procedencia', 'medio', 'medio_contacto', 'estado'
    ];
}
