<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KayneController;

Route::post('/quotes', [KayneController::class, 'quotes']);
