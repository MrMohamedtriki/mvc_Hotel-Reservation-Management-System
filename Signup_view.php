<?php
ob_start();
include("header_view.php");
include('connexion.php'); 
require_once("Utilisateur.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="signup.css" />
</head>

<body>
    <center>
        <div class="container">
            <form action="Signup_controlleur.php" method="post">
                <p class="titre">Bienvenue</p>
                <div class="User">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="login" class="input_Text" value='<?php if (isset($_POST['login'])) {echo $_POST['login'];} ?>'>
                </div>
                <div class="Psswd">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="input_Text">
                    
                </div>

                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me" id="check">Remember Me</label>
                <br>    
                <a href="resetPassword_view.php" class="Reset">Reset Password</a><br>
                <input type="submit" value="Sign In" class="input_Text"><br>
                <?php if (isset($ERR_LOGIN_INCOORECT)) echo $ERR_LOGIN_INCOORECT; ?>
                <p class="New">Don't have an account? <a href="Inscription_view.php">Create a new one</a></p>
            </form>
        </div>
    </center>
    
</body>

<?php
include('footer.php');
?>
</html>
