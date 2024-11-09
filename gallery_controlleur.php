<?php
session_start();

require_once 'connexion.php'; 

require_once 'rooms_model.php';
$conn = getConnection();

$roomsData = getRoomsData($conn);

?>
