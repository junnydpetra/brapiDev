<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $base_url = Http::get('https://brapi.dev/api/quote/list');
        // $base_url->paginate(10);
        $apiArray = json_decode($base_url->body());

        return view('dashboard', ['apiArray' => $apiArray->stocks]);
    }
}
