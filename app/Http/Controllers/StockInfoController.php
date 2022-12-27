<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StockInfoController extends Controller
{
    public function stockInfo($api)
    {
        $base_url = Http::get("https://brapi.dev/api/quote/{$api}");
        $apiArray = json_decode($base_url->body());
        // dd($apiArray);
        return view('stockInfo', ['apiArray' => $apiArray->results]);
        // return "Exibindo a ação: {$api}";
    }
}
