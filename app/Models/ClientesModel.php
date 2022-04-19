<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;


class ClientesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'clientes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nombre', 'telefono', 'email', 'ci', 'empresa', 'nit', 'observaciones', 'tipo', 'estado'
    ];

    protected $validationRules = [
        'nombre' => [
            'rules' => 'required|min_length[5]',
            'errors' => [
                'required' => 'El nombre es un campo obligatorio.
                ',
                'min_length' => 'El nombre necesita al menos 5 caracteres.
                '
            ]
        ],
        'email' => [
            'rules' => 'required|min_length[7]',
            'errors' => [
                'required' => 'El correo electrónico es un campo obligatorio.
                ',
                'min_length' => 'El correo electrónico necesita al menos 7 caracteres.
                '
            ]
        ],
        'ci' => [
            'rules' => 'required|min_length[4]',
            'errors' => [
                'required' => 'El CI es un campo obligatorio.
                ',
                'min_length' => 'El CI necesita al menos 4 caracteres.
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
