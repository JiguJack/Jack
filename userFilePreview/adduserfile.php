<?php
include "helper/db.php";

if (isset($_POST["submit"])) {

    $userName = $_POST["getname"];
    $userEmail = $_POST["getemail"];

    $fileName = $_FILES["uploadfile"]["name"];
    $tmpName = $_FILES["uploadfile"]["tmp_name"];
    $folder = "files/" . $fileName;
    move_uploaded_file($tmpName, $folder);

    $query = "INSERT INTO `user`(`name`, `email`, `file`) VALUES ('$userName', '$userEmail', '$folder')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo " <script> alert('File Uploaded Successfully');location='index.php'; </script>";
    } else {
        echo " <script> alert('Something went wrong!!!'); </script> ";
    }
}

?>