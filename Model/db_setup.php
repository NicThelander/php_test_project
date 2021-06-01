<?php
// sets up the database if it doesn't initially exist.
include('./util/logs.php');


class db_setup {

    private $conn;
    private $database;
    private $logs;

    function __construct(&$conn, $database, &$logs = new logs()) {
        $this->conn = $conn;
        $this->database = $database;
        $this->logs = $logs;
    }


    function setup(){
        $sql = "CREATE DATABASE IF NOT EXISTS " . $this->database;
        if ($this->conn->query($sql) === TRUE) {
            $this->logs->console_log("Db created successfully");
        } else {
            $this->logs->console_log("Error creating database:  {$conn->error}");
        }
    }
    public function populate() {

        $sql_create_table = "CREATE TABLE IF NOT EXISTS Testing (
            name VARCHAR(100),
            email VARCHAR(100),
            number VARCHAR(20),
            UNIQUE(name, email, number)
            );
            ";
        if ($this->conn->query($sql_create_table) === TRUE) {
            for ($x = 0; $x <= 9; $x++) {

                $sql = "INSERT IGNORE INTO Testing (name, email, number) VALUES ('Test{$x}', 'test@testing.com{$x}', 'xxx-xxx-xxxx{$x}')";
                if (mysqli_query($this->conn, $sql)) {
                    $this->logs->console_log("Test row populated{$x}");
                } else {
                    $this->logs->console_log("Error: " . $sql . "<br>" . mysqli_error($this->conn));
                }
            }
        }
    }

}
