@extends('layout')

@section('title', 'Create book form')

@section('content')


<form class="row mb-3" method="post" action="/store" style="font-size: 13px">
    @csrf
    <div class="offset-1 col-10 card p-0">
        <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control form-control-sm">
                    @error('title')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 form-group">
                    <label for="">Author</label>
                    <input type="text" name="author" id="" class="form-control form-control-sm">
                    @error('author')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Published at date</label>
                    <input type="date" name="published_at" id="" class="form-control form-control-sm">
                    @error('published_at')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 form-group">
                    <label for="">Pages</label>
                    <input type="number" name="pages" id="" class="form-control form-control-sm">
                    @error('pages')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                    @error('description')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="">Images</label>
                    <input type="text" name="img" id="" class="form-control form-control-sm">
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ session('user_id') }}">
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Store" class="btn btn-sm btn-info">
                    <input type="reset" value="Reset" class="btn btn-sm btn-danger">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
