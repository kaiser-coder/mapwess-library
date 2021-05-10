<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Books extends Controller
{
    public function home() {
        return view('home', ['books' => Book::all() ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $validatedData =  $request->validate([
            'title'        => 'required',
            'author'       => 'required',
            'published_at' => 'required',
            'description'  => 'required'
        ]);

        Book::create($validatedData);
        return redirect('/home');
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update()
    {
        # code...
    }
}
