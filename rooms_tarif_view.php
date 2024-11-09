<?php
session_start();
ob_start();
include 'header_view.php';

require_once('rooms_model.php');
require_once('connexion.php'); 

$conn = getConnection();


$roomsData = getRoomsData($conn);
?>

<div class="container">
    <h2>Rooms & Tariff</h2>
    <div class="row">
        <?php foreach ($roomsData as $room): ?>
            <div class="col-sm-6 wowload fadeInUp">
                <div class="rooms">
                    <img src="images/photos/<?php echo $room['image1']; ?>" class="img-responsive">
                    <div class="info">
                        <h3><?php echo $room['title']; ?></h3>
                        <p style="color: darkgreen;"> Taille en metre du chambre: <?php echo $room['size']; ?> <br> montatn du chambre sans prendere en considiration le saision et le nombre de nuit : <?php echo $room['price']; ?> Dinar Tunisian</p>
                        <a href="room_details_view.php?id=<?php echo $room['id']; ?>" class="btn btn-default">Check Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php  
?>

<?php include 'footer.php'; ?>
