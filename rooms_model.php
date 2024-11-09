<?php
include('connexion.php');
include('edit-room_controlleur.php');
global $conn;
$conn = getConnection();

function getRoomsData() {
    global $conn;
    $q = "SELECT * FROM rooms ORDER BY id ASC";
    $stmt = $conn->query($q);
    $roomsData = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $roomsData[] = $row;
    }
    return $roomsData;
}

function getRoomDetails($id) {
    global $conn;
    $q = "SELECT * FROM rooms WHERE id = :id";
    $stmt = $conn->prepare($q);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function updateRoom($conn, $id, $title) {
    try {
        $stmt = $conn->prepare("UPDATE rooms SET title = :title WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title);
        return $stmt->execute();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}


require_once('rooms_model.php');
require_once('connexion.php');
$conn = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $id = $_POST['id'] ?? null; 

        $title = $_POST['title'];
        $success = updateRoom($conn, $id, $title);
        
        if($success){
            $msg = "Room updated successfully.";
        } else {
            $error = "Failed to update room.";
        }
    }
}
?>
