<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Proyectos extends BaseController
{
    public function index()
    {
        return view('proyectos/listar');
    }
}
