<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
    
    <?php 
    session_start();

    include 'header_view.php'; ?>


    <main>
        <center>
        <h1>Settings</h1>
        <form action="parametre_controller.php" method="POST" enctype="multipart/form-data">
            <center>
            <p>If you want to change your photo or add one, you're welcome!</p>
            </center>
            <label for="profilePhoto">Profile Photo:</label>
            <input type="file" id="profilePhoto" name="profilePhoto">
            <button type="submit">Save Changes</button>
        </form>
        </center>
<hr>
    </main>

    <?php include 'resetPassword_view.php'; ?>


    <?php include 'footer.php'; ?>
</body>
</html>
