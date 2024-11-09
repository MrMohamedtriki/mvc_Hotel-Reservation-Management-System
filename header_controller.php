<?php

require_once("connexion.php");

$conn = getConnection();


    
if (isset($_SESSION['login']) && $_SESSION['login'] != "") {
    $login = $_SESSION['login'];

    $stmt = $conn->prepare("SELECT image FROM utilisateur WHERE login = :login");
    $stmt->bindParam(':login', $login);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && isset($user['image']) && !empty($user['image'])) {
        $imagePath = 'uploads/' . $user['image'];
        echo '<div class="profile-icon"><img src="' . $imagePath . '" alt="Profile Photo"></div>';
    } else {
        echo "Profile photo not found.";
    }

    echo "
    <div class='user-info'>
        <p>$login</p>
        <div class='flex-btn'>
            <a href='logout.php' class='delete-btn' onclick=\"return confirm('Logout from the website?');\">Logout</a>
        </div>
    </div>
    ";
} else {
    echo "
    <p>Please login or register first! </p>
    <div class='flex-btn'>
        <a href='Inscription_view.php' class='option-btn'>Inscription</a>
        <a href='Signup_view.php' class='option-btn'>Signup</a>
    </div>
    ";  
}



?>
