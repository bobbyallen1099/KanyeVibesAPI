<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KayneController;

Route::get('/', [KayneController::class, 'home']);
