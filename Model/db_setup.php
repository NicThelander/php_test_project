<?php
// sets up the database if it doesn't initially exist.
include('./util/logs.php');

class db_setup{

    private $logs;
    private $servername;
    private $username;
    private $password;

    function __construct()
    {
        $this->logs = new logs();
        $this->servername = "localhost";
        $this->username = "admin";
        $this->password = "password";
    }


function setUpDB(){
$conn = new mysqli($this->servername, $this->username, $this->password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS nicDB";
if ($conn->query($sql) === TRUE) {
    $this->logs->console_log("Db created successfully");
} else {
    $this->logs->console_log("Error creating database:  {$conn->error}");
}

$conn->close();
}
}
