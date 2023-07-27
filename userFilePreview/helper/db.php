<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "userfile";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database is not Connected!!".mysqli_connect_error());
} else {
    echo "<script>alert('Database Connected Successfully);</script>";
}

?>