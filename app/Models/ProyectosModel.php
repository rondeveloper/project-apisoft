<?php

namespace App\Models;

use CodeIgniter\Model;

class ProyectosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'proyectos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'descripcion', 'fecha_inicio', 'fecha_final', 'fecha_entrega', 'costo', 'costo_final', 'observaciones', 'estado'
    ];
}
