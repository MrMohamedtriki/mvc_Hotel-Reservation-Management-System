<?php
require_once 'connexion.php'; 

function submitReport($issue) {
    $conn = getConnection(); 

    try {
        $sql = "INSERT INTO report (report_text) VALUES (:issue)";
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':issue', $issue);
        
        $success = $stmt->execute();

        $conn = null;

        return $success;
    } catch (PDOException $e) {
        return false;
    }
}
?>
