<?php 
session_start();
ob_start();
include 'header_view.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script_header.js"></script>
  <link type="text/css" rel="stylesheet" href="style.css" />

  <title>User Registration</title>
</head>

<body>
  

  <div class="container">
    <form method="post" action="Inscription_controlleur.php">
    <center>
      <p class="titre">User Registration</p>
      <table>
        <tr>
          <td>
            <label for="cin">National Identity Card (CIN):</label>
          </td>
          <td>
            <input type="text" class="input_Text" id="cin" name="cin" value='<?php if (isset($_POST['cin'])) {
              echo $_POST['cin'];
            } ?>'>
            <br>
            <?php
            if (isset($ERR_CIN_VIDE))
              echo $ERR_CIN_VIDE;
            if (isset($ERR_CIN_LENGTH))
              echo $ERR_CIN_LENGTH;
            if (isset($ERR_CIN_NUM))
              echo $ERR_CIN_NUM;
            ?>

          </td>
        </tr>
        <tr>
          <td>
            <label for="name">Name:</label>
          </td>
          <td>
            <input type="text" class="input_Text" id="name" name="name" value='<?php if (isset($_POST['name'])) {
              echo $_POST['name'];
            } ?>'>
            <br>
            <?php if (isset($ERR_NAME_VIDE))
              echo $ERR_NAME_VIDE;
            ?>

          </td>
        </tr>
        <tr>
          <td>
            <label for="date_naiss">Date of Birth:</label>
          </td>
          <td>
            <input type="date" id="date_naiss" class="input_Text" name="date_naiss" value='<?php if (isset($_POST['date_naiss'])) {
              echo $_POST['date_naiss'];
            } ?>'>
            <br>
            <?php if (isset($ERR_AGE_VIDE))
              echo $ERR_AGE_VIDE;
            if (isset($ERR_AGE_JEUNE))
              echo $ERR_AGE_JEUNE;
            if (isset($ERR_AGE_DATESYS))
              echo $ERR_AGE_DATESYS;
            ?>
          </td>
        </tr>
        <tr>
          <td><label for="login">Login:</label></td>
          <td><input type="text" class="input_Text" id="login" name="login" value='<?php if (isset($_POST['login'])) {
            echo $_POST['login'];
          } ?>'>
            <br>
            <?php if (isset($ERR_LOGIN_VIDE))
              echo $ERR_LOGIN_VIDE;
            if (isset($ERR_LOGIN_EXSITE))
              echo $ERR_LOGIN_EXSITE;
            ?>
          </td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td><input type="email" class="input_Text" id="email" name="email" value='<?php if (isset($_POST['email'])) {
            echo $_POST['email'];
          } ?>'>
            <br>
            <?php if (isset($ERR_EMAIL_VIDE))
              echo $ERR_EMAIL_VIDE;
            if (isset($ERR_EMAIL_VERRIFIE))
              echo $ERR_EMAIL_VERRIFIE;
            ?>
          </td>
        </tr>
        <tr>
          <td><label for="password">password:</label></td>
          <td>
            <div class="Psswd">

              <input type="password" class="input_Text" id="password" name="password" value='<?php if (isset($_POST['password'])) {
                echo $_POST['password'];
              } ?>'>
              <br>
              
              <?php if (isset($ERR_PASSWORD_VIDE))
                echo $ERR_PASSWORD_VIDE;
              ?>

            </div>
          </td>
        </tr>
        <tr>
          <td> <label for="Confpassword">configuration password:</label></td>
          <td><input type="password" class="input_Text" id="Confpassword" name="Confpassword" value='<?php if (isset($_POST['Confpassword'])) {
            echo $_POST['Confpassword'];
          } ?>'>
            <br>
            <?php if (isset($ERR_ConfPASSWORD_VIDE))
              echo $ERR_ConfPASSWORD_VIDE;
            if (isset($ERR_ConfPASSWORD_NOTEGALE))
              echo $ERR_ConfPASSWORD_NOTEGALE;

            ?>
          </td>
        </tr>
      </table>
      
        <button type="submit">Save Changes</button>
      <br>
      <br>
      <p class="New"> have an account? <a href="Signup_view.php"> Signup </a></p>
      </center>
    </form>
   
  </div>
  
</body>
<?php
include('footer.php');
?>

</html>
