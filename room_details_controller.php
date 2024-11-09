<?php


require_once('connexion.php');
require_once('rooms_model.php');

$conn = getConnection();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $room = getRoomDetails($id); 
}
?>
