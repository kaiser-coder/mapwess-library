@extends('layout')

@section('title', 'View book details')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" style="font-size: 13px">
                    <div class="col-6">
                        <div class="row mb-1">
                            <div class="col-3">
                                <b>Titre:</b>
                            </div>
                            <div class="col-9">
                                {{ $book->title }}
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <b>Pages:</b>
                            </div>
                            <div class="col-9">
                                {{ $book->pages }} pages
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <b>Publié le:</b>
                            </div>
                            <div class="col-9">
                                {{ $book->published_at }}
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <b>Auteur:</b>
                            </div>
                            <div class="col-9">
                                {{ $book->author }}
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-3">
                                <b>Description:</b>
                            </div>
                            <div class="col-9">
                                {{ $book->description }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ $book->img }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
