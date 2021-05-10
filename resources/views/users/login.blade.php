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
                            </div>
                        </div>
                        <div class="row form-group p-1">
                            <div class="col-12">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control form-control-sm">
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
</html>
