<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Servicios extends BaseController
{
    public function index()
    {
        return view('servicios/listar');
    }
}
