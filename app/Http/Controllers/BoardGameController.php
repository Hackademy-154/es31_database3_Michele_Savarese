<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoardgameCreateRequest;
use App\Models\BoardGame;
use Illuminate\Http\Request;

class BoardGameController extends Controller
{
    //
    public function create()
    {
        return view('boardgame.create');
    }

    public function library(BoardgameCreateRequest $request)
    {

        // dd($request->file('box'));
        $boardgame = BoardGame::create(
            [
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'players' => $request->input('players'),
                'instructor' => $request->input('instructor'),
                'box' => $request->has('box') ? $request->file('box')->store('box', 'public') : '/media/default.jpg',
            ]
        );
        // dd('controlla il database');
        return redirect()->route('boardgame.create')->with('success', 'Gioco da tavolo inserito con successo');
    }
}
