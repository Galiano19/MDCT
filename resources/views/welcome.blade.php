<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Jquery scrolldown-->
        <script type="text/javascript" src="{{ asset('js/scrolldown.js') }}"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <!-- CSS -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    </head>
    <body>
    <!-- State one -->
    <section id="section01" class="demo">
        <div class="loginarea">
            <div class="container">
                <div class="row">
                <i class="col-3 material-icons logo_login" >account_circle</i>
            
            @if (Route::has('login'))
                @auth
                    <a class="col-8" href="{{ url('/home') }}">
                    <span class="logintitle">HOME</span>
                </a>
                @else
                <span class="col-8 logintitle">LOGIN</span>
                <div class="formlogin">
                <form class="formulari" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-5 control-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }} id="checkbox" style="margin-left:0!important;">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            @endauth
            @endif
        </div>
                </div>

            </div>
            
        <img class="arrow1" src="{{ asset('images/Arrow1.png') }}">
        <img class="arrow2" src="{{ asset('images/Arrow2.png') }}">
        <p class="ourname">MINIMAL DRAGON COMBAT TRACKER</p>
        <a href="#statetwooptions"><span class="flecha"></span></a>
    </section>

    <!-- State two -->

    <div class="container">
        <div class="row statetwooptions" id="statetwooptions">
            <div class="col-md-3 option">
                <a href="">
                    <span class="linkoption">WHAT IS MDCT</span>
                    <img class="imageoption" src="{{ asset('images/photo1.jpg') }}" alt="">
                </a>

            </div>
            <div class="col-md-3 option">
                <a href="">
                    <span class="linkoption">UPDATES</span>
                    <img class="imageoption" src="{{ asset('images/photo2.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-md-3 option">
                <a href="">
                    <span class="linkoption">LOG IN</span>
                    <img class="imageoption" src="{{ asset('images/photo3.jpg') }}" alt="">
                </a>
            </div>
            <div class="col-md-3 option">
                <a href="">
                    <span class="linkoption">GET STARTED</span>
                    <img class="imageoption" src="{{ asset('images/photo4.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>

    <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    -->
    </body>

</html>
