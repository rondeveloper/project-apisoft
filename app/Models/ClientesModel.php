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
            'rules' => 'required|min_length[5]|max_length[15]',
            'errors' => [
                'required' => 'El nombre es un campo obligatorio.',
                'min_length' => 'El nombre necesita al menos 5 caracteres.',
                'max_length' => 'El nombre no puede tener mas de 15 caracteres.',
            ]
        ],
        'telefono' => [
            'rules' => 'required|min_length[5]|max_length[13]',
            'errors' => [
                'required' => 'El telefono es un campo obligatorio.',
                'min_length' => 'El telefono necesita al menos 5 caracteres.',
                'max_length' => 'El telefono no puede tener mas de 13 caracteres.',
            ]
        ],
        'email' => [
            'rules' => 'required|min_length[7]|max_length[30]',
            'errors' => [
                'required' => 'El correo electrónico es un campo obligatorio.
                ',
                'min_length' => 'El correo electrónico necesita al menos 7 caracteres.
                ',
                'max_length' => 'El correo electrónico  no puede tener mas de 30 caracteres.',
            ]
        ],
        'ci' => [
            'rules' => 'required|min_length[4]|max_length[7]',
            'errors' => [
                'required' => 'El CI es un campo obligatorio.
                ',
                'min_length' => 'El CI necesita al menos 4 caracteres.
                ',
                'max_length' => 'El CI no puede tener mas de 7 caracteres.',
            ]
        ],
        'empresa' => [
            'rules' => 'required|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'La empresa es un campo obligatorio.',
                'min_length' => 'La empresa necesita al menos 5 caracteres.',
                'max_length' => 'La empresa no puede tener mas de 20 caracteres.',
            ]
        ],
        'nit' => [
            'rules' => 'required|min_length[5]|max_length[15]',
            'errors' => [
                'required' => 'El nit es un campo obligatorio.',
                'min_length' => 'El nit necesita al menos 5 caracteres.',
                'max_length' => 'El nit no puede tener mas de 15 caracteres.',
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
