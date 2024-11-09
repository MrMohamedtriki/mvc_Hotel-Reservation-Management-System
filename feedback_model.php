<?php
require_once('db.php');

function getAllFeedback() {
    global $con;
    $feedbacks = [];
    $query = "SELECT * FROM feedback ORDER BY id ASC";
    $result = mysqli_query($con, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $feedbacks[] = $row;
        }
    }
    return $feedbacks;
}

function deleteFeedback($id) {
    global $con;
    $query = "DELETE FROM feedback WHERE id = $id";
    return mysqli_query($con, $query);
}
?>
