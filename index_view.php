<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();
 include 'header_view.php';
?>

<div class="banner">    	   
    <img src="images/photos/ho.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotel in Tunisia</h1>
                <p class="animated fadeInUp">Most luxurious hotel in Tunisia with the royal treatments and excellent customer service.</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>

<div id="information" class="spacer reserve-info ">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8">
                <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I3t8QhSVBrU" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-5 col-md-4">
                <h3>Reservation</h3>
                <form  action="index_controlleur.php" role="form" class="wowload fadeInRight" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control"  placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control"  placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="Phone" name="phone" class="form-control"  placeholder="Phone">
                    </div>  
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="room_type">
                                    <option value="no">room type</option>
                                    <option value="Celebrety Room">Celebrety Room</option>
                                    <option value="Deluxe Room">Deluxe Room</option>
                                    <option value="AC Super Room">AC Super Room</option>
                                    <option value="AC Normal Room">AC Normal Room</option>
                                    <option value="Normal Room">Normal Room</option>
                                </select>
                            </div>  
                        </div>
                    </div>
                    
                    <label for="checkInDate">Check-in Date:</label>
                    <div class="form-group">
                        <input type="date" name="checkInDate" class="form-control" placeholder="Check-in Date" require>
                    </div>
                    
                    <label for="checkOutDate">Check-out Date:</label>
                    <div class="form-group">
                        <input type="date" name="checkOutDate" class="form-control" placeholder="Check-out Date" require>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Request" name="request">
                    <input type="submit" class="btn btn-primary" value="Devis" name="Devis">
                </form>    
            </div>
        </div>  
    </div>
</div>

<div class="spacer services wowload fadeInUp">
   
            <div class="caption">View our rooms and get an approximate price.<a href="rooms_tarif_view.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
            </div>
        </center>
        
    </div>
</div>

<?php include 'footer.php';?>
