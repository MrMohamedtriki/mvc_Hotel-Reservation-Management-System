<?php
session_start(); 
require_once('Utilisateur.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        if(isset($_SESSION['login'])) {
            $login = $_SESSION['login']; 
            $password = $_POST['password'];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $success = Utilisateur::resetPassword($login, $hashed_password);
            
            if($success){
                echo "<script>alert('Password reset successfully.'); window.location.href = 'index_view.php';</script>";
            } else {
                echo "<script>alert('Failed to reset password.');</script>";
                echo "<script>window.location.href = 'index_view.php';</script>";
            }
        } else {
            echo "<script>alert('No user is currently logged in.');</script>";
        }
    }
}
?>
