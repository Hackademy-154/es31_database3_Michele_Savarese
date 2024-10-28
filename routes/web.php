<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\BoardGameController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');
Route::get('/boardgame/create/', [GameController::class, 'create'])->name('boardgame.create');
Route::post('/boardgame/library', [GameController::class, 'library'])->name('boardgame.library');


Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/author/store', [AuthorController::class,'store'])->name('author.store');

Route::get('/author/index', [AuthorController::class,'index'])->name('author.index');
Route::get('/author/detail/{author}', [AuthorController::class,'show'])->name('author.show');
