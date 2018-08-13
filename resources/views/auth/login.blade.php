<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Beerly Beloved</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                height: 100px;
                width: 100px;
            }
            .topleft {
                position: absolute;
                height: 110px;
                width: 110px;
                top: 8px;
                left: 16px;
                font-size: 18px;
            }
            body{
                background-image:url(images/loginbg.png);
                
                /* Center and scale the image nicely */
                background-repeat: no-repeat; 
                background-position: center;
                background-attachment: fixed;       
                webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height:100%;
                width:100%;
            }
            #app{
                margin-top: 100px;
            }
            
        </style>
    </head>
    <body><img src='images/bblogo.png' class="topleft">
        <div id="app">
            <div  class="container">

                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="panel panel-default">
                            <!--                <div class="panel-heading">Login</div>-->

                            <div class="panel-body"><h4><b>Login</b></h4><hr>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Email Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> {{ old('remember') ? 'checked' : '' }} Remember Me
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                            <br>
                                            Forgot your password?
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Reset Here
                                            </a><br>
                                            Don't have an account?
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                Sign Up Here
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

