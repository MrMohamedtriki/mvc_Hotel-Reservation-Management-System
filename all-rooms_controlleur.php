<?php

require_once('db.php');
require_once('header-admin.php');

if (isset($_GET['del'])) {
    $roomId = $_GET['del'];
    $query = "DELETE FROM rooms WHERE rooms.id = $roomId";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("Location: all-rooms_view.php");
        exit();
    } else {
    }
}

$rooms = [];
$query = "SELECT * FROM rooms ORDER BY rooms.id ASC";
$result = mysqli_query($con, $query);
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $rooms[] = $row;
    }
}


?>
