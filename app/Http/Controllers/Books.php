<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Books extends Controller
{
    public function home() {
        $books = DB::table('books')
        ->join('authors', 'books.authors_id', '=', 'authors.id')
        ->get();

        return view('home', ['books' => $books ]);
    }

    public function create() {
        return view('create', ['authors' => Author::all()]);
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
