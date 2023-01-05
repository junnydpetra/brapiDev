<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacoesController extends Controller
{
    public function saque()
    {
        return view('saque');
    }

    public function deposito()
    {
        return view('deposito');
    }
}
