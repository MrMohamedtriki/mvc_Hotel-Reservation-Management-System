<?php
session_start();
require_once('db.php');
require_once('rooms_model.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $title = mysqli_real_escape_string($con,$_POST['title']);
        $post_data = mysqli_real_escape_string($con,$_POST['post-data']);
        $size = mysqli_real_escape_string($con,$_POST['size']);
        $price = mysqli_real_escape_string($con,$_POST['price']);
        
        $image1 = $_FILES['image1']['name'];
        $tmp_name1 = $_FILES['image1']['tmp_name'];
        $image2 = $_FILES['image2']['name'];
        $tmp_name2 = $_FILES['image2']['tmp_name'];
        $image3 = $_FILES['image3']['name'];
        $tmp_name3 = $_FILES['image3']['tmp_name'];
        $image4 = $_FILES['image4']['name'];
        $tmp_name4 = $_FILES['image4']['tmp_name'];
        
        $q = "SELECT * FROM rooms ORDER BY rooms.id DESC LIMIT 1";
        $r = mysqli_query($con, $q);
        if(mysqli_num_rows($r) > 0){
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $id = $id + 1;
        }
        else{
            $id = 1;
        }
        
        if(empty($title) or empty($post_data) or empty($size) or empty($price) or empty($image1) or empty($image2) or empty($image3) or empty($image4)){
            $error = "All (*) Feilds Are Required";
        }
        else{
            $insert_query = "INSERT INTO rooms (`id`,`title`,`description`,`size`,`price`,`image1`,`image2`,`image3`,`image4`) VALUES ($id,'$title','$post_data','$size','$price','$image1','$image2','$image3','$image4')";
            if(mysqli_query($con, $insert_query)){
                $path1 = "images/photos/$image1";
                $path2 = "images/photos/$image2";
                $path3 = "images/photos/$image3";
                $path4 = "images/photos/$image4";
                if(move_uploaded_file($tmp_name1, $path1) and move_uploaded_file($tmp_name2, $path2) and move_uploaded_file($tmp_name3, $path3) and move_uploaded_file($tmp_name4, $path4)){
                    $msg = "Post has been added";
                    $title = "";
                    $post_data = "";
                    $size = "";
                    $price = "";
                    copy($path1, "$path1");
                    copy($path2, "$path2");
                    copy($path3, "$path3");
                    copy($path4, "$path4");
                }
            }
            else{
                $error = "Post Has not Been Added";
            }
        }
    }
}
include('add-room_view.php');

?>
