<?php

require_once('connexion.php');
session_start();

ob_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bool = 1;
    $ERR_LOGIN_INCOORECT = '';

    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];

        if (empty($login)) {
            $ERR_LOGIN_VIDE = '<span class="erreur">Le login est vide !!</span>';
            $bool = 0;
        }

        if (empty($password)) {
            $ERR_PASSWORD_VIDE = '<span class="erreur">La password est vide !!</span>';
            $bool = 0;
        }

        if ($bool > 0) {
            $conn = getConnection(); 
            $stmt = $conn->prepare("SELECT password FROM utilisateur WHERE login = :login");
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            $hashed_password = $stmt->fetchColumn(); 
            
            //echo 'Entered password: ' . $password . '<br>';
            //echo 'Password after dehashing: ' . password_hash($password, PASSWORD_DEFAULT) . '<br>';

           // echo 'Hashed password from database: ' . $hashed_password . '<br>';
           // echo 'password after dehaching';
            $res = password_verify($password, $hashed_password);
            //echo 'Result of password_verify: ' . ($res ? 'true' : 'false') . '<br>';

            
            if ($res) {
                $_SESSION["login"] = $login;
                echo '<script>alert("Vous sign in  !!");</script>';
                echo '<script>window.location.href = "index_view.php";</script>';

            } else {
                $ERR_LOGIN_INCOORECT = '<span class="erreur">Vérifiez le login ou le mot de passe !!</span>';
                echo '<script>alert("Vérifiez le login ou le mot de passe !!");</script>';
            }
        }
    }
}

include("Signup_view.php");
?>
