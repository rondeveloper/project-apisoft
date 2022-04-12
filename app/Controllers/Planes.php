<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Planes extends BaseController
{
    public function index()
    {
        return view('planes/listar');
    }
}
