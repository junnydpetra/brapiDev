<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarteiraController extends Controller
{
    public function carteira()
    {
        $base_url = Http::get('https://brapi.dev/api/quote/list');
        return view('carteira');
    }
}
