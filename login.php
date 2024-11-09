<?php
ob_start();
session_start();
include 'header_view.php';

require_once('Admin.php');
require_once('connexion.php'); 

$conn = getConnection(); 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(Admin::loginAdmin($username, $password, $conn)){ 
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header('Location: all-rooms_controlleur.php');
    }
    else{
        $error = "Wrong Username or Password";
    }
}
require_once('header_controller.php');
?>


<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form-signin animated shake" action="" method="post">
                <h2 class="form-signin-heading">Admin Login</h2>
                <label for="inputEmail" class="sr-only">Username</label>
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <?php
                        if(isset($error)){
                            echo "$error";
                        }
                        ?>
                    </label>
                </div>
                <input type="submit" name="submit" value="Sign In" class="btn btn-lg btn-primary btn-block">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div> 

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php include('footer.php')
?>
