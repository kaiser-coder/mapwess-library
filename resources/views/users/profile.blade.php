@extends('layout')

@section('title', 'User Profile')

@section('content')

<div class="row">
    <div class="offset-3 col-6 card p-0 mt-5">
        <form action="/update-user" method="POST">
            @method('PATCH')
            @csrf
            <div class="card-body" style="font-size: 13px;">
                <div class="row form-group mt-1 mb-1">
                    <div class="col-12 text-center">
                        <h3>User Profile</h3>
                    </div>
                </div>

                <div class="row form-group p-1">
                    <div class="col-12">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control form-control-sm" value="{{ $user->name }}">
                        @error('name')
                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group p-1">
                    <div class="col-12">
                        <label for="">Phone number</label>
                        <input type="text" name="phone" id="" class="form-control form-control-sm" value="{{ $user->phone }}">
                        @error('phone')
                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group p-1">
                    <div class="col-12">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control form-control-sm" value="{{ $user->email }}">
                        @error('email')
                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group p-1">
                    <div class="col-12">
                        <label for="">Old password</label>
                        <input type="old_password" name="password" id="" class="form-control form-control-sm" value="{{ $user->password }}">
                        @error('old_password')
                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group p-1">
                    <div class="col-12">
                        <label for="">New password</label>
                        <input type="password" name="new_password" id="" class="form-control form-control-sm">
                        @error('new_password')
                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row form-group p-1">
                    <div class="col-12">
                        <label for="">New Password confirmation</label>
                        <input type="password" name="new_password_confirmation" id="" class="form-control form-control-sm">
                        @error('new_password_confirmation')
                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Update" class="btn btn-sm btn-info">
                <input type="reset" value="Reset" class="btn btn-sm btn-danger">
            </div>
        </form>
    </div>
</div>

@endsection
