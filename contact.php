<?php
session_start();
include 'header_view.php';


?>

<div class="container">
    <center><h1 class="title">Contact Us</h1></center>
    <?php
    require_once('connexion.php');
    $error = "";
    $color = "red";
    if (!isset($_SESSION['login'])) {
        $error = "You need to be logged in, please!";
        echo "<script>alert('You need to be logged in, please!');</script>";

    }
    elseif (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            $error = "All fields are required, please try again.";
            echo "<script>alert('All fields are required, please try again.');</script>";
        } else {
            $stmt = $conn->prepare("INSERT INTO feedback (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
            if ($stmt) {
                $stmt->bindValue(':name', $name);
                $stmt->bindValue(':email', $email);
                $stmt->bindValue(':phone', $phone);
                $stmt->bindValue(':message', $message);
                if ($stmt->execute()) {
                    $error = "We've got your feedback";
                    $color = "green";
                    echo '<script>alert("we got your feedback");</script>'; 

                } else {
                    $error = "Error occurred";
                }
                $stmt->closeCursor(); 
            } else {
                $error = "Error occurred";
            }
        }
    }
    ?>
    <div class="contact" style="margin-top: -50px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="spacer">
                        <h4>Write to us</h4>
                        <label style="color: <?php echo $color; ?>">
                            
                        <form role="form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Send" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>
