<?php
require_once('rooms_model.php');
require_once('connexion.php');
$conn = getConnection(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $id = $_POST['id'] ?? null; 
        $title = $_POST['title'];
        $size = $_POST['size'];
        $price = $_POST['price'];
        $post_data = $_POST['post-data'];

        
        
       
        $success = updateRoom($conn, $id, $title);
        
        if($success){
            $msg = "Room updated successfully.";
        } else {
            $error = "Failed to update room.";
        }
    }
}
?>
