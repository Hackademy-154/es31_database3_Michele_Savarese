<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BoardGameController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');
Route::get('/boardgame/create/', [GameController::class, 'create'])->name('boardgame.create');
Route::post('/boardgame/library', [GameController::class, 'library'])->name('boardgame.library');
