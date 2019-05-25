<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
         <!-- Jquery scrolldown-->
         <script type="text/javascript" src="{{ asset('js/scrolldown.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <!-- CSS -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    </head>
    <body>
    <!-- State one -->

    <div class="sliderhome" id="sliderhome">
        <div class="container-fluid">
            <div class="row  justify-content-end text-right mr-2 pt-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">
                            <span class="align-self-center logintitle">HOME</span>
                            <i class=" material-icons logo_login" >account_circle</i>   
                        </a>         
                    @else
                        <a class="" href="{{ url('/login') }}">                       
                            <span class=" align-self-center logintitle">LOGIN</span>
                            <i class=" material-icons logo_login" >account_circle</i>
                        </a>

                @endauth
            @endif
            </div>
            <div class="row  elements">
                <div class="col-lg-6 justify-content-center text-center center-block logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <div class="col-lg-6 align-self-center text-center center-block ">
                    <h1 class="ourname ">MINIMAL DRAGON COMBAT TRACKER</h1>
                </div> 
            </div>
            <div class="row justify-content-center text-center center-block ">
                <Span class="quoteslider">A new generation for role games</Span>
            </div>
            <div class="row justify-content-center text-center center-block">
                <a class="flechita" href="#statetwooptions">
                    <i class="material-icons">keyboard_arrow_down</i>
                </a>
            </div>
        </div>
    </div> 

    <!-- State two -->

    <div class="container-fluid" id="statetwooptions">
        <div class="quoteblock">
            <div class="row justify-content-md-center mt-5 mb-5 ">
                <span class="quote col-md-6 col-sm-12">"All we have to decide is what to do with the time that is given us"</span>
            </div>
            <div class="row justify-content-md-center mb-5">
                <span class="quote col-md-6 col-sm-12 quoteauthor">J.R.R. Tolkien</span>
            </div>
        </div>
        <div class="row whatismdct">
            <div class=" flex align-self-center">
                    <h2 class="mt-4 ml-5">WHAT IS MDCT</h2>
                    <div class="hr ml-5"></div>
                    <p class="col-md-6 col-sm-8 col-10  mt-4 ml-5 mr-5">Simple, easy, elegant. Minimal Dragon Combat Tracker gives you a new way to manage your characters and role games like never before</p>
                    <a name="" id="" class="btn button ml-5" href="#" role="button">READ MORE</a>
                </div>
        </div>
        <div class="row ">
            <div class="col-md-6 alreadyanuser">
                <div class="flex align-self-center justify-content-center text-center alreadyanusercontent">
                    <h2 class="">ALREADY AN USER?</h2>
                    <div class="hr justify-content-center text-center center-block"></div>
                    <p class="  mt-4 ml-5 mr-5">Welcome back! we are glad to see you again</p>
                    <a name="" id="" class="btn button " href="/login" role="button">LOGIN</a>
                </div>
                
            </div>
            <div class="col-md-6 getstarted">
                <div class="flex align-self-center justify-content-center text-center getstartedcontent">
                    <h2 class="">GET STARTED</h2>
                    <div class="hr justify-content-center text-center center-block"></div>
                    <p class="mt-4 ml-5 mr-5">Have you decided to join us? Congrats!<br> You're just few steps away from manage your heroes and games</p>
                    <a name="" id="" class="btn button " href="/register" role="button">REGISTER</a>
                </div>
            </div>
        </div>
        <div class="quoteblock">
            <div class="row justify-content-md-center mt-5 mb-5 ">
                <span class="quote col-md-6 col-sm-12">"The essence of a role-playing game is that it is a group, cooperative experience"</span>
            </div>
            <div class="row justify-content-md-center mb-5">
                <span class="quote col-md-6 col-sm-12 quoteauthor">Gary Gygax</span>
            </div>
        </div>
        <div class="row  footer">
            <div class="col-4 align-self-center">
                <a href="#sliderhome">
                    <img  class="logofooter" src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="col-4">
                
            </div>
            <div class="col-4 align-self-center">
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="#">Updates</a></li>
                </ul>
            </div>
        </div>       
    </div>
    </body>

</html>
