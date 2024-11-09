<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Rooms</title>
</head>
<body>

<div id="wrapper">
    <?php 
    session_start();
    require_once('All-rooms_controlleur.php'); 
    require_once('header-admin.php'); 
    require_once('db.php');
    require_once('header-admin.php');
    
    ?>

    <div class="container-fluid body-section container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-plus-square"></i> All Rooms <small>Edit or Delete Room</small></h2>

                <div class="card">
                    <div class="card-content table-responsive table-full-width">
                        <table class="table">
                            <thead class="text-danger">
                            <th><center>ID</center></th>
                            <th><center>Room Title</center></th>
                            <th><center>Size</center></th>
                            <th><center>Price</center></th>
                            <th><center>Edit</center></th>
                            <th><center>Delete</center></th>
                            </thead>
                            <tbody>
                            <?php foreach ($rooms as $room): ?>
                                <tr>
                                    <td><center><?php echo $room['id']; ?></center></td>
                                    <td><center><?php echo $room['title']; ?></center></td>
                                    <td><center><?php echo $room['size']; ?> mettre </center></td>
                                    <td class="text-primary"><center><?php echo $room['price']; ?> dinars</center></td>
                                    <td><center><a href="edit-room.php?id=<?php echo $room['id']; ?>"><i class="fa fa-pencil"></i></a></center></td>
                                    <td><center><a href="all-rooms_controlleur.php?del=<?php echo $room['id']; ?>"><i class="fa fa-times"></i></a></center></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('footer-admin.php'); ?>
</div>

</body>
</html>
