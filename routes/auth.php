<?php

declare(strict_types=1);

use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;

Route::view('login', 'login')->name('login')->middleware('guest');
Route::post('authenticate', AuthenticateController::class)->name('authenticate');
