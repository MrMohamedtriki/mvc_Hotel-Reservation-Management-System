<?php
class Admin
{
    public $login;
    public $password;

    function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
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

    public static function ajouterAdmin($admin, $conn)
    {
        $stmt = $conn->prepare("INSERT INTO Admin (login, password) VALUES (:login, :password)");
        $stmt->bindParam(':login', $admin->login);
        $stmt->bindParam(':password', $admin->password);
        
        if ($stmt->execute()) {
            return true; 
        } else {
            return false; 
        }
    }

    public static function loginAdmin($login, $password, $conn)
    {
        $sql = $conn->prepare("SELECT * FROM Admin WHERE login=:login AND password=:password");
        $sql->bindParam(':login', $login);
        $sql->bindParam(':password', $password);
        $sql->execute();
        $result = $sql->fetch();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>
