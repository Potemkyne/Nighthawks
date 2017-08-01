<!doctype html>
<html>
    <head>
        <title>Hopper</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="CSS/mystyles.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top ">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li ><a href="home.php">Home</a></li>
                        <li><a href="carousel.php">Carousel</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Oeuvres<b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Nighthawks</a></li>
                                <li><a href="#">New York Movie</a></li>
                                <li><a href="#">The Long Leg</a></li>
                                <li><a href="#">Automat</a></li>
                            </ul>
                        </li>
                        <li><a href="modal.php">Modal</a></li>
                        <li><a href="mapsql.php">Où sont exposer les oeuvres?</a></li>
                    </ul>
                    <form class="navbar-form navbar-right inline-form" method="post" action="#">
                        <div class="form-group">
                            <input class="form-control btn " type="search" name="search" placeholder="Recherche" />
                            <button class="form-control btn" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>      
                    </form>
                </div>
            </nav>
        </header>
