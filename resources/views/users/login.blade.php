<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Managing Books</title>

    <link rel="stylesheet" href="{{ URL::asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container-fluid">

        @if (Session::get('error_message'))
            <div class="row">
                <div class="offset-4 col-4 mt-3">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Warning</strong> {{ Session::get('error_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="offset-4 col-4 card p-0 mt-5">
                <form action="/auth" method="POST">
                    @csrf
                    <div class="card-body" style="font-size: 13px;">
                        <div class="row form-group mt-1 mb-1">
                            <div class="col-12 text-center">
                                <h3>Login Page</h3>
                            </div>
                        </div>

                        <div class="row form-group p-1">
                            <div class="col-12">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control form-control-sm">
                                @error('email')
                                    <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group p-1">
                            <div class="col-12">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control form-control-sm">
                                @error('password')
                                    <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <a href="/register">Register</a>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Log in" class="btn btn-sm btn-info">
                        <input type="reset" value="Reset" class="btn btn-sm btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
