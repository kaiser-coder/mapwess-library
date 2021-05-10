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
                <form action="/save" method="POST">
                    @csrf
                    <div class="card-body" style="font-size: 13px;">
                        <div class="row form-group mt-1 mb-1">
                            <div class="col-12 text-center">
                                <h3>Register Page</h3>
                            </div>
                        </div>

                        <div class="row form-group p-1">
                            <div class="col-12">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control form-control-sm">
                                @error('name')
                                    <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group p-1">
                            <div class="col-12">
                                <label for="">Phone number</label>
                                <input type="text" name="phone" id="" class="form-control form-control-sm">
                                @error('phone')
                                    <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                @enderror
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
                        <div class="row form-group p-1">
                            <div class="col-12">
                                <label for="">Password confirmation</label>
                                <input type="password" name="password_confirmation" id="" class="form-control form-control-sm">
                                @error('password_confirmation')
                                    <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 mt-3 mb-3">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="refresh-captcha" id="refresh-captcha">
                                        &#x21bb;
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <input id="captcha" type="text" class="form-control form-control-sm" placeholder="" name="captcha">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Register" class="btn btn-sm btn-info">
                        <input type="reset" value="Reset" class="btn btn-sm btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#refresh-captcha').click(function () {
            $.ajax({
                type: 'GET',
                url: 'refresh-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

    </script>
</body>
</html>
