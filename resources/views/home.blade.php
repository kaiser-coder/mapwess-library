@extends('layout')

@section('title', 'Book\'s home')

@section('content')

@foreach ($books as $book)
<div class="row mb-3">
    <div class="offset-1 col-10 card">
        <div class="card-body">
            <h4><a href="/view/{{ $book->id }}">{{ $book->title }}</a></h4>
            <small class="text-muted">Publié le {{ $book->published_at }} - Auteur: {{ $book->author }}</small>
            <p style="font-size: 13px">
                {{ $book->description }}
            </p>
        </div>
    </div>
</div>
@endforeach

@endsection
