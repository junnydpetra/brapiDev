<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Carteira;

class CarteiraController extends Controller
{
    public function carteira()
    {
        $carteira = Carteira::all();
        return view('carteira', ['carteira' => $carteira[0]]);
    }
}
