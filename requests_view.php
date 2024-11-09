<!DOCTYPE html>
<html>
<head>
    <title>All Requests</title>
</head>
<body>
    <div id="wrapper">
    <?php require_once('requests_controller.php'); ?>

        <?php require_once('header-admin.php'); ?>
        <div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="text-danger">
                            <th><center>ID</center></th>
                            <th><center>Name</center></th>
                            <th><center>Email</center></th>
                            <th><center>Phone</center></th>
                            <th><center>Room Name</center></th>
                            <th><center>Message</center></th>
                            <th><center>Etat</center></th>
                            <th><center>Check-in Date</center></th>
                            <th><center>Check-out Date</center></th>
                            <th><center>Price</center></th>
                            <th><center>Action</center></th> 
                        </thead>
                        <tbody>
                        <?php// if(isset($requests) && !empty($requests)): ?>

                            <?php foreach ($requests as $row): ?>
                            <tr>
                                <td><center><?php echo $row['id']; ?></center></td>
                                <td><center><?php echo $row['name']; ?></center></td>
                                <td><center><?php echo $row['email']; ?></center></td>
                                <td class="text-primary"><center><?php echo $row['phone']; ?></center></td>
                                <td><center><?php echo $row['room_name']; ?></center></td>
                                <td><center><?php echo $row['message']; ?></center></td>
                                <td><center><?php echo $row['etat']; ?></center></td>
                                <td><center><?php echo $row['checkInDate']; ?></center></td>
                                <td><center><?php echo $row['checkOutDate']; ?></center></td>
                                <td><center><?php echo $row['price']; ?></center></td>
                                
                                <!-- Form for updating status -->
                                <td>
                                    <form method="post" action="requests_view.php">
                                        <input type="hidden" name="reservation_id" value="<?php echo $row['id']; ?>">
                                        <select name="new_status">
                                            <option value="0" <?php if($row['etat'] == 0) echo "selected"; ?>>En attente</option>
                                            <option value="1" <?php if($row['etat'] == 1) echo "selected"; ?>>Validée</option>
                                            <option value="2" <?php if($row['etat'] == 2) echo "selected"; ?>>Terminée</option>
                                        </select>
                                        <button type="submit" name="update_status">Update</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php// else: ?>
                            <!-- <p>No requests found.</p> -->
                            <?php //endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require_once('footer-admin.php'); ?>
    </div>
</body>
</html>
