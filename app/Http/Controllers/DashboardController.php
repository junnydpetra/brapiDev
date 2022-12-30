<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $base_url = Http::get('https://brapi.dev/api/available');
        $base_url = Http::get('https://brapi.dev/api/quote/list');
        $apiArray = json_decode($base_url->body());

        return view('dashboard', ['apiArray' => $apiArray->stocks]);
    }

    // public function stockInfo($api)
    // {
    //     $base_url = Http::get("https://brapi.dev/api/quote/{$api}");
    //     $apiArray = json_decode($base_url->body());

    //     return view('stockInfo', ['apiArray' => $apiArray->results]);
    // }

}
