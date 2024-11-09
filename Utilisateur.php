<?php
require_once('connexion.php');

class Utilisateur
{
    public $login;
    public $password;
    public $nom;
    public $cin;
    public $date_naiss;
    public $email;

    function __construct($login, $password, $cin, $nom, $date_naiss, $email)
    {
        $this->login = $login;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->nom = $nom;
        $this->cin = $cin;
        $this->date_naiss = $date_naiss;
        $this->email = $email;
    }

    public function __get($attr)
    {
        if (!isset($this->$attr)) return "erreur";
        else return ($this->$attr);
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public static function ajouterUtilisateur($utilisateur)
    {
        $conn = getConnection(); 
        $nb = $conn->exec("INSERT INTO utilisateur (login, password, cin, nom, date_naiss, email) VALUES('$utilisateur->login','$utilisateur->password','$utilisateur->cin','$utilisateur->nom','$utilisateur->date_naiss','$utilisateur->email')");
        return $nb;
    }

    public static function signuputilisateur($login, $password)
    {
        $conn = getConnection(); 
        $sql = $conn->prepare("SELECT * FROM utilisateur WHERE login=:login AND password=:password");
        $sql->bindParam(':login', $login);
        $sql->bindParam(':password', $password);
        $sql->execute();
        $resultat = $sql->fetchAll();
        $nb_lignes = count($resultat);
        return $nb_lignes;
    }

    public static function loginexiste($login)
    {
        $conn = getConnection(); 
        $nb = $conn->exec("SELECT * FROM utilisateur WHERE login='$login'");
        return $nb;
    }

    public static function getUserByLogin($login)
    {
        $conn = getConnection(); 
        $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE login = :login");
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function checkCredentials($login, $password)
    {
        $user = self::getUserByLogin($login);
        if ($user && password_verify($password, $user['password'])) {
            return true; 
        } else {
            return false; 
        }
    }

    public static function updateProfilePhoto($login, $fileName)
    {
        $conn = getConnection(); 
        $stmt = $conn->prepare("UPDATE utilisateur SET image = :image WHERE login = :login");
        $stmt->bindParam(':image', $fileName);
        $stmt->bindParam(':login', $login);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function resetPassword($login, $password)
    {
        $conn = getConnection(); 
        $stmt = $conn->prepare("UPDATE utilisateur SET password = :password WHERE login = :login");
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':login', $login);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
