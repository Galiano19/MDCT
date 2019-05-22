<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MDCT - Lobby</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
    <!-- Jquery hexagon-->
    <script type="text/javascript" src="{{ asset('js/hexagon.js') }}"></script>
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS -->
    <link href="{{ asset('css/lobby.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <!-- Navbar -->
    <nav id="side-nav" >
        <img src="{{ asset('images/logo.png') }}" alt="MDCT" class="logonav">
        <ul class="optionsnav">
            <li><a href="{{ action('CharacterController@indexCharacters') }}">CHARACTERS</a></li>
            <li><a href="{{ action('CampaignController@indexCampaigns') }}">CAMPAIGNS</a></li>
        </ul>
        <a href="#"><i class="material-icons navBtn">more_vert</i></a>
    </nav>
    <!-- Navbar small -->

    <nav class="navbar navbar-inverse navsmall">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="MDCT" width="30" height="30">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ action('CharacterController@indexCharacters') }}">CHARACTERS</a></li>
                <li><a href="{{ action('CampaignController@indexCampaigns') }}">CAMPAIGNS</a></li>
            </ul>
        </div>
    </div>
    </nav>
    <!-- Background Hexagons-->
    <svg class="hexagons" width="600" height="265"  viewBox="0 0 350 210">
            <g transform="translate(300,132.5)">
                <g class="tile" transform="translate(-333.41978045700887,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-363.73066958946424,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-272.7980021920981,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-303.1088913245535,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-333.41978045700887,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-212.17622392718746,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-242.4871130596428,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-272.7980021920981,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-303.1088913245535,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-151.55444566227678,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-181.86533479473212,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-212.17622392718746,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-242.4871130596428,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-90.93266739736606,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-121.2435565298214,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-151.55444566227675,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-181.86533479473212,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-30.31088913245535,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-60.6217782649107,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-90.93266739736606,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-121.2435565298214,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(30.31088913245535,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(0,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-30.31088913245535,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(-60.6217782649107,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(90.93266739736606,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(60.6217782649107,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(30.31088913245535,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(0,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(151.55444566227675,52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(121.2435565298214,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(90.93266739736606,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(60.6217782649107,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(181.86533479473212,0)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(151.55444566227678,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(121.24355652982142,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(212.17622392718746,-52.5)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>
                <g class="tile" transform="translate(181.86533479473212,-105)">
                <polygon points="35.000,0.000 17.500,30.311 -17.500,30.311 -35.000,0.000 -17.500,-30.311 17.500,-30.311" transform="rotate(-30)"></polygon>
                </g>  
            </g>
            </svg>
</header>
<div class="container col-12">
<div class="content">
            @yield('content')
            </div>
</div>


            <footer>
                <!-- Jquery navside-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/navside.js') }}"></script>

            </footer>
</body>
</html>