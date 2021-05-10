@extends('layout')

@section('title', 'Edit book form')

@section('content')


<form class="row mb-3" method="post" action="/update/{{ $book->did }}" style="font-size: 13px">
    @csrf
    @method('PATCH')
    <div class="offset-1 col-10 card p-0">
        <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control form-control-sm" value="{{ $book->title }}">
                    @error('title')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 form-group">
                    <label for="">Author</label>
                    <input type="text" name="author" id="" class="form-control form-control-sm" value="{{ $book->author }}">
                    @error('author')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Published at date</label>
                    <input type="date" name="published_at" id="" class="form-control form-control-sm" value="{{ $book->published_at }}">
                    @error('published_at')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 form-group">
                    <label for="">Pages</label>
                    <input type="number" name="pages" id="" class="form-control form-control-sm" value="{{ $book->pages }}">
                    @error('pages')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm">
                        {{ $book->description }}
                    </textarea>
                    @error('description')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="">Images</label>
                    <input type="text" name="img" id="" class="form-control form-control-sm" value="{{ $book->img }}">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Update" class="btn btn-sm btn-info">
                    <input type="reset" value="Reset" class="btn btn-sm btn-danger">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
