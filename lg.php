<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "reservation";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username=$_POST['username'];
$pass=$_POST['password'];
if($username=='admin' && $pass='admin'){
    header('location:data.php');
}

mysqli_close($conn);
?>

