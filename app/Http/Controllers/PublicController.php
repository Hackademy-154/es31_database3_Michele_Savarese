<?php

namespace App\Http\Controllers;

use App\Models\BoardGame;
use illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $boardgames = boardgame::all(); //!collezione di libri, collezione è un nome tecnico
        return view('welcome', compact('boardgames'));
    }

    //
}
