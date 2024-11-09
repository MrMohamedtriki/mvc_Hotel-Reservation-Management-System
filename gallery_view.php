<?php 
include 'gallery_controlleur.php';
include 'header_view.php';



?>
<div class="container">
    <h1 class="title">Gallery</h1>
    <div class="row gallery">
        <?php foreach ($roomsData as $room): ?>
            <div class="col-sm-4 wowload fadeInUp">
                <a href="images/photos/<?php echo $room['image1']; ?>" title="<?php echo $room['title']; ?>" class="gallery-image" data-gallery>
                    <img src="images/photos/<?php echo $room['image1']; ?>" class="img-responsive">
                </a>
            </div>
            <div class="col-sm-4 wowload fadeInUp">
                <a href="images/photos/<?php echo $room['image2']; ?>" title="<?php echo $room['title']; ?>" class="gallery-image" data-gallery>
                    <img src="images/photos/<?php echo $room['image2']; ?>" class="img-responsive">
                </a>
            </div>
            <div class="col-sm-4 wowload fadeInUp">
                <a href="images/photos/<?php echo $room['image3']; ?>" title="<?php echo $room['title']; ?>" class="gallery-image" data-gallery>
                    <img src="images/photos/<?php echo $room['image3']; ?>" class="img-responsive">
                </a>
            </div>
            <div class="col-sm-4 wowload fadeInUp">
                <a href="images/photos/<?php echo $room['image4']; ?>" title="<?php echo $room['title']; ?>" class="gallery-image" data-gallery>
                    <img src="images/photos/<?php echo $room['image4']; ?>" class="img-responsive">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php'; ?>

