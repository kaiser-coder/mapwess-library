@extends('layout')

@section('title', 'Create book form')

@section('content')


<form class="row mb-3" method="post" action="/store">
    @csrf
    <div class="offset-1 col-10 card p-0">
        <div class="card-body">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Titre</label>
                    <input type="text" name="title" id="" class="form-control form-control-sm">
                    @error('title')
                        <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6 form-group">
                    <label for="">Auteur</label>
                    <select name="author" id="" class="form-control form-control-sm">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="">Date de sortie</label>
                    <input type="date" name="published_at" id="" class="form-control form-control-sm">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Enregistrer" class="btn btn-sm btn-info">
                    <input type="reset" value="Annuler" class="btn btn-sm btn-danger">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
