<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BrapiDevController extends Controller
{
    public function stocks()
    {
        $base_url = Http::get('https://brapi.dev/api/quote/PETR4');
        $apiArray = json_decode($base_url->body());
        // dd($apiArray);
        return view('brapiDev', ['apiArray' => $apiArray->results]);
    }
}
