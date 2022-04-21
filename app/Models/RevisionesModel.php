<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;


class RevisionesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'revisiones_auxiliar';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['fecha','observaciones','rendimiento','estado'];

    
    protected $validationRules = [
        'observaciones' => [
            'rules' => 'required|min_length[20]',
            'errors' => [
                'required' => 'Las observaciones son obligatorias.
                ',
                'min_length' => 'Las observaciones necesitan al menos 20 caracteres.
                '
            ]
        ],
    ];


    
    /**
     * @return ValidationInterface
     */
    public function getValidation(): ValidationInterface
    {
        return $this->validation;
    }
}
