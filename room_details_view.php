<?php
session_start();

 include 'header_view.php';
include 'room_details_controller.php';

 ?>

<div class="container">
    <h1 class="title"><?php echo $room['title']; ?></h1>
    <div id="RoomDetails" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"><img src="images/photos/<?php echo $room['image1']; ?>" class="img-responsive" alt="slide"></div>
            <div class="item height-full"><img src="images/photos/<?php echo $room['image2']; ?>" class="img-responsive" alt="slide"></div>
            <div class="item height-full"><img src="images/photos/<?php echo $room['image3']; ?>" class="img-responsive" alt="slide"></div>
            <div class="item height-full"><img src="images/photos/<?php echo $room['image4']; ?>" class="img-responsive" alt="slide"></div>
        </div>
        <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>
    <div class="room-features spacer">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <p><?php echo $room['description']; ?></p>
            </div>
            <div class="col-sm-6 col-md-3 amenitites">
                <h3>Common Facilities</h3>
                <ul>
                    <li>Television with more than 400 channels.</li>
                    <li>Attached bathroom with bath-tub.</li>
                    <li>Wide balcony towards beautiful garden.</li>
                    <li>House keeping 3 times per day.</li>
                    <li>24 hours water supply.</li>
                </ul>
            </div>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
