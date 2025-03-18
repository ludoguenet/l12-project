<?php

declare(strict_types=1);

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');

Route::resource('recipes', RecipeController::class)->middleware('auth');

require_once __DIR__ . '/auth.php';
