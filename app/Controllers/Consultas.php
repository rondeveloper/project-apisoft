<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Consultas extends BaseController
{
    public function index()
    {
        return view('consultas/listar');
    }
}
