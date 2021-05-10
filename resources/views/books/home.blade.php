@extends('layout')

@section('title', 'Book\'s home')

@section('content')

@foreach ($books as $book)
<div class="row mb-1">
    <div class="offset-1 col-10 card">
        <div class="card-body">
            <div class="row">
                <img src="{{ $book->img }}" alt="" srcset="" class="col-3">
                <div class="col-9">
                    <h4><a href="/view/{{ $book->id }}">{{ $book->title }}</a></h4>

                    <div class="dropdown mt-1 mb-1">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="/edit/{{ $book->id }}" class="dropdown-item">Edit book</a>
                            <a href="/delete/{{ $book->id }}" class="dropdown-item">Delete book</a>
                        </div>
                    </div>

                    <small class="text-muted">Publié le {{ $book->published_at }} - Auteur: {{ $book->author }}</small>

                    <p style="font-size: 13px">
                        {{ $book->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
