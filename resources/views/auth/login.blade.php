<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Malaga Class</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ URL::to('/') }}/adminpanel/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container lightmode">

    <div class="login-box animated fadeInDown">
        <div class="login-logo1" style="text-align: center;">
            <img src="/website/images/malagalogo.png" alt="" style="width: 166px">
            
        </div>
        <div class="login-body">
            <div class="login-title"><strong>Log In</strong> to your account</div>
            <form action="{{ route('login') }}" class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button class="btn btn-info btn-block">Log In</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2018 Malaga CLass
            </div>

        </div>
    </div>

</div>

</body>
</html>






