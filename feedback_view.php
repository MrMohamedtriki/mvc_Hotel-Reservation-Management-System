<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Feedbacks</title>
</head>
<body>

<div id="wrapper">
    <?php

    require_once('feedback_controller.php');

     require_once('header-admin.php');
     ?>

    <div class="container-fluid body-section container">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-plus-square"></i> All Feedbacks <small>Watch or Delete Feedback</small></h2>

                <div class="card">
                    <div class="card-content table-responsive table-full-width">
                        <table class="table">
                            <thead class="text-danger">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th><center>Delete</center></th>
                            </thead>
                            <tbody>
                            <?php foreach ($feedbacks as $feedback): ?>
                                <tr>
                                    <td><?php echo $feedback['id']; ?></td>
                                    <td><?php echo $feedback['name']; ?></td>
                                    <td><?php echo $feedback['email']; ?></td>
                                    <td class="text-primary"><?php echo $feedback['phone']; ?></td>
                                    <td><?php echo $feedback['message']; ?></td>
                                    <td><center><a href="feedback_view.php?del=<?php echo $feedback['id']; ?>"><i class="fa fa-times"></i></a></center></td>
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
