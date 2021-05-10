<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class Books extends Controller
{
    public function home() {
        return view('books/home', ['books' => Book::all() ]);
    }

    public function view(Int $id)
    {
        return view('books/view', ['book' => Book::find($id)]);
    }

    public function create() {
        return view('books/create');
    }

    public function store(Request $request) {
        $validatedData =  $request->validate([
            'title'          => 'required',
            'author'         => 'required',
            'pages'          => 'required|integer',
            'published_at'   => 'required',
            'description'    => 'nullable',
            'img'            => 'nullable'
        ]);

        dd($request->all());

        Book::create($request->all());
        return redirect('/home');
    }

    public function edit($id)
    {
        return view('books/edit', ['book' => Book::find($id)]);
    }

    public function update(Request $request, Int $id)
    {
        $validatedData =  $request->validate([
            'title'          => 'required',
            'author'         => 'required',
            'pages'          => 'required|integer',
            'published_at'   => 'required',
            'description'    => 'nullable',
            'img'            => 'nullable'
        ]);

        dd($request->all());

        Book::where($request->all())
        ->update($request->all());

        return $this->view($id);
    }

    public function delete(Int $id)
    {
        Book::find($id)
        ->delete();

        return redirect('/home');
    }
}
