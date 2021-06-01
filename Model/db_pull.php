<?php

$servername = "localhost";
$database = "nicDB";
$username = "admin";
$password = "password";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql_req = "SELECT name, email, number FROM Testing";
$result = $conn->query($sql_req);
while ($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"] . ", email: " . $row["email"] . ", number: " . $row["number"] . "<br>";
}

mysqli_close($conn);
