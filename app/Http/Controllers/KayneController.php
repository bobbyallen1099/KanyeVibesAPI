<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\KanyeAPIService;

class KayneController extends Controller
{
    public function home(KanyeAPIService $kanyeApiService): View
    {
        $quotes = $kanyeApiService->getQuotes();
        return view('home', ['quotes' => $quotes]);
    }
}