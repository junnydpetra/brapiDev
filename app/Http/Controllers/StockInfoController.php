<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class StockInfoController extends Controller
{
    public function stockInfoModal($api)
    {
        $base_url = Http::get("https://brapi.dev/api/quote/{$api}");
        $apiArray = json_decode($base_url->body());

        return View::make('modal-stock', ['stock' => $apiArray->results[0]]);
    }
}
