<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['login'])) {
        $error = "You need to be logged in, please!";
        echo "<script>console.log('$error');</script>";
        echo "<script>alert('You need to be logged in, please!');</script>";
    } else {
        require_once 'report_model.php'; 

        $success = submitReport($_POST['issue']);

        if ($success) {
            echo '<script>alert("Report submitted successfully!");</script>'; 
            echo '<script>window.location.href = "index_controlleur.php";</script>'; 
        } else {
            http_response_code(500);
            echo "Error occurred while submitting report";
        }
    }
}

?>
