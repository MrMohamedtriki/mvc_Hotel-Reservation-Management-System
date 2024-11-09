<?php
require_once('connexion.php');
require_once('requests_model.php');

$conn = getConnection();
$model = new RequestsModel($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status'])) {
    $reservation_id = $_POST['reservation_id'];
    $new_status = $_POST['new_status'];
    
    $model->updateRequestStatus($reservation_id, $new_status);
}

$requests = $model->getAllRequests();

?>
