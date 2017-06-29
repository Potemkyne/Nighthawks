<?php
include_once 'header.inc.php';
?>
<div class="container ">
    <div id="myCarousel" class="carousel slide im1" data-ride="carousel">
        <!-- indicateurs -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="CSS/1.jpg" class="img-responsive" alt="nighthawks" >
                <div class="carousel-caption im1" >
                    <p>Nighthawks - 1942</p>
                    <a href="#" role="button" class="btn btn-default">En savoir plus</a>
                </div>
            </div>
            
            <div class="item">
                <img src="CSS/2.jpg" class="img-responsive" alt="New York Movie" >
                <div class="carousel-caption im1"  >
                    <p>New York Movie - 1939</p>
                    <a href="#" role="button" class="btn btn-default">En savoir plus</a>
                </div>
            </div>

            <div class="item">
                <img src="CSS/3.jpg" class="img-responsive" alt="The Long Leg">
                <div class="carousel-caption im1" >
                    <p>The Long Leg - 1935</p>
                    <a href="#" role="button" class="btn btn-default">En savoir plus</a>
                </div>
            </div>

            <div class="item">
                <img src="CSS/6.jpg" class="img-responsive im1" alt="Summer Evening" >
                <div class="carousel-caption im1" >
                    <p>Summer Evening - 1927</p>
                    <a href="#" role="button" class="btn btn-default">En savoir plus</a>
                </div>
            </div>
        </div>
        <!-- contrôles -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php
include 'footer.inc.php';
?>