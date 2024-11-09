<?php

class RequestsModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllRequests() {
        try {
            $query = "SELECT id, name, email, phone, room_name, message, etat, checkInDate, checkOutDate, price FROM requests ORDER BY id ASC";
            $result = $this->conn->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return []; 
        }
    }

    public function updateRequestStatus($reservation_id, $new_status) {
        $query = "UPDATE requests SET etat = :new_status WHERE id = :reservation_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':reservation_id', $reservation_id);
        $stmt->bindParam(':new_status', $new_status);
        return $stmt->execute();
    }
    public function getReservationsByUser($username) {
        $query = "SELECT * FROM requests WHERE name = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertRequest($name, $email, $phone, $roomType, $message, $checkInDate, $checkOutDate, $price) {
        $query = "INSERT INTO `requests`(`name`, `email`, `phone`, `room_name`, `message`, `checkInDate`, `checkOutDate`, `price`) 
                  VALUES (:name, :email, :phone, :roomType, :message, :checkInDate, :checkOutDate, :price)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':checkInDate', $checkInDate);
        $stmt->bindParam(':checkOutDate', $checkOutDate);
        $stmt->bindParam(':price', $price);
        return $stmt->execute();
    }
    
    

}
?>
