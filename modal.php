<?php
include_once 'header.inc.php';
?>

<div class="container ">
    <div class="row portfolio">
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/1.jpg" alt="Nighthawks" > </a> </div>
        <div class="col-xs-6"> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/2.jpg" alt="New York Movie" > </a> </div>

    </div>
    <div class="row portfolio">
        <div class="col-xs-6"> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/3.jpg"  alt="The Long Leg" > </a> </div>
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/4.jpg" alt="Automat" > </a> </div>

    </div>
    <div class="row portfolio ">
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/10.jpg" alt="People in the Sun "> </a> </div>
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/6.jpg" alt="Early Sunday Morning" > </a> </div>

    </div>
    <div class="row portfolio ">
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/7.jpg" alt="Rooms by the Sea" > </a> </div>
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/5.jpg" alt="Summer Evening" > </a> </div>
    </div>
    <div class="row portfolio ">
        <div class="col-xs-6 "> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/9.jpg" alt="Summer Evening" > </a> </div>
        <div class="col-xs-6"> <a href="#" data-toggle="modal" data-target="#myModal"> <img class="img-responsive scale" src="CSS/10.jpg" alt="Cape Cod Evening" > </a> </div>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" > <span >&times;</span> </button>
                <h4 class="modal-title">Nighthawks</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-5"> <img class="img-responsive" src="CSS/1.jpg" alt="Nighthawks" > 
                    </div>
                    <div class="col-xs-7">
                        <p>Nighthawks is a 1942 oil on canvas painting by Edward Hopper that portrays people in a downtown diner late at night. It is Hopper's most famous work, and is one of the most recognizable paintings in American art.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-block" data-dismiss="modal">Fermer</button>
            </div>
        </div>
        <!--content--> 
    </div>
    <!--dialog--> 
</div>
<!--modal-->

<?php
include_once 'footer.inc.php';
?>