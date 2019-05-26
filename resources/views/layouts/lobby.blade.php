<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MDCT - Lobby</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- Jquery hexagon-->
        <script type="text/javascript" src="{{ asset('js/hexagon.js') }}"></script>
        <!-- Bootstrap -->
     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Jquery navside-->
        <script type="text/javascript" src="{{ asset('js/navside.js') }}"></script>

    <!-- Styles -->
    <!-- CSS -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <!-- Navbar -->
    <nav id="side-nav" >
        <a href="/home">
            <img src="{{ asset('images/logo.png') }}" alt="MDCT" class="logonav">
        </a>
        <ul class="optionsnav">
            <li><a href="{{ action('CharacterController@indexCharacters') }}">CHARACTERS</a></li>
            <li><a href="{{ action('CampaignController@indexCampaigns') }}">CAMPAIGNS</a></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
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
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>-
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Background Hexagons-->
<?php
$idpage= $_SERVER['REQUEST_URI'];
if (($idpage != "/characters/show")&&($idpage != "/campaigns/create")&&($idpage != "/campaigns/index")&&($idpage != "/campaign/prejoin")) {     
    echo '<svg class="hexagons" width="600" height="265"  viewBox="0 0 350 210">
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
</svg>' ;
    } 
    ?>
<?php //funció per cambiar el banner aleatoriament
    $bg = array('back5.jpg', 'back6.jpg', 'back7.jpg');
    $i = rand(0, count($bg)-1); 
    $selected = "$bg[$i]"; 
?> 
<div class="superior" style="background: url(../images/<?php echo $selected; ?>) center center / cover no-repeat;">   
    <div class="container">
        <div class="row flex-row align-content-center">
            <div class="col-4"></div>
            <div class="col-4 text-center center-block">
                <span>
                    <?php 
                        $idpage= $_SERVER['REQUEST_URI'];
                        if ($idpage == "/home") {
                            echo "MDCT" ;
                            }   
                        elseif (($idpage == "/characters/index")||($idpage == "/characters/show") ){     
                            echo "CHARACTERS" ;
                            }
                        elseif (($idpage == "/characters/create")){     
                            echo "CREATE CHARACTER" ;
                            }
                        elseif (($idpage == "/campaigns/index")){     
                            echo "CAMPAIGNS" ;
                            }
                        elseif (($idpage == "/campaigns/create")){     
                            echo "NEW CAMPAIGN" ;
                            }
                        elseif (($idpage == "/campaigns/prejoin")){     
                            echo "JOIN A CAMPAIGN" ;
                            }
                        else{     
                            echo "MODIFY CHARACTER" ;
                            }        
                    ?>
                    </span>
                    <div class="row justify-content-center">        
                        <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
                    </div>
                </div> 
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</div>    
<div class="content" style="z-index:999;">
    @yield('content')
</div>

<?php
    $idpage= $_SERVER['REQUEST_URI'];
    if ($idpage == "/characters/index") {     
        echo '<div class="inferior">   
        <div class="container">
            <div class="row flex-row align-content-center pl-4 pr-4">
                <h3 class=" col-md-12 col-sm-10 col-8  mt-4 ml-5 mr-5">About characters...</h3>
                <span class=" col-md-12 col-sm-10 col-8  mt-4 ml-5 mr-5">';
                $quote = array('Keep always your heroes updated in order to not to confuse the game master', 
                'Be proud of the heroe you have raised', 
                'Only you can modify the stats of your characters',
                'More classes incoming...',
                'Is this strong enough?',
                'Don\'t forget to give to your hero a good back story.<br>Remember everyone is here for the plot... ');
                $i = rand(0, count($quote)-1); 
                $selected = "$quote[$i]";
                echo $selected ; 
                echo '</span>
                </div>
            </div>   
        </div>';
    }
?>
</body>
</html>