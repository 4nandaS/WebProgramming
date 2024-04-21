<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::any('/', [HomeController::class, 'index']);
