<?php
// sets up the database if it doesn't initially exist.
include('./util/logs.php');


class db_setup {

    
    private $database;
    private $logs;

    function __construct() { // was testing out passing args in the construct but decided to rather do
        // it by function so I would only need one file for the set up
        
        // $this->conn = $conn;
        // $this->database = $database;
        // $this->logs = $logs;
        // $this->logs->console_log("test");
        // $this->conn = new mysqli("localhost", "admin", "password",);
        // $this->database = $database;
        $this->database = 'nicDB';
        $this->logs = new logs();
        $this->logs->console_log("test");
    }
    

    function setup($conn){
        
        $sql = "CREATE DATABASE IF NOT EXISTS " . $this->database;
        if ($conn->query($sql) === TRUE) {
            $this->logs->console_log("Db created successfully");
        } else {
            $this->logs->console_log("Error creating database:  {$conn->error}");
        }
    }
    public function populate($conn2) {
     
        $sql_create_table = "CREATE TABLE IF NOT EXISTS Testing (
            name VARCHAR(100),
            email VARCHAR(100),
            number VARCHAR(20),
            UNIQUE(name, email, number)
            );
            ";
        if ($conn2->query($sql_create_table) === TRUE) {
            for ($x = 0; $x <= 9; $x++) {

                $sql = "INSERT IGNORE INTO Testing (name, email, number) VALUES ('Test{$x}', 'test@testing.com{$x}', 'xxx-xxx-xxxx{$x}')";
                if (mysqli_query($conn2, $sql)) {
                    $this->logs->console_log("Test row populated{$x}");
                } else {
                    $this->logs->console_log("Error: " . $sql . "<br>" . mysqli_error($conn2));
                }
            }
        }
    }

}
