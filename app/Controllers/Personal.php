<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Personal extends BaseController
{
    public function index()
    {
        return view('personal/listar');
    }
}
