<?php

use App\Http\Controllers\BoardGameController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', [PublicController::class, 'homepage'])->name('welcome');
Route::get('/boardgame/create/', [BoardGameController::class, 'create'])->name('boardgame.create');
Route::post('/boardgame/library', [BoardGameController::class, 'library'])->name('boardgame.library');
