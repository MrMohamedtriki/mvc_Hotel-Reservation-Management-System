<?php


$bool = true;
if (isset($_POST["cin"])) {

$cin = $_POST["cin"];
if (empty($cin)) {
  $ERR_CIN_VIDE = '<span class="erreur">Le Cin est vide !!</span>';

  $bool = 0;
}
if (strlen($cin) != 8) {
  $ERR_CIN_LENGTH = '<span class="erreur">La longueur du numéro d identification(CIN) doit être de 8 !!</span>';

  $bool = 0;
}
if (!is_numeric($cin)) {
  $ERR_CIN_NUM = '<span class="erreur"> Le Cin  doit etre numéro  !!</span>';

  $bool = 0;
}
}
if (isset($_POST["login"])) {

$login = $_POST["login"];
if (empty($login)) {
  $ERR_LOGIN_VIDE = '<span class="erreur">Le login est vide !!</span>';

  $bool = 0;
}
}
if (isset($_POST["name"])) {

$name = $_POST["name"];
if (empty($name)) {
  $ERR_NAME_VIDE = '<span class="erreur">Le nom est vide !!</span>';

}
}
if (isset($_POST["date_naiss"])) {

$date_naissance = $_POST["date_naiss"];
if (empty($date_naissance)) {
  $ERR_AGE_VIDE = '<span class="erreur">Le date naissance  est vide !!</span>';
  $_SESSION["ERR_AGE_VIDE"] = $ERR_AGE_VIDE;
  $bool = 0;
} else {
  $datetime_naissance = new DateTime($date_naissance);
  $datetime_systeme = new DateTime();
  $interval = $datetime_naissance->diff($datetime_systeme);
  if ($interval->y < 18) {
    $ERR_AGE_JEUNE = '<span class="erreur">Vous êtes jeune moins de 18 ans !</span>';
    $bool = 0;
  }
  if ($datetime_naissance > $datetime_systeme) {
    $ERR_AGE_DATESYS = '<span class="erreur"> La Date naissance superieur date now !!</span>';

    $bool = 0;
  }
}
}
if (isset($_POST["email"])) {

$email = $_POST["email"];
if (empty($email)) {
  $ERR_EMAIL_VIDE = '<span class="erreur">L email est vide !!</span>';
  $_SESSION["ERR_EMAIL_VIDE"] = $ERR_EMAIL_VIDE;
  $bool = 0;
}
}
if (isset($_POST["password"])) {

$password = $_POST["password"];
if (empty($password)) {
  $ERR_PASSWORD_VIDE = '<span class="erreur">  la password est vide !!</span>';
  $bool = 0;
}
}
if (isset($_POST["Confpassword"])) {
$Confpassword = $_POST["Confpassword"];
if (empty($Confpassword)) {
  $ERR_ConfPASSWORD_VIDE = '<span class="erreur">  la Confirme_Password est vide !!</span>';
  $bool = 0;
}
else {
  if (isset($_POST["password"])) {
    $password = $_POST["password"];
    if (!empty($password)) {
      if ($password != $Confpassword) {
        $ERR_ConfPASSWORD_NOTEGALE = '<span class="erreur">  le password n a pas Correspondant !!</span>';
        $bool = 0;
      }
    }
  }
}
}
if ($bool > 0 ) {
  
  include("Utilisateur.php");
  if (isset($_POST['login'])  and isset($_POST['password']) and isset($_POST['cin'])  and  isset($_POST['name']) and isset($_POST['date_naiss']) and isset($_POST['email']) and 
  !empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['cin']) and !empty($_POST['name']) and !empty($_POST['date_naiss']) and !empty($_POST['email'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $cin = $_POST['cin'];
    $name = $_POST['name'];
    $date_naiss = $_POST['date_naiss'];
    $email = $_POST['email'];
    $ut = new Utilisateur($login,$password, $cin,$name, $date_naiss, $email);
    $nb = Utilisateur::ajouterUtilisateur($ut);
    if ($nb > 0) {
      setcookie('login', $login, time() + 3600);
      
      header("Location:Signup_view.php");
    } else {
      $ERR_LOGIN_EXSITE = '<span class="erreur">Le login est  deja utilise  !!</span>';
      $_SESSION["ERR_LOGIN_EXSITE"] = $ERR_LOGIN_EXSITE;
    }
  }
}


include('Inscription_view.php');
include('footer.php')

?>
