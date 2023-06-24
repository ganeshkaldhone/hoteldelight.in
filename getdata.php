<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: darkcyan;
    }
</style>
<body align= "center">
    <h1>Reservation Data</h1>
    <br><br>
<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservation";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM registration";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table >";
        echo "<tr><th>Day</th><th>Time</th><th>Name</th><th>Phone Number</th><th>Number of People</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['day'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['no_of_people'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No reservations found.";
    }

    mysqli_close($conn);
    ?>
    
</body>
</html>
