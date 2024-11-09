<?php
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
                require_once 'db.php';

                $safeFileName = mysqli_real_escape_string($con, $fileName);

                $insertQuery = "INSERT INTO utilisateur (filename) VALUES ('$safeFileName')";

                if (mysqli_query($con, $insertQuery)) {
                    echo "Image uploaded and inserted into database.";
                } else {
                    echo "Error inserting into database: " . mysqli_error($con);
                }
            } else {
                echo "Error moving uploaded file.";
            }
        } else {
            echo "Invalid file type. Allowed extensions: " . implode(', ', $allowedExtensions);
        }
    } else {
        echo "Error during file upload: " . $file['error'];
    }
}
?>