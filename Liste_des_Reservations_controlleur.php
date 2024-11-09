<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'connexion.php';

require_once('requests_model.php');

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['login'];
$conn = getConnection(); 
$requestsModel = new RequestsModel($conn); 
$reservations = $requestsModel->getReservationsByUser($username);

?>
