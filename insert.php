<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$day=$_REQUEST['day'];
$time=$_POST['time'];
$dt=$_POST['date'];
$name=$_REQUEST['name'];
$phone_no=$_REQUEST['phone_no'];
$no_of_people=$_REQUEST['no_of_people'];

$sql = "INSERT INTO registration (day,time,dt,name,phone_no,no_of_people )
VALUES ('$day',' $time',$dt,'$name','$phone_no','$no_of_people' )";

if (mysqli_query($conn, $sql)) {
  echo "Thank You for Booking! Your Booking is successfull!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>