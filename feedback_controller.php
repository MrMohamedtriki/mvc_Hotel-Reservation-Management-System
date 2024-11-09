<?php
require_once('feedback_model.php');

if (isset($_GET['del'])) {
    $del = $_GET['del'];
    deleteFeedback($del);
}

$feedbacks = getAllFeedback();

?>
