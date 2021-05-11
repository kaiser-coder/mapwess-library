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
        $request->validate([
            'title'          => 'required',
            'author'         => 'required',
            'pages'          => 'required|integer',
            'published_at'   => 'required',
            'description'    => 'nullable',
            'img'            => 'nullable'
        ]);

        $data = array_merge($request->all(), ['user_id'=> 1]);
        // dd($data);
        Book::create($data);
        return redirect('/home');
    }

    public function edit($id)
    {
        return view('books/edit', ['book' => Book::find($id)]);
    }

    public function update(Request $request, Int $id)
    {
        $validated_data = $request->validate([
            'title'          => 'required',
            'author'         => 'required',
            'pages'          => 'required|integer',
            'published_at'   => 'required',
            'description'    => 'nullable',
            'img'            => 'nullable'
        ]);


        $book = Book::where('id', $request->book_id)
        ->first();

        // dd($request->all());

        if ($book->user_id == 1) {
            Book::where('id', $id)
                ->update($validated_data);
        }

        return $this->view($id);
    }

    public function delete(Int $id)
    {
        $book = Book::find($id)->first();

        if($book->user_id == session('user_id')) {
            Book::find($id)->delete();
        }

        return redirect('/home');
    }
}
