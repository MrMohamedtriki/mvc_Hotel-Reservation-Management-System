<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('requests_model.php');

require_once('connexion.php'); 

$test_lgin_or_not = 0; 
$conn = null; 

if (isset($_SESSION['login'])) {
    $test_lgin_or_not = 1; 
    $conn = getConnection(); 
    $username = $_SESSION['login']; 
} 
$requestsModel = new RequestsModel($conn);

if ($test_lgin_or_not == 1) {
    $reservations = $requestsModel->getReservationsByUser($username);
}

?>
