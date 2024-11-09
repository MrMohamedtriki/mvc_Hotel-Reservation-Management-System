<?php
session_start();

include("connexion.php"); 

if (!isset($_SESSION['login'])) {
    $error = "You need to be logged in, please!";
    echo "<script>alert('You need to be logged in, please!');</script>";
} else {
    include("Utilisateur.php");

    $conn = getConnection();

    $login = isset($_SESSION['login']) ? $_SESSION['login'] : '';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profilePhoto'])) {
        $file = $_FILES['profilePhoto'];

        if ($file['error'] === UPLOAD_ERR_OK) {
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            
            if (in_array($fileExtension, $allowedExtensions)) {
                $uploadDir = realpath('uploads/') . '/';

                $destination = $uploadDir . $fileName;
                
                if (move_uploaded_file($fileTmpName, $destination)) {
                    $stmt = $conn->prepare("UPDATE utilisateur SET image = :image WHERE login = :login");
                    $stmt->bindParam(':image', $fileName);
                    $stmt->bindParam(':login', $login);

                    if ($stmt->execute()) {
                        echo "<script>alert('Profile photo updated successfully.');</script>";
                        echo "<script>window.location.href = 'index_view.php';</script>";

                    } else {
                        echo "<script>alert('Error updating profile photo');</script>";
                        echo "window.location.href = 'index_view.php';</script>";

                    }
                } else {
                    echo "Error moving uploaded file.";
                }
            } else {
                echo "Invalid file type. Allowed extensions: " . implode(', ', $allowedExtensions);
            }
        } else {
            echo "You must select a photo!";
        }
    }
}
?>
