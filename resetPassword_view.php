<?php  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <center>
    <h2>Reset Password</h2>
    <form action="resetPassword_controlleur.php" method="post">
        
        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Reset Password">
    </form>
</center>
</body>
</html>
<?php  
?>
