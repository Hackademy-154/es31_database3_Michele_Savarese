<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('created_at','desc')->get();
        return view('author.index', compact('authors'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Author::create([
            'name'=>$request->name,
            'bio'=>$request->bio,
            'pic'=> $request->has('pic')? $request->file('pic')->store('pics','public'): null,
        ]);
return redirect()->route('author.create')->with('success','Autore Creato');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
