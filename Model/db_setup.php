<?php


include('./util/logs.php');
$logs = new logs();
$servername = "localhost";
$username = "admin";
$password = "password";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS nicDB";
if ($conn->query($sql) === TRUE) {
    $logs->console_log("Db created successfully");
} else {
    $logs->console_log("Error creating database:  {$conn->error}");
}

$conn->close();
